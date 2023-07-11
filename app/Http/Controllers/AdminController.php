<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class AdminController extends Controller
{
    public function dashboard(){
    	return view('pages.admin.dashboard.index');
    }
    public function karir(){
    	return view('pages.admin.karir.index');
    }
    public function storekarir(Request $request){
    	if(isset($_POST['add'])){
    		return back()->with('berhasil', 'Data berhasil ditambahkan');
    	} elseif(isset($_POST['update'])){
    		return back()->with('updateberhasil', 'Data berhasil diupdate');
    	}
    }
    public function karirdelete(Request $request){
    	return back()->with('deleteberhasil', 'Data berhasil didelete');
    }
    public function legalisasi(){
    	return view('pages.admin.legalisasi.index');
    }
    public function konfirmasisselesailegalisasi(Request $request){
    	setcookie('prosesselesai', true);
    	return back()->with('prosesberhasil', 'Data berhasil diubah');
    }
    public function berita(){
    	return view('pages.admin.berita.index');
    }
    public function storeberita(Request $request){
    	if(isset($_POST['add'])){
    		return back()->with('prosesberhasil', 'Data berhasil ditambahkan');
    	} elseif(isset($_POST['update'])){
    		return back()->with('updateberhasil', 'Data berhasil diupdate');
    	}
    }
    public function beritadelete(Request $request){
    	return back()->with('deleteberhasil', 'Data berhasil didelete');
    }
    public function beritashow(Request $request){
    	return view('pages.admin.berita.show');	
    }
    public function pengaturan(Request $request){
    	return view('pages.admin.pengaturan.index');		
    }
    public function storepengaturan(Request $request){
    	return back()->with('gantipasswordberhasil', 'Data berhasil diganti');	
    }
    public function kuesioner(){
        $expiryTime = time() - 3600;
        setcookie('isian', '', $expiryTime);
        setcookie('pilgan', '', $expiryTime);
    	return view('pages.admin.kuesioner.index');			
    }
    public function storekuesioner(Request $request){
        if(isset($_POST['add'])){
    	   return redirect(route('admin.kuesioner').'/tambah/1?nama='.$request->nama)->with('berhasil', 'Data berhasil diganti');		
        } else {
            return back()->with('updateberhasil', 'Data berhasil diganti');       
        }
    }
    public function tambahpertanyaan(Request $request){
    	if(isset($_COOKIE['isian']) || isset($_COOKIE['pilgan'])){
    		if(isset($_COOKIE['isian'])){
    			$data = json_decode($_COOKIE['isian'], true);
    		} elseif(isset($_COOKIE['pilgan'])){
    			$data = json_decode($_COOKIE['pilgan'], true);
    		}
    	} else {
    		$data = '';
    	}
    	return view('pages.admin.kuesioner.tambahpertanyaan')->with(['data' => $data]);
    }
    public function storetambahpertanyaan(Request $request){
    	$expiryTime = time() - 3600;
    	if(isset($_POST['isian'])){
	    	$data = [
	    		'q' => $request->pertanyaan,
	    		'a' => $request->jawaban
	    	];
	    	$json = json_encode($data);
	    	setcookie('pilgan', '', $expiryTime);
	    	setcookie('isian', $json);
    	} elseif(isset($_POST['pilgan'])){
	    	$data = [
	    		'q' => $request->pertanyaan,
	    		'a' => ''
	    	];
	    	$json = json_encode($data);
	    	setcookie('isian', '', $expiryTime);
	    	setcookie('pilgan', $json);
    	}
    	return back()->with('berhasiltambahdata', 'Data berhasil diganti');		
    }
    public function deletepertanyaan(Request $request){
        return back()->with('deleteberhasil', 'Data berhasil didelete');
    }
    public function aktifkankuesioner(Request $request){
        setcookie('statuskuesioner', true);
        return back()->with('aktifkuesionerberhasil', 'Data berhasil ditambahkan');   
    }
    public function deletekuesioner(Request $request){
        return back()->with('deleteberhasil', 'Data berhasil didelete');   
    }
    public function showkuesioner(Request $request){
        return view('pages.admin.kuesioner.show')->with(['text' => $request->text]);
    }
    public function dataalumni(Request $request){
        return view('pages.admin.dataalumni.index'); 
    }
    public function dataalumniexcel (){
        return view('pages.admin.dataalumni.excel');    
    }
    public function tracerstudy (){
        return view('pages.admin.hasilstudy.index');
    }
    public function tracerstudyexcel  (){
        return view('pages.admin.hasilstudy.excel');    
    }

    public function dataalumnipdf() {
        $pdf = new Fpdf();
        $pdf->AddPage('L', array(350, 210));
        $pdf->SetMargins(25, 25, 25, 25);
        $pdf->SetFont('Times', 'B', 16);
        $pdf->Cell(0, 1, '', 0, 1, 'C');
        $pdf->Cell(0, 15, 'Rekap Data Alumni', 1, 1, 'C');

        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(10, 10, 'No', 1, 0, 'C');
        $pdf->Cell(33, 10, 'NIM', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Nama', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Jurusan', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Tahun Lulus', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Email', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Telepon', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '1', 1, 0, 'C');
        $pdf->Cell(33, 10, '1902345', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Adita Lipta Ditia', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'adita@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838329', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '2', 1, 0, 'C');
        $pdf->Cell(33, 10, '1903467', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Ahmad Dzikri', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Dzkr@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838330', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '3', 1, 0, 'C');
        $pdf->Cell(33, 10, '1903456', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Alfian Denanda', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Denan@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838338', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '4', 1, 0, 'C');
        $pdf->Cell(33, 10, '1904687', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Andian Putri', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Andian@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838337', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '5', 1, 0, 'C');
        $pdf->Cell(33, 10, '1903456', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Septia Ariani', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Septi@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838336', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '6', 1, 0, 'C');
        $pdf->Cell(33, 10, '1902345', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Andian Putri', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Anip@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838335', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '7', 1, 0, 'C');
        $pdf->Cell(33, 10, '1904687', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Dika Firmansyah', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Diki@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838334', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '8', 1, 0, 'C');
        $pdf->Cell(33, 10, '1904687', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Septia Ariani', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Septi@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838333', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '9', 1, 0, 'C');
        $pdf->Cell(33, 10, '1903456', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Andian Putri', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Andip@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838332', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '10', 1, 0, 'C');
        $pdf->Cell(33, 10, '1904687', 1, 0, 'C');
        $pdf->Cell(54, 10, 'Firmansyah', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(40, 10, '2019', 1, 0, 'C');
        $pdf->Cell(41.5, 10, 'Diki@gmail.com', 1, 0, 'C');
        $pdf->Cell(41.5, 10, '081254838331', 1, 1, 'C'); 

        $pdf->Output();
        exit();
    }
    public function tracerstudypdf() {
        $pdf = new Fpdf();
        $pdf->AddPage('L', array(350, 210));
        $pdf->SetMargins(10.5, 10.5, 10.5, 10.5);
        $pdf->SetFont('Times', 'B', 16);
        $pdf->Cell(0, 1, '', 0, 1, 'C');
        $pdf->Cell(0, 15, 'Rekap Data Alumni', 1, 1, 'C');

        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(10, 10, 'No', 1, 0, 'C');
        $pdf->Cell(23, 10, 'NIM', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Nama', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Jurusan', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Email', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Telepon', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Jabatan', 1, 0, 'C');
        $pdf->Cell(20, 10, 'Status', 1, 0, 'C');
        $pdf->Cell(28, 10, 'Gaji', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Waktu Tunggu', 1, 1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '1', 1, 0, 'C');
        $pdf->Cell(23, 10, '1902345', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Adita Lipta Ditia', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'adita@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838329', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '2', 1, 0, 'C');
        $pdf->Cell(23, 10, '1903467', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Ahmad Dzikri', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Dzkr@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838330', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '3', 1, 0, 'C');
        $pdf->Cell(23, 10, '1903456', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Alfian Denanda', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Denan@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838338', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '4', 1, 0, 'C');
        $pdf->Cell(23, 10, '1904687', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Andian Putri', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Andian@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838337', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '5', 1, 0, 'C');
        $pdf->Cell(23, 10, '1903456', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Septia Ariani', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Septi@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838336', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '6', 1, 0, 'C');
        $pdf->Cell(23, 10, '1902345', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Andian Putri', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Anip@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838335', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '7', 1, 0, 'C');
        $pdf->Cell(23, 10, '1904687', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Dika Firmansyah', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Diki@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838334', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '8', 1, 0, 'C');
        $pdf->Cell(23, 10, '1904687', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Septia Ariani', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Septi@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838333', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '9', 1, 0, 'C');
        $pdf->Cell(23, 10, '1903456', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Andian Putri', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Andip@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838332', 1,0, 'C');
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1,0, 'C');
        $pdf->Cell(20, 10, 'Bekerja', 1,0, 'C');
        $pdf->Cell(28, 10, '6.500.000', 1,0, 'C');
        $pdf->Cell(30, 10, '12 Bulan', 1,1, 'C');

        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(10, 10, '10', 1, 0, 'C');
        $pdf->Cell(23, 10, '1904687', 1, 0, 'C');
        $pdf->Cell(44, 10, 'Firmansyah', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Universitas A', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Komunikasi', 1, 0, 'C');
        $pdf->Cell(38, 10, 'Diki@gmail.com', 1, 0, 'C');
        $pdf->Cell(38, 10, '081254838331', 1, 0, 'C'); 
        $pdf->Cell(38, 10, 'Karyawan Swasta', 1, 0, 'C'); 
        $pdf->Cell(20, 10, 'Bekerja', 1, 0, 'C'); 
        $pdf->Cell(28, 10, '6.500.000', 1, 0, 'C'); 
        $pdf->Cell(30, 10, '12 Bulan', 1, 1, 'C'); 

        $pdf->Output();
        exit();
    }
}

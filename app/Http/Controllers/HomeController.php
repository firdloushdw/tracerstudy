<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view('pages.landingpage.beranda.index');
    }
    public function berita(){
    	return view('pages.landingpage.berita.index');
    }
    public function beritaShow(Request $request){
    	$id = $request->id;
    	if($id > 5){
    		return redirect(route('berita'))->with('error', 'Berita tidak ditemukan');
    	} else {
    		if($id == 1){
    			return view('pages.landingpage.berita.show-1');			
    		} elseif($id == 2){
    			return view('pages.landingpage.berita.show-2');			
    		} elseif($id == 3){
    			return view('pages.landingpage.berita.show-3');			
    		} elseif($id == 4){
    			return view('pages.landingpage.berita.show-4');			
    		} elseif($id == 5){
    			return view('pages.landingpage.berita.show-5');			
    		}
    	}
    }
    public function karir(){
    	return view('pages.landingpage.karir.index');
    }
    public function karirShow(Request $request){
    	$id = $request->id;
    	if($id > 4){
    		return redirect(route('karir'))->with('error', 'Lowongan tidak ditemukan');
    	} else {
    		if($id == 1){
    			return view('pages.landingpage.karir.show-1');			
    		} elseif($id == 2){
    			return view('pages.landingpage.karir.show-2');			
    		} elseif($id == 3){
    			return view('pages.landingpage.karir.show-3');			
    		} elseif($id == 4){
    			return view('pages.landingpage.karir.show-4');			
    		}
    	}
    }
    public function legalisasi(){
    	if(!isset($_COOKIE['legalisasi'])){
    		$data = '';
    	} else {
    		$pengambilan = $_COOKIE['pengambilan'];
    		$cookievalue = $_COOKIE['legalisasi'];
    		if(isset($_COOKIE['2ndlegalisasi'])){
    			$cookievalue2 = $_COOKIE['2ndlegalisasi'];
		    	$data = [
		    		json_decode($cookievalue, true),
		    		json_decode($cookievalue2, true)
		    	];
		    } else {
		    	$data = [
		    		json_decode($cookievalue, true)
		    	];
		    }
    	}
    	return view('pages.landingpage.legalisasi.index')->with(['data' => $data]);
    }
    public function pengajuanLegalisasi(){
    	return view('pages.landingpage.legalisasi.pengajuan');
    }
    public function storepengajuanLegalisasi(Request $request){
    	$expiryTime = time() - 3600;
    	setcookie('2ndlegalisasi', '', $expiryTime);
    	$cekpengambilan = $request->pengambilan;
    	$data = [
    		'nama' => $request->nama,
    		'jenis' => $request->jenis_berkas,
    		'berkas' => $request->berkas,
    		'bahasa' => $request->bahasa,
    		'pengambilan' => $request->pengambilan,
    		'jumlah' => $request->jumlah,
    		'bahasa' => $request->bahasa,
    	];
    	$json = json_encode($data);
    	setcookie('pengambilan', $cekpengambilan);
    	setcookie('legalisasi', $json);
	    return redirect(route('konfirmasi.legalisasi'));
    }
    public function storepengajuanLegalisasi2(Request $request){
    	$cookievalue = $_COOKIE['legalisasi'];
    	$data = json_decode($cookievalue, true);
    	$data2 = [
    		'nama' => $request->nama,
    		'jenis' => $request->jenis_berkas,
    		'berkas' => $request->berkas,
    		'bahasa' => $request->bahasa,
    		'pengambilan' => $data['pengambilan'],
    		'jumlah' => $request->jumlah,
    		'bahasa' => $request->bahasa,
    	];
    	$json2 = json_encode($data2);
    	setcookie('2ndlegalisasi', $json2);
    	header('Location: '.route('konfirmasi.legalisasi'));
    	exit();
    }
    public function konfirmasilegalisasi(){
    	if(isset($_COOKIE['legalisasi'])){
    		$pengambilan = $_COOKIE['pengambilan'];
    		$cookievalue = $_COOKIE['legalisasi'];
    		if(isset($_COOKIE['2ndlegalisasi'])){
    			$cookievalue2 = $_COOKIE['2ndlegalisasi'];
    			$count = 2;
		    	$data = [
		    		json_decode($cookievalue, true),
		    		json_decode($cookievalue2, true)
		    	];
		    } else {
		    	$count=1;
		    	$data = [
		    		json_decode($cookievalue, true)
		    	];
		    }
	    	return view('pages.landingpage.legalisasi.konfirmasi')->with(['pengambilan' => $pengambilan, 'data' => $data, 'count' => $count]);
    	} else {
    		return redirect(route('legalisasi'));
    	}
    }
    public function tambahpengajuanLegalisasi(){
    	$cookievalue = $_COOKIE['legalisasi'];
    	$data = json_decode($cookievalue, true);
    	return view('pages.landingpage.legalisasi.tambah-pengajuan')->with(['data' => $data]);
    }
}

@extends('pages.admin.layout')
@section('title', 'Legalisasi Online')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[2].classList.add('active')
</script>
<div class="mx-md-5 mx-3">
	<legend><strong>Pengajuan Legalisasi Jarak Jauh (Online)</strong></legend>
	<span>Data Alumni yang mengajukan Legalisasi Ijazah dan Transkip Nilai akan ditampilkan disini. File Ijazah dan Transkip Nilai dapat secara langsung di download atau di cetak untuk di legalisasi.</span>
	<br><br>
	<div class="table-responsive">
		<table class="table table-bordered text-center align-middle">
			<thead>
				<tr class="bg-primary-1 text-white">
					<th class="align-middle" >No</th>
					<th class="align-middle" >Nama</th>
					<th class="align-middle" >Jenis Berkas</th>
					<th class="align-middle" >File</th>
					<th class="align-middle" >Jumlah</th>
					<th class="align-middle" >Pengambilan</th>
					<th class="align-middle" >Alamat Tujuan</th>
					<th class="align-middle" >Kode Pos</th>
					<th class="align-middle" >Status</th>
				</tr>
			</thead>
			<tbody>
				<tr class="bg-white">
					<td>1</td>
					<td>Adita Lipta Ditia</td>
					<td>Ijazah</td>
					<td>
						<a href="javascript:;" onclick="openSertifikat(1)">Lihat Disini</a>
					</td>
					<td>3</td>
					<td>Ambil di kampus</td>
					<td>-</td>
					<td>87762</td>
					<td class="text-success"><strong>Selesai</strong></td>
				</tr>
				<tr class="bg-white">
					<td>2</td>
					<td>Ahmad Dzikri</td>
					<td>Transkip Nilai</td>
					<td>
						<a href="javascript:;" onclick="openSertifikat(2)">Lihat Disini</a>
					</td>
					<td>3</td>
					<td>Dikirim</td>
					<td>Perum Griya Asri</td>
					<td>41165</td>
					<td class="text-success"><strong>Selesai</strong></td>
				</tr>
				<tr class="bg-white">
					<td>3</td>
					<td>Alfian Denanda</td>
					<td>Ijazah</td>
					<td>
						<a href="javascript:;" onclick="openSertifikat(3)">Lihat Disini</a>
					</td>
					<td>4</td>
					<td>Ambil di kampus</td>
					<td>-</td>
					<td>49876</td>
					<td class="text-success"><strong>Selesai</strong></td>
				</tr>
				<tr class="bg-white">
					<td>4</td>
					<td>Andian Putri</td>
					<td>Ijazah</td>
					<td>
						<a href="javascript:;" onclick="openSertifikat(4)">Lihat Disini</a>
					</td>
					<td>2</td>
					<td>Ambil di kampus</td>
					<td>-</td>
					<td>41165</td>
					<td class="text-success">
						@if(isset($_COOKIE['prosesselesai']))
							<strong>Selesai</strong>
						@else
							<button onclick="openProcess()" style="background-color: #FF0000" class="btn text-white">Dalam Proses</button>
						@endif
					</td>
				</tr>
				<tr class="bg-white">
					<td>5</td>
					<td>Dika Firmansyah</td>
					<td>Ijazah</td>
					<td>
						<a href="javascript:;" onclick="openSertifikat(5)">Lihat Disini</a>
					</td>
					<td>2</td>
					<td>Ambil di kampus</td>
					<td>-</td>
					<td>51165</td>
					<td class="text-success">
						<button onclick="openProcess()" style="background-color: #FF0000" class="btn text-white">Dalam Proses</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div id="opensertif" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" onclick="closeadd()">
    	<h5><strong>File Ijazah Adita Lipta Ditia</strong></h5>
  		<img src="{{ asset('assets/images/admin/Ijazah.png') }}" class="mb-2" width="100%">
  		<div class="text-end">
  			<button onclick="download()" class="btn mx-1 px-4" style="background-color: #FFCB42">Unduh Ijazah</button>
  			<a target="__blank" href="{{ asset('assets/images/admin/Ijazah.png') }}" download class="btn mx-1 px-4 d-none" id="download" style="background-color: #FFCB42">Unduh Ijazah</a>
  		</div>
  	</div>
</div>
<div id="proseslogalisasi" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Yakin Proses Legalisasi Telah selesai?</strong></h5>
  		<img src="{{ asset('assets/images/admin/error.png') }}" class="mb-2">
  		<div class="text-center">
  			<button class="btn btn-danger mx-1 px-4" onclick="closeadd()">Tidak</button>
  			<a href="{{ route('admin.legalisasi') }}/1" class="btn mx-1 px-4" style="background-color: #85E0A3">Selesai</a>
  		</div>
  	</div>
</div>
<div id="confirmunduh" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Ijazah Berhasil di Unduh</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="prosesberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Proses legalisasi Selasai</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
@if(Session::has('prosesberhasil'))
<?=
	'<script type="text/javascript">
		var prosesberhasil = document.getElementById("prosesberhasil");
		prosesberhasil.style.display = "block";
	  	prosesberhasil.classList.add("bounceIn");
	  	setTimeout(function() {
	      	prosesberhasil.style.display = "none";
	      	prosesberhasil.classList.remove("bounceIn");
	    }, 3000);
	</script>'
?>
@endif
<script type="text/javascript">
</script>
<script type="text/javascript">
	var opensertif = document.getElementById("opensertif")
	var proseslogalisasi = document.getElementById("proseslogalisasi")
	function openSertifikat(id) {
	  	opensertif.style.display = "block";
	  	opensertif.classList.add("bounceIn");
	};
	function openProcess(id) {
	  	proseslogalisasi.style.display = "block";
	  	proseslogalisasi.classList.add("bounceIn");
	};
	function closeadd(){
      	opensertif.style.display = "none";
      	opensertif.classList.remove("bounceIn");
      	proseslogalisasi.style.display = "none";
      	proseslogalisasi.classList.remove("bounceIn");
	}
	function download(){
		var url = `{{ asset('assets/images/admin/Ijazah.png') }}`;
		var link = document.createElement('a');
		link.href = url;
		link.download = 'ijazah.png'
		link.target = '__blank'
		unduhdata()
		link.click()
	}
	var confirmunduh = document.getElementById("confirmunduh");
	function unduhdata() {
	  	confirmunduh.style.display = "block";
	  	confirmunduh.classList.add("bounceIn");
	  	setTimeout(function() {
	      	confirmunduh.style.display = "none";
	      	confirmunduh.classList.remove("bounceIn");
	    }, 3000);
	};
</script>
@endsection
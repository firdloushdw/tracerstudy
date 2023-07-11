@extends('pages.admin.layout')
@section('title', 'Berita')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[6].classList.add('active')
</script>

<div class="mx-md-5 mx-3">
	<legend><strong>Rekap Data Alumni</strong></legend>
	<span>Rekap Data Alumni (Tracer Study)<br>Hasil angket Tracer Study dapat ditampilkan berdasarkan dengan kategori (tahun) yang telah ditentukan.</span>
	<br><br>
	<div class="text-start w-100">
		<a href="javascript:;" onclick="excel()" class="btn bg-light" id="tambahlowongan"><strong><i class="fas fa-download me-2"></i>Excel</strong></a>
		<a href="javascript:;" onclick="pdf()" class="btn bg-light" id="tambahlowongan"><strong><i class="fas fa-download me-2"></i>PDF</strong></a>
	</div>
	<br>
	<style type="text/css">
		#datatable_filter{
			margin-bottom: 15px
		}
		#datatable_filter input{
			background-color: white
		}
		#datatable_length select{
			background-color: white
		}
		#datatable_paginate{
			margin-bottom: 20px;
			margin-top: 15px;
		}
	</style>
	<div>
		<div class="table-responsive">
			<table class="table table-bordered table-hovered text-center" id="datatable">
				<thead>
					<tr class="bg-primary-1 text-white">
						<th class="align-middle">No</th>
						<th class="align-middle">NIM</th>
						<th class="align-middle">Nama</th>
						<th class="align-middle">Universitas</th>
						<th class="align-middle">Jurusan</th>
						<th class="align-middle">Tahun Lulus</th>
						<th class="align-middle">Email</th>
						<th class="align-middle">Telepon</th>
						<th class="align-middle" width="100px"></th>
					</tr>
				</thead>
				<tbody class="bg-white">
					<tr class="bg-white">
						<td class="align-middle" ><small>1</small></td>
						<td class="align-middle" ><small>1902345</small></td>
						<td class="align-middle" ><small>Adita Lipta Ditia</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>adita@gmail.com</small></td>
						<td class="align-middle" ><small>081254838329</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>2</small></td>
						<td class="align-middle" ><small>1903467</small></td>
						<td class="align-middle" ><small>Ahmad Dzikri</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>Dzkr@gmail.com</small></td>
						<td class="align-middle" ><small>081254838330</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>3</small></td>
						<td class="align-middle" ><small>1903456</small></td>
						<td class="align-middle" ><small>Alfian Denanda</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>Denan@gmail.com</small></td>
						<td class="align-middle" ><small>081254838338</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>4</small></td>
						<td class="align-middle" ><small>1904687</small></td>
						<td class="align-middle" ><small>Andian Putri</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>Andian@gmail.com</small></td>
						<td class="align-middle" ><small>081254838337</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>5</small></td>
						<td class="align-middle" ><small>1903456</small></td>
						<td class="align-middle" ><small>Septia Ariani</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>Septi@gmail.com</small></td>
						<td class="align-middle" ><small>081254838336</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>6</small></td>
						<td class="align-middle" ><small>1902345</small></td>
						<td class="align-middle" ><small>Andian Putri</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>Anip@gmail.com</small></td>
						<td class="align-middle" ><small>081254838335</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>7</small></td>
						<td class="align-middle" ><small>1904687</small></td>
						<td class="align-middle" ><small>Dika Firmansyah</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>Diki@gmail.com</small></td>
						<td class="align-middle" ><small>081254838334</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>8</small></td>
						<td class="align-middle" ><small>1904687</small></td>
						<td class="align-middle" ><small>Septia Ariani</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>Septi@gmail.com</small></td>
						<td class="align-middle" ><small>081254838333</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>9</small></td>
						<td class="align-middle" ><small>1903456</small></td>
						<td class="align-middle" ><small>Andian Putri</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2019</small></td>
						<td class="align-middle" ><small>Andip@gmail.com</small></td>
						<td class="align-middle" ><small>081254838332</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
					<tr class="bg-white">
						<td class="align-middle" ><small>10</small></td>
						<td class="align-middle" ><small>1904687</small></td>
						<td class="align-middle" ><small>Firmansyah</small></td>
						<td class="align-middle" ><small>Universitas A</small></td>
						<td class="align-middle" ><small>Komunikasi</small></td>
						<td class="align-middle" ><small>2023</small></td>
						<td class="align-middle" ><small>Diki@gmail.com</small></td>
						<td class="align-middle" ><small>081254838331</small></td>
						<td class="align-middle">
							<a href="javascript:;" class="edit text-dark border border-secondary rounded p-2 mx-1 my-4"><i class="fas fa-edit text-dark"></i></a>
							<a href="javascript:;" class="delete text-dark border border-secondary rounded p-2 mx-1"><i class="fas fa-trash text-dark my-4"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div id="confirmexcel" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>File akan tersimpan dalam bentuk Excel. Lanjutkan unduh data?</strong></h5>
  		<div class="text-center">
  			<button class="btn btn-danger mx-1 px-4" onclick="closeadd()">Tidak</button>
  			<a href="{{ route('admin.alumni.excel') }}" target="__blank" class="btn mx-1 px-4" style="background-color: #85E0A3">Lanjutkan</a>
  		</div>
  	</div>
</div>
<div id="confirmpdf" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>File akan tersimpan dalam bentuk PDF. Lanjutkan unduh data?</strong></h5>
  		<div class="text-center">
  			<button class="btn btn-danger mx-1 px-4" onclick="closeadd()">Tidak</button>
  			<a onclick="prosess()" href="{{ route('admin.alumni.pdf') }}" target="__blank" class="btn mx-1 px-4" style="background-color: #85E0A3">Lanjutkan</a>
  		</div>
  	</div>
</div>


<div id="prosesberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Data Telah Berhasil Tersimpan</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<script type="text/javascript">
	$('#datatable').dataTable();
</script>

<script type="text/javascript">
</script>
<script type="text/javascript">
	var confirmexcel = document.getElementById("confirmexcel")
	function excel() {
	  	confirmexcel.style.display = "block";
	  	confirmexcel.classList.add("bounceIn");
	};
	var confirmpdf = document.getElementById("confirmpdf");
	function pdf() {
	  	confirmpdf.style.display = "block";
	  	confirmpdf.classList.add("bounceIn");
	};
	var prosesberhasil = document.getElementById("prosesberhasil");
	function prosess() {
		closeadd()
	  	prosesberhasil.style.display = "block";
	  	prosesberhasil.classList.add("bounceIn");
	  	setTimeout(function() {
	      	prosesberhasil.style.display = "none";
	      	prosesberhasil.classList.remove("bounceIn");
	    }, 5000);
	};
	function closeadd(){
      	confirmexcel.style.display = "none";
      	confirmexcel.classList.remove("bounceIn");
      	confirmpdf.style.display = "none";
      	confirmpdf.classList.remove("bounceIn");
	}
</script>
@endsection
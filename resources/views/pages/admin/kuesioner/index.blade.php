@extends('pages.admin.layout')
@section('title', 'Kuesioner Tracer Study')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[5].classList.add('active')
</script>
<div class="mx-md-5 mx-3">
	<legend><strong>Kelola Kuesioner Tracer Study</strong></legend>
	<span>Kuesioner yang telah dibuat akan tertampil pada halaman Tracer Study Alumni. <br>Dan akan ditampilkan apabila kuesioner diaktifkan.</span>
	<br>
	<div class="text-end w-100">
		<button class="btn bg-light" id="tambahkuesioner"><strong><i class="far fa-plus-square me-2"></i>Tambah Kuesioner</strong></button>
	</div>
	<br>
	<div class="table-responsive">
		<table class="table table-bordered text-center">
			<thead>
				<tr class="bg-primary-1 text-white">
					<th class="align-middle">No</th>
					<th class="align-middle">Jenis Pertanyaan</th>
					<th class="align-middle">Status Kuesioner</th>
					<th class="align-middle">Ubah Status Kuesioner</th>
					<th class="align-middle" colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				<tr class="bg-white">
					<td class="align-middle">1</td>
					<td class="align-middle">
						<a href="{{ route('admin.kuesioner') }}/show/Identitas">Identitas</a>
					</td>
					<td class="align-middle">
						@if(isset($_COOKIE['statuskuesioner']))
							Aktif
						@else
							<span class="text-danger">Nonaktif</span>
						@endif
					</td>
					<td class="align-middle">
						@if(isset($_COOKIE['statuskuesioner']))
							<span class="text-danger">Nonaktif</span>
						@else
							<button class="btn btn-secondary" onclick="aktifkanKuesioner(1)">Nonaktif</button>
						@endif
					</td>
					<td class="align-middle">
						<a href="javascript:;" onclick="updatelowongan(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(1)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
				<tr class="bg-white">
					<td class="align-middle">2</td>
					<td class="align-middle">
						<a href="{{ route('admin.kuesioner') }}/show/Pekerjaan">Pekerjaan</a>
					</td>
					<td class="align-middle">
						Aktif
					</td>
					<td class="align-middle">
						<span class="text-danger">Nonaktif</span>
					</td>
					<td class="align-middle">
						<a href="javascript:;" onclick="updatelowongan(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(1)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
				<tr class="bg-white">
					<td class="align-middle">3</td>
					<td class="align-middle">
						<a href="{{ route('admin.kuesioner') }}/show/Pendidikan">Pendidikan</a>
					</td>
					<td class="align-middle">
						Aktif
					</td>
					<td class="align-middle">
						<span class="text-danger">Nonaktif</span>
					</td>
					<td class="align-middle">
						<a href="javascript:;" onclick="updatelowongan(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(1)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
				<tr class="bg-white">
					<td class="align-middle">4</td>
					<td class="align-middle">
						<a href="{{ route('admin.kuesioner') }}/show/Wirausaha">Wirausaha</a>
					</td>
					<td class="align-middle">
						Aktif
					</td>
					<td class="align-middle">
						<span class="text-danger">Nonaktif</span>
					</td>
					<td class="align-middle">
						<a href="javascript:;" onclick="updatelowongan(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(1)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
				<tr class="bg-white">
					<td class="align-middle">5</td>
					<td class="align-middle">
						<a href="{{ route('admin.kuesioner') }}/show/Masukan">Masukan</a>
					</td>
					<td class="align-middle">
						Aktif
					</td>
					<td class="align-middle">
						<span class="text-danger">Nonaktif</span>
					</td>
					<td class="align-middle">
						<a href="javascript:;" onclick="updatelowongan(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(1)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div id="notifadd" class="mymodal" style="display: none;">
  	<div class="mymodal-content bounceIn">
  		<div class="d-flex align-items-center">
  			<div class="col-9 text-start">
  				<h5><strong>Kuesioner Baru</strong></h5>
  			</div>
  			<div class="col-3 text-end">
  				<a href="javascript:;" onclick="closeadd()">
  					<i class="fas fa-close text-dark"></i>
  				</a>
  			</div>
  		</div>
  		<hr class="mt-2">
  		<form method="post">
  			@csrf
  			<div class="form-group mt-2">
				<label>Kategori</label>
				<input required type="text" name="nama" class="form-control" placeholder="Identitas Alumni">
			</div>
			<div class="form-group mt-3 text-end">
				<button name="add" class="bg-warning-1 border border-warning border-1 py-2 px-3 rounded"><strong>Buat Kuesioner</strong></button>
			</div>
  		</form>
  	</div>
</div>
<div id="confirmaktif" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Kembali Aktifkan Kuesioner?</strong></h5>
  		<div class="text-center">
  			<button class="btn btn-danger mx-1 px-4" onclick="closeadd()">Tidak</button>
  			<a href="{{ route('admin.kuesioner') }}/1" class="btn mx-1 px-4" style="background-color: #85E0A3">Aktifkan</a>
  		</div>
  	</div>
</div>
<div id="aktifkuesionerberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Kuesioner Berhasil Diaktifkan</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="kuesionerupdate" class="mymodal" style="display: none;">
  	<div class="mymodal-content bounceIn">
  		<div class="d-flex align-items-center">
  			<div class="col-9 text-start">
  				<h5><strong>Edit Kuesioner</strong></h5>
  			</div>
  			<div class="col-3 text-end">
  				<a href="javascript:;" onclick="closeadd()">
  					<i class="fas fa-close text-dark"></i>
  				</a>
  			</div>
  		</div>
  		<hr class="mt-2">
  		<form method="post">
  			@csrf
  			<div class="form-group mt-2">
				<label>Kategori</label>
				<input required type="text" name="nama" class="form-control" placeholder="Identitas Alumni">
			</div>
			<div class="form-group mt-3 text-end">
				<button name="update" class="bg-warning-1 border border-warning border-1 py-2 px-3 rounded"><strong>Ubah</strong></button>
			</div>
  		</form>
  	</div>
</div>
<div id="updateberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Perubahan Berhasil di Tambahkan</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="confirmdelete" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Yakin Menghapus Data Ini?</strong></h5>
  		<img src="{{ asset('assets/images/admin/error.png') }}" class="mb-2">
  		<div class="text-center">
  			<button class="btn btn-danger mx-1 px-4" onclick="closeadd()">Tidak</button>
  			<a href="{{ route('admin.kuesioner') }}/delete/1" class="btn mx-1 px-4" style="background-color: #85E0A3">Hapus</a>
  		</div>
  	</div>
</div>
<div id="deleteberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Data Telah Berhasil di Hapus</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
@if(Session::has('aktifkuesionerberhasil'))
<?=
	'<script type="text/javascript">
		var aktifkuesionerberhasil = document.getElementById("aktifkuesionerberhasil");
		aktifkuesionerberhasil.style.display = "block";
	  	aktifkuesionerberhasil.classList.add("bounceIn");
	  	setTimeout(function() {
	      	aktifkuesionerberhasil.style.display = "none";
	      	aktifkuesionerberhasil.classList.remove("bounceIn");
	    }, 3000);
	</script>'
?>
@endif
@if(Session::has('updateberhasil'))
<?=
	'<script type="text/javascript">
		var updateberhasil = document.getElementById("updateberhasil");
		updateberhasil.style.display = "block";
	  	updateberhasil.classList.add("bounceIn");
	  	setTimeout(function() {
	      	updateberhasil.style.display = "none";
	      	updateberhasil.classList.remove("bounceIn");
	    }, 3000);
	</script>'
?>
@endif
@if(Session::has('deleteberhasil'))
<?=
	'<script type="text/javascript">
		var deleteberhasil = document.getElementById("deleteberhasil");
		deleteberhasil.style.display = "block";
	  	deleteberhasil.classList.add("bounceIn");
	  	setTimeout(function() {
	      	deleteberhasil.style.display = "none";
	      	deleteberhasil.classList.remove("bounceIn");
	    }, 3000);
	</script>'
?>
@endif
<script type="text/javascript">
	var addlowongan = document.getElementById("tambahkuesioner");
	var notifadd = document.getElementById("notifadd");
	addlowongan.addEventListener("click", function() {
	  	notifadd.style.display = "block";
	  	notifadd.classList.add("bounceIn");
	});

	var confirmaktif = document.getElementById('confirmaktif')
	function aktifkanKuesioner(id){
		confirmaktif.style.display = "block";
	  	confirmaktif.classList.add("bounceIn");
	}

	var kuesionerupdate = document.getElementById('kuesionerupdate')
	function updatelowongan(id){
		kuesionerupdate.style.display = "block";
	  	kuesionerupdate.classList.add("bounceIn");
	}

	var confirmdelete = document.getElementById('confirmdelete')
	function deletelowongan(id){
		confirmdelete.style.display = "block";
	  	confirmdelete.classList.add("bounceIn");
	}
</script>
<script type="text/javascript">
	function closeadd(){
      	notifadd.style.display = "none";
      	notifadd.classList.remove("bounceIn");
      	confirmaktif.style.display = "none";
      	confirmaktif.classList.remove("bounceIn");
      	kuesionerupdate.style.display = "none";
      	kuesionerupdate.classList.remove("bounceIn");
      	confirmdelete.style.display = "none";
      	confirmdelete.classList.remove("bounceIn");
	}
</script>
@endsection
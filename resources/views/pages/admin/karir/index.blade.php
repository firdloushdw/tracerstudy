@extends('pages.admin.layout')
@section('title', 'Informasi Karir')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[1].classList.add('active')
</script>
<div class="mx-md-5 mx-3">
	<legend><strong>Informasi Karir</strong></legend>
	<span>Seluruh informasi lowongan pekerjaan akan tersimpan dan ditambahkan pada halaman ini, kemudian akan ditampilkan pada halaman informasi karir.</span>
	<div class="text-end w-100">
		<button class="btn bg-light" id="tambahlowongan"><strong><i class="far fa-plus-square me-2"></i>Tambah Lowongan</strong></button>
	</div>
	<br>
	<div class="table-responsive">
		<table class="table table-bordered text-center">
			<thead>
				<tr class="bg-primary-1 text-white">
					<th>No</th>
					<th>Pekerjaan</th>
					<th>Jabatan</th>
					<th>Instansi</th>
					<th>Gambar</th>
					<th>Link</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
				<tr class="bg-white">
					<td>1</td>
					<td>Full-time</td>
					<td>Social Media Specialist</td>
					<td>PT. Muda Berkarya. </td>
					<td>
						<img src="{{ asset('assets/images/admin/karir-1.png') }}">
					</td>
					<td><a href="https://Mudaberkarya.com">https://Mudaberkarya.com</a></td>
					<td>
						<a href="javascript:;" onclick="updatelowongan(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(1)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
				<tr class="bg-white">
					<td>2</td>
					<td>Full-time</td>
					<td>Fullstack Developer</td>
					<td>Tokopedia</td>
					<td>
						<img src="{{ asset('assets/images/admin/karir-2.png') }}">
					</td>
					<td><a href="https://Mudaberkarya.com">https://lifeatokopedia</a></td>
					<td>
						<a href="javascript:;" onclick="updatelowongan(2)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(2)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
				<tr class="bg-white">
					<td>3</td>
					<td>Full-time</td>
					<td>UI/UX Designer</td>
					<td>Tiket.com</td>
					<td>
						<img src="{{ asset('assets/images/admin/karir-3.png') }}">
					</td>
					<td><a href="https://Mudaberkarya.com">https://lifeatiket</a></td>
					<td>
						<a href="javascript:;" onclick="updatelowongan(3)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(3)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
				<tr class="bg-white">
					<td>4</td>
					<td>Freelance</td>
					<td>Finance</td>
					<td>Sinarmas</td>
					<td>
						<img src="{{ asset('assets/images/admin/karir-4.png') }}">
					</td>
					<td><a href="https://Mudaberkarya.com">https://Senartech.com</a></td>
					<td>
						<a href="javascript:;" onclick="updatelowongan(4)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(4)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
					</td>
				</tr>
				<tr class="bg-white">
					<td>5</td>
					<td>Internship</td>
					<td>Finance</td>
					<td>PT. Develop.Id</td>
					<td>
						<img src="{{ asset('assets/images/admin/karir-5.png') }}">
					</td>
					<td><a href="https://Mudaberkarya.com">https://LifeWithDevelop.com</a></td>
					<td>
						<a href="javascript:;" onclick="updatelowongan(5)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
						<a href="javascript:;" onclick="deletelowongan(5)" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
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
  				<h5><strong>Tambah Informasi Karir</strong></h5>
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
				<label>Divisi</label>
				<input required type="text" name="divisi" class="form-control" placeholder="UI/UX Designer">
			</div>
			<div class="form-group mt-2">
				<label>Nama Instansi</label>
				<input required type="text" name="instansi" class="form-control" placeholder="Tokopedia">
			</div>
			<div class="form-group mt-2">
				<label>Gambar</label><br>
				<label>
					<div class="borderradius-10 p-2 d-flex align-items-center border border-secondary">
						<img src="{{ asset('assets/images/admin/add_photo_alternate.png') }}" class="me-3"> Tambah File
					</div>
					<img src="" id="image-show" width="100px" class="mt-3">
					<input required type="file" name="gambar" class="form-control d-none" placeholder="Tokopedia" id="image-add" accept="image/*">
				</label>
			</div>
			<div class="form-group mt-2">
				<label>Link</label>
				<input required type="text" name="link" class="form-control" placeholder="https://lifeattokopedia.com">
			</div>
			<div class="form-group mt-3 text-end">
				<button name="add" class="bg-warning-1 border border-warning border-1 py-2 px-3 rounded"><strong>Simpan</strong></button>
			</div>
  		</form>
  	</div>
</div>
<div id="notifupdate" class="mymodal" style="display: none;">
  	<div class="mymodal-content bounceIn">
  		<div class="d-flex align-items-center">
  			<div class="col-9 text-start">
  				<h5><strong>Edit Informasi Karir</strong></h5>
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
				<label>Divisi</label>
				<input required type="text" name="divisi" class="form-control" placeholder="UI/UX Designer">
			</div>
			<div class="form-group mt-2">
				<label>Nama Instansi</label>
				<input required type="text" name="instansi" class="form-control" placeholder="Tokopedia">
			</div>
			<div class="form-group mt-2">
				<label>Gambar</label><br>
				<label>
					<div class="borderradius-10 p-2 d-flex align-items-center border border-secondary">
						<img src="{{ asset('assets/images/admin/cloud_upload.png') }}" class="me-3"> Ubah File
					</div>
					<img src="" id="image-show-up" width="100px" class="mt-3">
					<input required type="file" name="gambar" class="form-control d-none" placeholder="Tokopedia" id="image-up" accept="image/*">
				</label>
			</div>
			<div class="form-group mt-2">
				<label>Link</label>
				<input required type="text" name="link" class="form-control" placeholder="https://lifeattokopedia.com">
			</div>
			<div class="form-group mt-3 text-end">
				<button name="update" class="bg-warning-1 border border-warning border-1 py-2 px-3 rounded"><strong>Simpan</strong></button>
			</div>
  		</form>
  	</div>
</div>
<div id="confirmdelete" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Yakin Menghapus Data Ini?</strong></h5>
  		<img src="{{ asset('assets/images/admin/error.png') }}" class="mb-2">
  		<div class="text-center">
  			<button class="btn btn-danger mx-1 px-4" onclick="closeadd()">Tidak</button>
  			<a href="{{ route('admin.karir') }}/delete/1" class="btn mx-1 px-4" style="background-color: #85E0A3">Hapus</a>
  		</div>
  	</div>
</div>
<div id="berhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Informasi Karir Berhasil Ditambahkan</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="updateberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Perubahan Berhasil di Tambahkan</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="deleteberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Data Telah Berhasil di Hapus</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
@if(Session::has('berhasil'))
<?=
	'<script type="text/javascript">
		var berhasil = document.getElementById("berhasil");
		berhasil.style.display = "block";
	  	berhasil.classList.add("bounceIn");
	  	setTimeout(function() {
	      	berhasil.style.display = "none";
	      	berhasil.classList.remove("bounceIn");
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
	var addlowongan = document.getElementById("tambahlowongan");
	var notifadd = document.getElementById("notifadd");
	addlowongan.addEventListener("click", function() {
	  	notifadd.style.display = "block";
	  	notifadd.classList.add("bounceIn");
	});
</script>
<script type="text/javascript">
	var notifupdate = document.getElementById("notifupdate");
	function updatelowongan(id) {
	  	notifupdate.style.display = "block";
	  	notifupdate.classList.add("bounceIn");
	};
</script>
<script type="text/javascript">
	var confirmdelete = document.getElementById("confirmdelete");
	function deletelowongan(id) {
	  	confirmdelete.style.display = "block";
	  	confirmdelete.classList.add("bounceIn");
	};
</script>
<script type="text/javascript">
	function closeadd(){
      	notifadd.style.display = "none";
      	notifadd.classList.remove("bounceIn");
      	notifupdate.style.display = "none";
      	notifupdate.classList.remove("bounceIn");
      	confirmdelete.style.display = "none";
      	confirmdelete.classList.remove("bounceIn");
	}
	
	let icon = document.getElementById('image-add');
	let imagefet = document.getElementById('image-show');
    icon.addEventListener('change', function () {
		gambar(this);
	})
	function gambar(a) {
		if (a.files && a.files[0]) {     
			var reader = new FileReader();    
			reader.onload = function (e) {
                imagefet.src=e.target.result;
            }    
            reader.readAsDataURL(a.files[0]);
        }
    }
</script>
<script type="text/javascript">
    let icon2 = document.getElementById('image-up');
	let imagefet2 = document.getElementById('image-show-up');
    icon2.addEventListener('change', function () {
		gambar(this);
	})
	function gambar(a) {
		if (a.files && a.files[0]) {     
			var reader = new FileReader();    
			reader.onload = function (e) {
                imagefet2.src=e.target.result;
            }    
            reader.readAsDataURL(a.files[0]);
        }
    }
</script>
@endsection
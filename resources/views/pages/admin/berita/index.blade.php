@extends('pages.admin.layout')
@section('title', 'Berita')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[3].classList.add('active')
</script>
<div class="mx-md-5 mx-3">
	<legend><strong>Berita</strong></legend>
	<span>Seluruh informasi berita yang ditambahkan akan ditampilkan pada halaman utama (beranda) dan halaman detail berita.</span>
	<br><br>
	<h5><strong>Daftar Berita</strong></h5>
	<div class="bg-primary-1 pt-1" style="width: 100px"></div>
	<div class="text-end w-100">
		<button onclick="addData()" class="btn bg-light" id="tambahlowongan"><strong><i class="far fa-plus-square me-2"></i>Tambah Berita</strong></button>
	</div>
	<br>
	<div>
		<div class="bg-white borderradius-10 border border-1 border-secondary p-4" style="text-align: justify;">
			<a href="{{ route('admin.berita') }}/show/1" class="text-decoration-none text-dark">
				<small>Januari, 28 2022</small>
				<h5 class="mt-2 mb-1"><strong>Persiapan Berkarir di dunia Developer</strong></h5>
				<span>Persiapan Berkarir di dunia Developer #PBDD diselenggarakan pada Rabu, (17/5) dengan tajuk The World of Programmer. Kegiatan PBDD kali ini bersama seorang Human Capital & Career Consultant, Hasna Askiyaah, M.Psi., Psikolog. yang merupakan alumnus dari Fakultas Psikologi Universitas A. Rangkaian acara ini dilaksanakan secara bauran di Ruang Multimedia 1, Gedung Pusat Universitas A dan melalui Zoom Meeting dengan total 112 peserta.</span>
				<br>
			</a>
			<br>
			<div class="text-end">
				<button type="button" class="btn text-dark" onclick="updateData(1)" style="background-color: #FBCB4C"><strong>Edit</strong></button>
				<a href="javasript:;" onclick="deleteData()" class="btn text-dark" style="background-color: #F32323"><strong>Hapus</strong></a>
			</div>
		</div>
		<br>
		<div class="bg-white borderradius-10 border border-1 border-secondary p-4" style="text-align: justify;">
			<a href="{{ route('admin.berita') }}/show/2" class="text-decoration-none text-dark">
				<small>Januari, 28 2022</small>
				<h5 class="mt-2 mb-1"><strong>Persiapan Berkarir di dunia Developer</strong></h5>
				<span>Persiapan Berkarir di dunia Developer #PBDD diselenggarakan pada Rabu, (17/5) dengan tajuk The World of Programmer. Kegiatan PBDD kali ini bersama seorang Human Capital & Career Consultant, Hasna Askiyaah, M.Psi., Psikolog. yang merupakan alumnus dari Fakultas Psikologi Universitas A. Rangkaian acara ini dilaksanakan secara bauran di Ruang Multimedia 1, Gedung Pusat Universitas A dan melalui Zoom Meeting dengan total 112 peserta.</span>
				<br>
			</a>
			<br>
			<div class="text-end">
				<button type="button" class="btn text-dark" onclick="updateData(2)" style="background-color: #FBCB4C"><strong>Edit</strong></button>
				<a href="javasript:;" onclick="deleteData()" class="btn text-dark" style="background-color: #F32323"><strong>Hapus</strong></a>
			</div>
		</div>
		<br>
		<div class="bg-white borderradius-10 border border-1 border-secondary p-4" style="text-align: justify;">
			<a href="{{ route('admin.berita') }}/show/3" class="text-decoration-none text-dark">
				<small>Januari, 28 2022</small>
				<h5 class="mt-2 mb-1"><strong>Persiapan Berkarir di dunia Developer</strong></h5>
				<span>Persiapan Berkarir di dunia Developer #PBDD diselenggarakan pada Rabu, (17/5) dengan tajuk The World of Programmer. Kegiatan PBDD kali ini bersama seorang Human Capital & Career Consultant, Hasna Askiyaah, M.Psi., Psikolog. yang merupakan alumnus dari Fakultas Psikologi Universitas A. Rangkaian acara ini dilaksanakan secara bauran di Ruang Multimedia 1, Gedung Pusat Universitas A dan melalui Zoom Meeting dengan total 112 peserta.</span>
				<br>
			</a>
			<br>
			<div class="text-end">
				<button type="button" class="btn text-dark" onclick="updateData(3)" style="background-color: #FBCB4C"><strong>Edit</strong></button>
				<a href="javasript:;" onclick="deleteData()" class="btn text-dark" style="background-color: #F32323"><strong>Hapus</strong></a>
			</div>
		</div>
		<br>
	</div>
</div>

<div id="notifadd" class="mymodal" style="display: none;">
  	<div class="mymodal-content bounceIn">
  		<div class="d-flex align-items-center">
  			<div class="col-9 text-start">
  				<h5><strong>Berita Baru</strong></h5>
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
				<label>Judul</label>
				<input required type="text" name="divisi" class="form-control" placeholder="Tulis Judul Disini">
			</div>
			<div class="form-group mt-2">
				<label>Isi Berita</label>
				<textarea rows="5" class="form-control" required="" name="isiberita" placeholder="Masukkan berita disini"></textarea>
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
  				<h5><strong>Edit Berita</strong></h5>
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
				<label>Judul</label>
				<input required type="text" name="divisi" class="form-control" placeholder="Tulis Judul Disini" value="Persiapan Berkarir di Dunia Developer">
			</div>
			<div class="form-group mt-2">
				<label>Isi Berita</label>
				<textarea rows="5" class="form-control" required="" name="isiberita" placeholder="Masukkan berita disini">Persiapan Berkarir di dunia Developer #PBDD diselenggarakan pada Rabu, (17/5) dengan tajuk The World of Programmer. Kegiatan PBDD kali ini bersama seorang Human Capital & Career Consultant, Hasna Askiyaah, M.Psi., Psikolog. yang merupakan alumnus dari Fakultas Psikologi Universitas A. Rangkaian acara ini dilaksanakan secara bauran di Ruang Multimedia 1, Gedung Pusat Universitas A dan melalui Zoom Meeting dengan total 112 peserta.</textarea>
			</div>
			<div class="form-group mt-2">
				<label>Gambar</label><br>
				<label>
					<div class="borderradius-10 p-2 d-flex align-items-center border border-secondary">
						<img src="{{ asset('assets/images/admin/add_photo_alternate.png') }}" class="me-3"> Ubah File
					</div>
					<img src="" id="image-show-2" width="100px" class="mt-3">
					<input required type="file" name="gambar" class="form-control d-none" placeholder="Tokopedia" id="image-add-2" accept="image/*">
				</label>
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
  			<a href="{{ route('admin.berita') }}/delete/1" class="btn mx-1 px-4" style="background-color: #85E0A3">Hapus</a>
  		</div>
  	</div>
</div>
<div id="prosesberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Berita berhasil ditambahkan</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="updateberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Berita berhasil diupdate</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="deleteberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Berita Telah Berhasil di Hapus</strong></h5>
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
</script>
<script type="text/javascript">
	var notifadd = document.getElementById("notifadd")
	var notifupdate = document.getElementById("notifupdate")
	function addData() {
	  	notifadd.style.display = "block";
	  	notifadd.classList.add("bounceIn");
	};
	function updateData(id) {
	  	notifupdate.style.display = "block";
	  	notifupdate.classList.add("bounceIn");
	};
	var confirmdelete = document.getElementById("confirmdelete");
	function deleteData(id) {
	  	confirmdelete.style.display = "block";
	  	confirmdelete.classList.add("bounceIn");
	};
	function closeadd(){
      	notifadd.style.display = "none";
      	notifadd.classList.remove("bounceIn");
      	notifupdate.style.display = "none";
      	notifupdate.classList.remove("bounceIn");
      	confirmdelete.style.display = "none";
      	confirmdelete.classList.remove("bounceIn");
	}
</script>
<script type="text/javascript">
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
	let icon2 = document.getElementById('image-add-2');
	let imagefet2 = document.getElementById('image-show-2');
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
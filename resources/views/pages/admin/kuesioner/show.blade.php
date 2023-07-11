@extends('pages.admin.layout')
@section('title', 'Kuesioner Tracer Study')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[5].classList.add('active')
</script>
<div class="mx-md-5 mx-3">
	<a href="{{ route('admin.kuesioner') }}" class="text-decoration-none text-dark"> Kelola Kuesioner</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>{{ $text }}</strong></span>
	<br><br>
	<legend><strong>Kelola Kuesioner Tracer Study</strong></legend>
	<span>Kuesioner yang telah dibuat akan tertampil pada halaman Tracer Study Alumni. <br>Dan akan ditampilkan apabila kuesioner diaktifkan.</span>
	<br><br>
	<div>
		<div class="bg-white borderradius-10 border border-1 border-secondary p-4" style="text-align: justify;">
			<div class="d-md-flex align-items-center">
				<div class="col-md-9">
					<h5 class="my-0"><strong>{{ $text }}</strong></h5>
				</div>
				<div class="col-md-3 text-end">
					<div class="position-relative">
						<style type="text/css">
							select option:checked{ background-color: #EAF2F4; color: #000; }
						</style>
						<select id="pertanyaan" class="form-control mt-md-0 mt-3" onchange="pertanyaan()">
							<option disabled="" selected="">Tambah Pertanyaan</option>
							<option value="1">Isian</option>
							<option value="2">Pilihan Ganda</option>
						</select>
						<i class="fas fa-caret-down position-absolute" style="top: 50%; transform: translateY(-50%); right: 20px"></i>
					</div>
				</div>
			</div>
			<hr>
			<div>
				<div class="mb-2">
					<label>Nama</label>
					<div class="row">
						<div class="col-md-10">
							<input type="" name="" class="form-control bg-white" value="Adita lipta ditia" readonly="" placeholder="Jawaban Disini">
						</div>
						<br class="d-md-none"><br class="d-md-none">
						<div class="col-md-2 mt-md-0 mt-2">
							<a href="javascript:;" onclick="updatekuesioner(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
							<a href="{{ route('admin.kuesioner') }}/delete/pertanyaan/1" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
						</div>
					</div>
				</div>
				<div class="mb-2">
					<label>Nomor Induk Mahasiswa (NIM)</label>
					<div class="row">
						<div class="col-md-10">
							<input type="" name="" class="form-control bg-white" value="1902567" readonly="" placeholder="Jawaban Disini">
						</div>
						<br class="d-md-none"><br class="d-md-none">
						<div class="col-md-2 mt-md-0 mt-2">
							<a href="javascript:;" onclick="updatekuesioner(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
							<a href="{{ route('admin.kuesioner') }}/delete/pertanyaan/1" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
						</div>
					</div>
				</div>
				<div class="mb-2">
					<label>Prodi</label>
					<div class="row">
						<div class="col-md-10">
							<input type="" name="" class="form-control bg-white" value="Sistem Teknologi Informasi" readonly="" placeholder="Jawaban Disini">
						</div>
						<br class="d-md-none"><br class="d-md-none">
						<div class="col-md-2 mt-md-0 mt-2">
							<a href="javascript:;" onclick="updatekuesioner(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
							<a href="{{ route('admin.kuesioner') }}/delete/pertanyaan/1" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
						</div>
					</div>
				</div>
				<div class="mb-2">
					<label>Tahun Lulus</label>
					<div class="row">
						<div class="col-md-10">
							<input type="" name="" class="form-control bg-white" value="2023" readonly="" placeholder="Jawaban Disini">
						</div>
						<br class="d-md-none"><br class="d-md-none">
						<div class="col-md-2 mt-md-0 mt-2">
							<a href="javascript:;" onclick="updatekuesioner(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
							<a href="{{ route('admin.kuesioner') }}/delete/pertanyaan/1" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
						</div>
					</div>
				</div>
				<div class="mb-2">
					<label>Nomor Telepon/HP</label>
					<div class="row">
						<div class="col-md-10">
							<input type="" name="" class="form-control bg-white" value="081234676730" readonly="" placeholder="Jawaban Disini">
						</div>
						<br class="d-md-none"><br class="d-md-none">
						<div class="col-md-2 mt-md-0 mt-2">
							<a href="javascript:;" onclick="updatekuesioner(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
							<a href="{{ route('admin.kuesioner') }}/delete/pertanyaan/1" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
						</div>
					</div>
				</div>
				<div class="mb-2">
					<label>Alamat Email (Aktif)</label>
					<div class="row">
						<div class="col-md-10">
							<input type="" name="" class="form-control bg-white" value="ditadiptia@gmail.com" readonly="" placeholder="Jawaban Disini">
						</div>
						<br class="d-md-none"><br class="d-md-none">
						<div class="col-md-2 mt-md-0 mt-2">
							<a href="javascript:;" onclick="updatekuesioner(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
							<a href="{{ route('admin.kuesioner') }}/delete/pertanyaan/1" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
						</div>
					</div>
				</div>
				<div class="mb-2">
					<label>NIK</label>
					<div class="row">
						<div class="col-md-10">
							<input type="" name="" class="form-control bg-white" value="321456765678921" readonly="" placeholder="Jawaban Disini">
						</div>
						<br class="d-md-none"><br class="d-md-none">
						<div class="col-md-2 mt-md-0 mt-2">
							<a href="javascript:;" onclick="updatekuesioner(1)" class="edit text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-edit text-dark"></i></a>
							<a href="{{ route('admin.kuesioner') }}/delete/pertanyaan/1" class="delete text-dark border border-secondary borderradius-10 p-2 mx-2"><i class="fas fa-trash text-dark"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-2 text-end">
			<a href="{{ route('admin.kuesioner') }}" class="btn" style="background-color: #FFCB42"><strong>Simpan</strong></a>
		</div>
	</div>
	<br>
</div>

<div id="berhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Nama Kuesioner Berhasil Ditambahkan</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="berhasiltambahdata" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Pertanyaan Kuesioner Berhasil Ditambahkan</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="deleteberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Pertanyaan Kuesioner Berhasil Dihapus</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
<div id="isian" class="mymodal">
  	<div class="mymodal-content bounceIn">
  		<div class="d-flex align-items-center">
  			<div class="col-9 text-start">
  				<h5><strong>Pertanyaan Baru</strong></h5>
  			</div>
  			<div class="col-3 text-end">
  				<a href="javascript:;" onclick="closeadd()">
  					<i class="fas fa-close text-dark"></i>
  				</a>
  			</div>
  		</div>
  		<hr>
    	<h5><strong>Silahkan Tulis Pertanyaan Anda disini</strong></h5>
    	<form method="post">
    		@csrf
	    	<label class="text-secondary my-2">Pertanyaan</label>
	  		<input type="text" name="pertanyaan" class="form-control" placeholder="Pertanyaan Anda" required="">
	    	<label class="text-secondary my-2">Jawaban</label>
	  		<input type="text" name="jawaban" class="form-control" placeholder="Jawaban Anda" required="">
	  		<br>
	  		<div class="text-end">
	  			<button name="isian" class="btn" style="background-color: #FFCB42">Buat Pertanyaan</button>
	  		</div>
	  	</form>
  	</div>
</div>
<div id="pilgan" class="mymodal">
  	<div class="mymodal-content bounceIn">
  		<div class="d-flex align-items-center">
  			<div class="col-9 text-start">
  				<h5><strong>Pertanyaan Baru</strong></h5>
  			</div>
  			<div class="col-3 text-end">
  				<a href="javascript:;" onclick="closeadd()">
  					<i class="fas fa-close text-dark"></i>
  				</a>
  			</div>
  		</div>
  		<hr>
    	<h5><strong>Silahkan Tulis Pertanyaan Anda disini</strong></h5>
    	<form method="post">
    		@csrf
	    	<label class="text-secondary my-2">Pertanyaan</label>
	  		<input type="text" name="pertanyaan" class="form-control" placeholder="Pertanyaan Anda" required="">
	    	<label class="text-secondary my-2">Masukkan pilihan jawaban</label>
	    	<div class="d-flex align-items-center mb-2">
	    		<div class="col-1">A.</div>
	    		<div class="col-11">
	  				<input type="text" name="jawaban_a" class="form-control" placeholder="Jawaban A" required="">
	    		</div>
	    	</div>
	    	<div class="d-flex align-items-center mb-2">
	    		<div class="col-1">B.</div>
	    		<div class="col-11">
	  				<input type="text" name="jawaban_b" class="form-control" placeholder="Jawaban B" required="">
	    		</div>
	    	</div>
	    	<div class="d-flex align-items-center mb-2">
	    		<div class="col-1">C.</div>
	    		<div class="col-11">
	  				<input type="text" name="jawaban_c" class="form-control" placeholder="Jawaban C" required="">
	    		</div>
	    	</div>
	    	<div class="d-flex align-items-center mb-2">
	    		<div class="col-1">D.</div>
	    		<div class="col-11">
	  				<input type="text" name="jawaban_d" class="form-control" placeholder="Jawaban D" required="">
	    		</div>
	    	</div>
	  		<br>
	  		<div class="text-end">
	  			<button name="pilgan" class="btn" style="background-color: #FFCB42">Buat Pertanyaan</button>
	  		</div>
	  	</form>
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
@if(Session::has('berhasiltambahdata'))
<?=
	'<script type="text/javascript">
		var berhasiltambahdata = document.getElementById("berhasiltambahdata");
		berhasiltambahdata.style.display = "block";
	  	berhasiltambahdata.classList.add("bounceIn");
	  	setTimeout(function() {
	      	berhasiltambahdata.style.display = "none";
	      	berhasiltambahdata.classList.remove("bounceIn");
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
	function updatekuesioner(text){
		if(text == 1){
			isianset()
		} else if(text == 2){
			pilganset()
		}
	}
</script>

<script type="text/javascript">
	function pertanyaan(){
		if($('#pertanyaan').val() == 1){
			isianset()
		} else if($('#pertanyaan').val() == 2){
			pilganset()
		}
	}

	var isian = document.getElementById("isian");
	function isianset() {
	  	isian.style.display = "block";
	  	isian.classList.add("bounceIn");
	};

	var pilgan = document.getElementById("pilgan");
	function pilganset() {
	  	pilgan.style.display = "block";
	  	pilgan.classList.add("bounceIn");
	};


	function closeadd(){
      	isian.style.display = "none";
      	isian.classList.remove("bounceIn");
      	pilgan.style.display = "none";
      	pilgan.classList.remove("bounceIn");
	}
</script>
@endsection
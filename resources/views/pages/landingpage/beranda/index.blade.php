@extends('pages.landingpage.theme.layout')
@section('title', 'Beranda')
@section('content')
<script type="text/javascript">
	document.getElementsByClassName('nav-link')[0].classList.add('active')
</script>
<div class="beranda-banner overflow-hidden my-md-5 mx-md-5 mx-3 my-3">
	<img src="{{ asset('assets/images/beranda/frame-beranda.png') }}" width="100%">
</div>
<div class="container">
	<div class="row my-md-3 my-5">
		<div class="col-12 text-center">
			<h3><strong class="border-bottom-primary-4 px-2 border-4">Berita</strong></h3>
		</div>
		<div class="col-lg-4 col-md-6 col-12">
			<div class="card overflow-hidden border border-secondary rounded p-3 mx-md-2 my-3">
				<div class="thumbnail-news overflow-hidden">
					<img src="{{ asset('assets/images/berita/berita-1.png') }}" height="150px" width="100%">
				</div>
				<div class="content-news mt-2 overflow-hidden" style="text-align: justify; height: 250px">
					<small>Januari, 28 2023</small><br>
					<h5 class="mt-1 mb-2"><strong>Persiapan Berkarir di Dunia Developer</strong></h5>
					<span>
						Persiapan Berkarir di dunia Developer #PBDD diselenggarakan pada Rabu, (17/5) dengan tajuk The World of Programmer. Kegiatan PBDD kali ini bersama seorang Human Capital & Career Consultant,
					</span>
				</div>
				<div class="lihat-detail text-end">
					<a href="{{ route('berita') }}/show/1" class="text-primary-1">Lihat lebih lanjut</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-12">
			<div class="card overflow-hidden border border-secondary rounded p-3 mx-md-2 my-3">
				<div class="thumbnail-news overflow-hidden">
					<img src="{{ asset('assets/images/berita/berita-2.png') }}" height="150px" width="100%">
				</div>
				<div class="content-news mt-2 overflow-hidden" style="text-align: justify; height: 250px">
					<small>Februari, 08 2023</small><br>
					<h5 class="mt-1 mb-2"><strong>Pengisian Tracer Study Alumni 2023</strong></h5>
					<span>
						Salam hangat kepada seluruh Alumni Tahun 2023. Kami, Universitas mengimbau para Alumni untuk dapat mengisi kuesioner Tracer Study yang telah disediakan di dalam website ini (klik disini).
					</span>
				</div>
				<div class="lihat-detail text-end">
					<a href="{{ route('berita') }}/show/2" class="text-primary-1">Lihat lebih lanjut</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-12">
			<div class="card overflow-hidden border border-secondary rounded p-3 mx-md-2 my-3">
				<div class="thumbnail-news overflow-hidden">
					<img src="{{ asset('assets/images/berita/berita-3.png') }}" height="150px" width="100%">
				</div>
				<div class="content-news mt-2 overflow-hidden" style="text-align: justify; height: 250px">
					<small>Juli 28 2023</small><br>
					<h5 class="mt-1 mb-2"><strong>Selamat Wisuda Class Of 2023!</strong></h5>
					<span>
						Kami selaku pihak Universitas A mengucapkan SELAMAT WISUDA kepada para wisudawan/wisudawati 2023. 
					</span>
				</div>
				<div class="lihat-detail text-end">
					<a href="{{ route('berita') }}/show/3" class="text-primary-1">Lihat lebih lanjut</a>
				</div>
			</div>
		</div>
		<div class="col-12 text-end">
			<a href="{{ route('berita') }}" class="text-primary-1"><h5><strong>Selengkapnya</strong></h5></a>
		</div>
	</div>
	<div class="row my-md-3 my-5">
		<div class="col-12 text-center">
			<h3><strong class="border-bottom-primary-4 border-4">Lowongan</strong></h3>
		</div>
		<div class="col-lg-3 col-md-6 col-12">
			<div class="card overflow-hidden border border-secondary rounded p-3 mx-md-0 my-3">
				<div class="d-flex align-items-center">
					<div class="col-8">
						<span class="my-0" style="font-size: .9rem"><strong>PT. MUDA BERKARYA</strong></span>
					</div>
					<div class="text-end col-4">
						<span class="btn bg-warning-1 rounded-pill my-0" style="font-size: .6rem"><strong>Full time</strong></span>
					</div>
				</div>
				<div class="thumbnail-lowongan overflow-hidden mt-3">
					<img src="{{ asset('assets/images/beranda/lowongan-1.png') }}" height="200px" width="100%">
				</div>
				<div class="lihat-detail text-end mt-2">
					<small><a href="{{ route('karir') }}/show/1" class="text-primary-1">Lihat detail</a></small>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-12">
			<div class="card overflow-hidden border border-secondary rounded p-3 mx-md-0 my-3">
				<div class="d-flex align-items-center">
					<div class="col-8">
						<span class="my-0" style="font-size: .9rem"><strong>TOKOPEDIA</strong></span>
					</div>
					<div class="text-end col-4">
						<span class="btn bg-warning-1 rounded-pill my-0" style="font-size: .6rem"><strong>Full time</strong></span>
					</div>
				</div>
				<div class="thumbnail-lowongan overflow-hidden mt-3">
					<img src="{{ asset('assets/images/beranda/lowongan-2.png') }}" height="200px" width="100%">
				</div>
				<div class="lihat-detail text-end mt-2">
					<small><a href="{{ route('karir') }}/show/2" class="text-primary-1">Lihat detail</a></small>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-12">
			<div class="card overflow-hidden border border-secondary rounded p-3 mx-md-0 my-3">
				<div class="d-flex align-items-center">
					<div class="col-8">
						<span class="my-0" style="font-size: .9rem"><strong>TIKET.COM</strong></span>
					</div>
					<div class="text-end col-4">
						<span class="btn bg-warning-1 rounded-pill my-0" style="font-size: .6rem"><strong>Full time</strong></span>
					</div>
				</div>
				<div class="thumbnail-lowongan overflow-hidden mt-3">
					<img src="{{ asset('assets/images/beranda/lowongan-3.png') }}" height="200px" width="100%">
				</div>
				<div class="lihat-detail text-end mt-2">
					<small><a href="{{ route('karir') }}/show/3" class="text-primary-1">Lihat detail</a></small>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-12">
			<div class="card overflow-hidden border border-secondary rounded p-3 mx-md-0 my-3">
				<div class="d-flex align-items-center">
					<div class="col-8">
						<span class="my-0" style="font-size: .9rem"><strong>SINARMAS</strong></span>
					</div>
					<div class="text-end col-4">
						<span class="btn bg-warning-1 rounded-pill my-0" style="font-size: .6rem"><strong>Full time</strong></span>
					</div>
				</div>
				<div class="thumbnail-lowongan overflow-hidden mt-3">
					<img src="{{ asset('assets/images/beranda/lowongan-4.png') }}" height="200px" width="100%">
				</div>
				<div class="lihat-detail text-end mt-2">
					<small><a href="{{ route('karir') }}/show/4" class="text-primary-1">Lihat detail</a></small>
				</div>
			</div>
		</div>
		<div class="col-12 text-end">
			<a href="{{ route('karir') }}" class="text-primary-1"><h5><strong>Selengkapnya</strong></h5></a>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legalisasi.min.css') }}">
<div id="myModal" class="mymodal">
  	<div class="mymodal-content bounceIn text-center">
    	<h5><strong>Terimakasih Telah Mengisi Kuesioner Tracer Study</strong></h5>
    	<p>Sebagai rasa terimakasih, kami menyediakan hadiah berupa voucher<br>
    	bagi Alumni yang telah mengisi kuesioner Tarcer Study</p>
  		<img src="{{ asset('assets/images/beranda/ticket.png') }}" class="mb-2"><br>
  		<a href="#" id="openSecondModal" style="color: #164520">salin kode voucher disini</a>
  		<br>
    	<p class="mt-3">
    		Kode voucher ini dapat kamu gunakan ketika sedang berbelanja di seluruh cabang indomaret di Indonesia
    	</p>
  	</div>
</div>

<div id="myModal2" class="mymodal">
  	<div class="mymodal-content bounceIn text-center">
    	<h5><strong>Kode Voucher Berhasil disalin</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>

@if(Session::has('success2'))
<?=
	'<script type="text/javascript">
		var modal = document.getElementById("myModal");
		modal.style.display = "block";
	  	modal.classList.add("bounceIn");
	  	setTimeout(function() {
	      	modal.style.display = "none";
	      	modal.classList.remove("bounceIn");
	    }, 5000);
	</script>'
?>
@endif
<script type="text/javascript">
	var openModalBtn = document.getElementById("openSecondModal");
	var modal = document.getElementById("myModal");
	var modal2 = document.getElementById("myModal2");

	openModalBtn.addEventListener("click", function() {
		modal.style.display = "none";
	  	modal2.style.display = "block";
	  	modal2.classList.add("bounceIn");
	  	setTimeout(function() {
	      	modal2.style.display = "none";
	      	modal2.classList.remove("bounceIn");
	    }, 3000);
	});
</script>
@endsection
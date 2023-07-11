@extends('pages.landingpage.theme.layout')
@section('title', 'Informasi Karir')
@section('content')
<script type="text/javascript">
	document.getElementsByClassName('nav-link')[3].classList.add('active')
</script>

<style type="text/css">
	.pertanyaan-login-active{
		background-color: #EAF2F4;
	}
	.pertanyaan-login-active a{
		font-weight: 600;
	}
</style>


<div class="container my-5">
	<a href="{{ route('home') }}" class="text-decoration-none text-dark"> Beranda</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>Informasi Karir</strong></span>
	
	<div class="row my-3">
		<div class="col-md-3 my-md-0 my-3">
			@include('pages.landingpage.karir.menu')
		</div>
		<div class="col-md-9 my-md-0 my-3">
			<div class="d-md-flex align-items-center position-relative borderradius-10 overflow-hidden border border-secondary">
				<div class="col-md-3"
					style="
						height: 180px;
						background-image: url( {{ asset('assets/images/lowongan/karir-1.png') }} );
						background-size: auto 180px;
						background-position: center bottom 0%;
					" 
				>
				</div>
				<div class="col-md-7">
					<div class="mx-2 my-2">
						<a href="{{ route('karir') }}/show/1" class="text-decoration-none text-dark"><h5 class="mb-2"><strong>PT. Muda Berkarya</strong></h5></a>
						<p class="mt-2 mb-0" style="text-align: justify;">PT. Muda Berkarya kembali hadir dengan membuka lowongan pekerjaan lebih banyak dari yang sebelumnya. Saat ini terdapat 3 Lowongan yang dapat kalian lamar untuk berkarir dengan PT. Muda Berkarya.</p>
					</div>
				</div>
				<div class="position-absolute bg-warning-1 px-4 py-2 rounded" style="right: 0; top: 0">
					<strong>Full time</strong>
				</div>
			</div>
			<br>
			<div class="d-md-flex align-items-center position-relative borderradius-10 overflow-hidden border border-secondary">
				<div class="col-md-3"
					style="
						height: 180px;
						background-image: url( {{ asset('assets/images/lowongan/karir-2.png') }} );
						background-size: auto 180px;
						background-position: center bottom 0%;
					" 
				>
				</div>
				<div class="col-md-7">
					<div class="mx-2 my-2">
						<a href="{{ route('karir') }}/show/2" class="text-decoration-none text-dark"><h5 class="mb-2"><strong>TOKOPEDIA</strong></h5></a>
						<p class="mt-2 mb-0" style="text-align: justify;">PT Tokopedia merupakan perusahaan perdagangan elektronik atau sering disebut toko daring. Saat ini Tokopedia kembali membuka peluang kepada fresh graduate untuk berkarir bersama si Hijau .</p>
					</div>
				</div>
				<div class="position-absolute bg-warning-1 px-4 py-2 rounded" style="right: 0; top: 0">
					<strong>Full time</strong>
				</div>
			</div>
			<br>
			<div class="d-md-flex align-items-center position-relative borderradius-10 overflow-hidden border border-secondary">
				<div class="col-md-3"
					style="
						height: 180px;
						background-image: url( {{ asset('assets/images/lowongan/karir-3.png') }} );
						background-size: auto 180px;
						background-position: center bottom 0%;
					" 
				>
				</div>
				<div class="col-md-7">
					<div class="mx-2 my-2">
						<a href="{{ route('karir') }}/show/3" class="text-decoration-none text-dark"><h5 class="mb-2"><strong>Tiket.com</strong></h5></a>
						<p class="mt-2 mb-0" style="text-align: justify;">tiket.com adalah pionir online travel agent (OTA) di Indonesia yang berdiri sejak tahun 2011. Pada tahun 2017, tiket.com berafiliasi dengan Blibli dan pada tahun 2021 menjadi anak perusahaan terkonsolidasi dari Blibli. </p>
					</div>
				</div>
				<div class="position-absolute bg-warning-1 px-4 py-2 rounded" style="right: 0; top: 0">
					<strong>Full time</strong>
				</div>
			</div>
			<br>
			<div class="d-md-flex align-items-center position-relative borderradius-10 overflow-hidden border border-secondary">
				<div class="col-md-3"
					style="
						height: 180px;
						background-image: url( {{ asset('assets/images/lowongan/karir-4.png') }} );
						background-size: auto 180px;
						background-position: center bottom 0%;
					" 
				>
				</div>
				<div class="col-md-7">
					<div class="mx-2 my-2">
						<a href="{{ route('karir') }}/show/4" class="text-decoration-none text-dark"><h5 class="mb-2"><strong>Sinarmas</strong></h5></a>
						<p class="mt-2 mb-0" style="text-align: justify;">Sinar Mas adalah brand dari perusahaan yang bergerak melalui tujuh pilar bisnis: Pulp dan Kertas, Agribisnis dan Pangan, Layanan Keuangan, Pengembang dan Realestat, Telekomunikasi</p>
					</div>
				</div>
				<div class="position-absolute bg-warning-1 px-4 py-2 rounded" style="right: 0; top: 0">
					<strong>Internship</strong>
				</div>
			</div>

		</div>
	</div>
</div>

@if(!isset($_GET['kategori']))
<script type="text/javascript">
	document.getElementsByClassName('menu-karir')[0].classList.add('pertanyaan-login-active')
</script>
@elseif($_GET['kategori'] == 'teknologi')
<script type="text/javascript">
	document.getElementsByClassName('menu-karir')[1].classList.add('pertanyaan-login-active')
</script>
@elseif($_GET['kategori'] == 'kesehatan')
<script type="text/javascript">
	document.getElementsByClassName('menu-karir')[2].classList.add('pertanyaan-login-active')
</script>
@elseif($_GET['kategori'] == 'pendidikan')
<script type="text/javascript">
	document.getElementsByClassName('menu-karir')[3].classList.add('pertanyaan-login-active')
</script>
@elseif($_GET['kategori'] == 'akutansi')
<script type="text/javascript">
	document.getElementsByClassName('menu-karir')[4].classList.add('pertanyaan-login-active')
</script>
@endif
@endsection
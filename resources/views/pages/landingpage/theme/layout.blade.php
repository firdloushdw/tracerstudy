<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TRACER STUDY | @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/iziToast/iziToast.min.css') }}">

	<link rel="shortcut icon" type="text/css" href="{{ asset('assets/images/logo.png') }}">

	<script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/iziToast/iziToast.min.js') }}"></script>
	<style type="text/css">
		*{
			font-family: 'arial'
		}
		.borderradius-10{
			border-radius: 10px;
		}
		nav.navbar{
			box-shadow: 0px 2px 10px #D4D4D4;
		}
		.bg-primary-1{
			background-color: #0B3BA1;
		}
		.bg-warning-1{
			background-color: #FFCB42;
		}
		.btn-primary-1{
			background-color: #0B3BA1;
		}
		.text-primary-1{
			color: #0B3BA1;
		}
		.border-bottom-primary-4{
			border-bottom: 4px solid #0B3BA1;
		}
		.border-primary-1-2{
			border: 2px solid #0B3BA1;
		}
		.nav-link{
			color: #000000;
		}
		.nav-link:hover{
			color: #0B3BA1;
		}
		.nav-link.active{
			color: #0B3BA1;	
		}
		.info-legalisasi{
			background-color: #EBFFFF;
			border-left: 10px solid #66C8E6
		}
		.error-legalisasi{
			background-color: #FFF6F6;
			border: 1px solid #DC7474;
			border-radius: 5px;
			color: #DC7474
		}
		.bg-purple{
			background-color: #5555DC
		}
		@media screen and (min-width: 992px){
			.informasi-alumni{
				width: 60%;
				margin-left: 20%
			}
		}
	</style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg bg-white">
  	<div class="container-fluid">
	    <a class="navbar-brand ms-md-5 ms-3" href="{{ route('home') }}">
	    	<img src="{{ asset('assets/images/logo-2.png') }}">
	    </a>
	    <button class="navbar-toggler bg-primary-1 border border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      	<i class="fas fa-bars text-white"></i>
	    </button>
	    <div class="collapse navbar-collapse mx-md-5 text-center" id="navbarSupportedContent">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link px-md-4" aria-current="page" href="{{ route('home') }}">Beranda</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link px-md-4" aria-current="page" href="#">Tracer Study</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link px-md-4" aria-current="page" href="{{ route('legalisasi') }}">Legalisasi Online</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link px-md-4" aria-current="page" href="{{ route('karir') }}">Informasi Karir</a>
	        </li>
	        <li class="nav-item me-md-5">
	          <a class="btn btn-primary-1 ms-md-4 px-md-3 w-100 text-white" aria-current="page" href="{{ route('user.login') }}">Login</a>
	        </li>
	      </ul>
	    </div>
  	</div>
</nav>

@yield('content')

<footer class="bg-primary-1 text-white">
	<div class="px-md-5 px-3 py-md-5 py-5">
		<div class="row">
			<div class="col-md-3">
				<a class="navbar-brand bg-white p-4 borderradius-10" href="{{ route('home') }}">
	    			<img src="{{ asset('assets/images/logo-2.png') }}">
	    		</a>
	    		<h6 class="mt-5 mb-0 me-md-4" style="line-height: 32px">
	    			Direktur Kemitraan, dan Alumni Subdirektorat Hubang Alumni Universitas A
	    			<br>
	    			Daerah A, Jalan 1, Kota A 55231
	    			<br>
	    			<i class="far fa-envelope me-2"></i> alumni@universitasA.ac.id<br>
	    			<i class="fa fa-phone me-2"></i> +62 (274) 5545678<br>
	    		</h6>
			</div>
			<div class="col-md-1"><br></div>
			<div class="col-md-4 mt-md-0 mt-5">
				<strong>Tentang Kami</strong><br>
				<a href="#" class="text-decoration-none text-white my-0"><p class="my-2 mt-4">Profil hubungi alumni</p></a>
				<a href="#" class="text-decoration-none text-white my-0"><p class="my-2">Kontak kami</p></a>
				<a href="#" class="text-decoration-none text-white my-0"><p class="my-2">Direktori staff</p></a>
				<a href="#" class="text-decoration-none text-white my-0"><p class="my-2">Tracer Study Universitas A</p></a>
			</div>
			<div class="col-md-4 mt-md-0 mt-5">
				<strong>Tautan</strong><br>
				<a href="#" class="text-decoration-none text-white my-0"><p class="my-2 mt-4">Universitas A</p></a>
				<a href="#" class="text-decoration-none text-white my-0"><p class="my-2">Direktorat kemitraan, dan Alumni</p></a>
				<a href="#" class="text-decoration-none text-white my-0"><p class="my-2">Visi</p></a>
				<a href="#" class="text-decoration-none text-white my-0"><p class="my-2">MIsi</p></a>
			</div>
		</div>
	</div>
</footer>
@if(Session::has('success'))
<?=
	'<script type="text/javascript">
		iziToast.success({
        	title : "Success",
        	message: "'.Session::get('success').'",
        	position: "topCenter"
    	})
	</script>'
?>
@endif
@if(Session::has('error'))
<?=
	'<script type="text/javascript">
		iziToast.error({
        	title : "Error",
        	message: "'.Session::get('error').'",
        	position: "topCenter"
    	})
	</script>'
?>
@endif
</body>
</html>
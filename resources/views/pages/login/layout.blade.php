<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TRACER STUDY | Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/iziToast/iziToast.min.css') }}">

	<link rel="shortcut icon" type="text/css" href="{{ asset('assets/images/logo.png') }}">

	<script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/iziToast/iziToast.min.js') }}"></script>

	<style type="text/css">
		.text-primary-1{
			color: #0B3BA1;
		}
		.pertanyaan-login-active{
			background-color: #EAF2F4;
		}
		.pertanyaan-login-active a{
			font-weight: 600;
		}
		.bg-primary-1{
			background-color: #0B3BA1;
		}
		.bg-warning-1{
			background-color: #FFCB42;
		}
		.bg-success-1{
			background-color: #85E0A3
		}
	</style>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg bg-white">
  	<div class="container-fluid">
	    <a class="navbar-brand ms-md-5 ms-3" href="#">
	    	<img src="{{ asset('assets/images/logo-2.png') }}">
	    </a>
	    <button class="navbar-toggler bg-primary-1 border border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      	<i class="fas fa-bars text-white"></i>
	    </button>
	    <div class="collapse navbar-collapse mx-md-5 text-center" id="navbarSupportedContent">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="text-primary-1 nav-link px-md-4" aria-current="page" href="#">ADITA LIPTA DITIA</a>
	        </li>
	      </ul>
	    </div>
  	</div>
</nav>
<div class="mx-md-5 my-md-5 mx-3 my-5">
	<div class="row">
		<div class="col-md-3 my-md-0 my-3">
			<div class="border border-secondary rounded overflow-hidden">
				<div class="bg-primary-1 text-center text-white py-2">
					Kategori Pertanyaan
				</div>
				<div class="px-3 py-2 text-dark asked-login">
					<h6 class="my-0"><a href="{{ route('user.pagelogin') }}?page=1" class="text-decoration-none text-dark" >Identitas Alumni</a></h6>
				</div>
				<div class="px-3 py-2 text-dark asked-login">
					<h6 class="my-0"><a href="{{ route('user.pagelogin') }}?page=2" class="text-decoration-none text-dark" >Pekerjaan Alumni</a></h6>
				</div>
				<div class="px-3 py-2 text-dark asked-login">
					<h6 class="my-0"><a href="{{ route('user.pagelogin') }}?page=3" class="text-decoration-none text-dark" >Wirausaha Alumni</a></h6>
				</div>
				<div class="px-3 py-2 text-dark asked-login">
					<h6 class="my-0"><a href="{{ route('user.pagelogin') }}?page=4" class="text-decoration-none text-dark" >Pendidikan Alumni</a></h6>
				</div>
				<div class="px-3 py-2 text-dark asked-login">
					<h6 class="my-0"><a href="{{ route('user.pagelogin') }}?page=5" class="text-decoration-none text-dark" >Saran dan Masukan</a></h6>
				</div>
			</div>
		</div>
		<div class="col-md-9 my-md-0 my-3">
			<form method="post">
				@csrf
				@yield('content')
			</form>
		</div>
	</div>
</div>
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
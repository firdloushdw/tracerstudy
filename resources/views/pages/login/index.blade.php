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
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css') }}">

	<link rel="shortcut icon" type="text/css" href="{{ asset('assets/images/logo.png') }}">

	<script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/iziToast/iziToast.min.js') }}"></script>
	<style type="text/css">
		.bg-purple{
			background-color: #5555DC
		}
	</style>
</head>
<body class="bg-primary-1">
	<div class="w-100 d-flex align-items-center justify-content-center" style="min-height: 100vh">
		<div style="width: 90%" class="my-md-0 my-5">
			<div class="bg-white px-md-5 py-md-5 py-3 px-3 borderradius-10 d-md-flex align-items-center w-100">
				<div class="col-md-2 me-md-5 mx-md-0 mx-5 my-md-0 my-3">
					<img src="{{ asset('assets/images/logo-2.png') }}" class="w-100">
				</div>
				<div class="col-md-3 mx-md-5">
					<form method="post" action="">
						@csrf
						<div class="form-group">
							<label>Username</label>
							<input required="" class="form-control" type="text" placeholder="Masukkan username disini" name="username" />
						</div>
						<div class="form-group mt-3">
							<label>Password</label>
							<input required="" class="form-control" type="password" placeholder="Masukkan password disini" name="password" />
						</div>
						<div class="form-group mt-3 text-end">
							<button class="btn bg-purple text-white">Login</button>
						</div>
					</form>
				</div>
				<hr class="d-md-none my-md-none my-3">
				<div class="col-md-5 ms-md-5">
					<h6 style="line-height: 24px; text-align: justify;">
						<strong>Selamat datang Single Sign On (SSO) Universitas A</strong><br>
						Single Sign On (SSO) merupakan salah satu gerbang integrasi berbagai aplikasi yang digunakan dalam lingkungan Universitas A untuk mendukung baik perkuliahan dan pendataan civitas Universitas A secara daring.
					</h6>
				</div>
			</div>
			<br>
			<div class="bg-white informasi-alumni rounded" style="text-align: justify;">
				<div class="alert alert-danger px-md-5 borderradius-10">
					<strong>INFORMASI KEPADA SELURUH ALUMNI</strong>
				</div>
				<div class="px-md-5 px-3">
					Mulai tanggal 25 Agustus 2023 Legalisasi Ijazah Jarak Jauh (Online) sementara hanya bisa diambil secara langsung di gedung akademik Universitas A. Atas Pengertian dan perhatiannya kami ucapkan terimakasih. Salam Semangat!
				</div>
				<br>
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TRACER STUDY | @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/admin.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/iziToast/iziToast.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">

	<link rel="shortcut icon" type="text/css" href="{{ asset('assets/images/logo.png') }}">

	<script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/iziToast/iziToast.min.js') }}"></script>
	
</head>
<body style="background-color: #BFCDEC">
	<div class="bg-primary-1 py-2 position-fixed w-100" style="z-index: 100">
		<div class="mx-md-5 mx-4">
			<div class="d-flex align-items-center">
				<div class="col-6 d-flex align-items-center">
					<a href="javascript:;" onclick="openSidebar()"><i class="fas fa-bars text-white me-3 d-lg-none"></i></a>
					<h5 class="my-0 text-white text-sm-14">Sistem Informasi Alumni</h5>
				</div>
				<div class="col-6 text-end">
					<div class="d-flex align-items-center justify-content-end">
						<a href="javascript:;" id="openModalNotifikation" class="me-2"><img src="{{ asset('assets/images/admin/notification.png') }}" width="30px"></a>
						<a href="{{ route('logout') }}"><img class="logout" src="{{ asset('assets/images/admin/keluar.png') }}"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="">
		<div id="sidebar" class="sidebar close position-fixed bg-white ps-md-5 px-3">
			<h5><strong>Selamat datang, Admin</strong></h5>
			<h5 class="text-secondary-2">Tracer Study</h5>
			<br>
			<div class="menu">
				<span class="text-secondary-2">Menu</span>
				<br>
				<a href="{{ route('admin.dashboard') }}" class="side-menu text-decoration-none d-flex align-items-center text-dark mt-2">
					<img src="{{ asset('assets/images/admin/dashboard.png') }}" class="me-3 my-2"> Dashboard
				</a>
				<a href="{{ route('admin.karir') }}" class="side-menu text-decoration-none d-flex align-items-center text-dark">
					<img src="{{ asset('assets/images/admin/apartment.png') }}" class="me-3 my-2"> Informasi Karir
				</a>
				<a href="{{ route('admin.legalisasi') }}" class="side-menu text-decoration-none d-flex align-items-center text-dark">
					<img src="{{ asset('assets/images/admin/edit_document.png') }}" class="me-3 my-2"> Legalisasi Online
				</a>
				<a href="{{ route('admin.berita') }}" class="side-menu text-decoration-none d-flex align-items-center text-dark">
					<img src="{{ asset('assets/images/admin/feed.png') }}" class="me-3 my-2"> Berita
				</a>
				<a href="{{ route('admin.pengaturan') }}" class="side-menu text-decoration-none d-flex align-items-center text-dark">
					<img src="{{ asset('assets/images/admin/settings.png') }}" class="me-3 my-2"> Pengaturan
				</a>
			</div>
			<br>
			<div class="menu">
				<span class="text-secondary-2">Tracer Study</span>
				<br>
				<a href="{{ route('admin.kuesioner') }}" class="side-menu text-decoration-none d-flex align-items-center text-dark mt-2">
					<img src="{{ asset('assets/images/admin/description.png') }}" class="me-3 my-2"> Kuesioner Tracer Study 
				</a>
				<a href="{{ route('admin.alumni') }}" class="side-menu text-decoration-none d-flex align-items-center text-dark">
					<img src="{{ asset('assets/images/admin/school.png') }}" class="me-3 my-2"> Data Alumni
				</a>
				<a href="javascript:;" id="openDropdownHasil" class="side-menu text-decoration-none d-flex align-items-center text-dark">
					<img src="{{ asset('assets/images/admin/bar_chart_4_bars.png') }}" class="me-3 my-2"> Hasil Tracer Study <i class="fas fa-chevron-down ms-5"></i>
				</a>
				<div id="dropdownHasil">
					<div class="py-1 cover-dropdown">
						<a href="{{ route('admin.tracer.study') }}" class="ps-4 dropdown-content text-decoration-none text-dark py-1">Identitas</a><br>
					</div>
					<div class="py-1 cover-dropdown">
						<a href="{{ route('admin.tracer.study') }}" class="ps-4 dropdown-content text-decoration-none text-dark py-1">Pekerjaan</a><br>
					</div>
					<div class="py-1 cover-dropdown">
						<a href="{{ route('admin.tracer.study') }}" class="ps-4 dropdown-content text-decoration-none text-dark py-1">Wirausaha</a><br>
					</div>
					<div class="py-1 cover-dropdown">
						<a href="{{ route('admin.tracer.study') }}" class="ps-4 dropdown-content text-decoration-none text-dark py-1">Pendidikan</a><br>
					</div>
					<div class="py-1 cover-dropdown">
						<a href="" class="ps-4 dropdown-content text-decoration-none text-dark py-1">Kepuasan Alumni</a>
					</div>
				</div>
			</div>
			<br><br>
		</div>
		<div class="content">
			@yield('content')
		</div>
	</div>
	<div id="notificationmodal" class="mymodal" style="display: none;">
	  	<div class="mymodal-content bounceIn">
	  		<div class="d-flex align-items-center">
	  			<div class="col-9 text-start">
	  				<h5><strong>Notifikasi</strong></h5>
	  			</div>
	  			<div class="col-3 text-end">
	  				<a href="javascript:;" onclick="closeNotification()">
	  					<i class="fas fa-close text-dark"></i>
	  				</a>
	  			</div>
	  		</div>
	  		<hr class="mt-2">
	  		<a href="#" class="notif-href text-decoration-none text-dark">
		    	<div class="d-flex align-items-center notif-content py-1 px-2 rounded">
		    		<img src="{{ asset('assets/images/admin/description.png') }}" class="me-4 my-2" width="30px">
		    		<div>
		    			<strong>Alumni mengisi kuesioner Tracer Study</strong><br>
		    			<small>25 menit yang lalu</small>
		    		</div>
		    	</div>
		    </a>
	    	<br>
	    	<a href="#" class="notif-href text-decoration-none text-dark">
		    	<div class="d-flex align-items-center notif-content py-1 px-2 rounded">
		    		<img src="{{ asset('assets/images/admin/edit_document.png') }}" class="me-4 my-2" width="30px">
		    		<div>
		    			<strong>Pengajuan Legalisasi jarak jauh (online)</strong><br>
		    			<small>15 menit yang lalu</small>
		    		</div>
		    	</div>
		    </a>
	  	</div>
	</div>
	<script type="text/javascript">
		var openModalNotif = document.getElementById("openModalNotifikation");
		var notifmodal = document.getElementById("notificationmodal");

		openModalNotif.addEventListener("click", function() {
		  	notifmodal.style.display = "block";
		  	notifmodal.classList.add("bounceIn");
		});
		function closeNotification(){
	      	notifmodal.style.display = "none";
	      	notifmodal.classList.remove("bounceIn");

		}
		$('#dropdownHasil').slideUp()
		$('#openDropdownHasil').on('click', function(){
			$('#dropdownHasil').slideToggle()
		})

		function openSidebar(){
			$('#sidebar').toggleClass('close')
			$('#sidebar').toggleClass('open')
		}
	</script>
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
@extends('pages.landingpage.theme.layout')
@section('title', 'Berita')
@section('content')
<script type="text/javascript">
	document.getElementsByClassName('nav-link')[0].classList.add('active')
</script>
<div class="container my-5">
	<a href="{{ route('home') }}" class="text-decoration-none text-dark"> Beranda</a> <i class="fas fa-chevron-right mx-3"></i> <a href="{{ route('berita') }}" class="text-decoration-none text-dark"> Berita</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>Congratulations Class Of 2023!</strong></span>
	<div class="berita mt-4">
		<div class="row">
			<div class="col-md-8">
				<h5 class="mb-2"><strong>Congratulations Class Of 2023!</strong></h5>

				<small class="me-1"><i class="fas fa-clock me-2"></i>Juli, 28 2023</small>
				<small class="ms-2"><i class="fas fa-user-circle me-2"></i>Oleh: Admin</small><br>

				<img src="{{ asset('assets/images/berita/berita-3.png') }}" width="100%" class="mt-2">
				<p class="mt-4" style="text-align: justify;">
					Kami selaku pihak Universitas A mengucapkan SELAMAT WISUDA kepada para wisudawan/wisudawati tahun 2023. Semoga ilmu dan pengalaman yang telah didapatkan dari Universitas dapat menjadi bekal kalian menuju kesuksesan.
				</p>
			</div>
			<div class="col-md-4 mt-md-0 mt-5">
				<div class="border boder-secondary borderradius-10 py-4 px-md-3 px-2">
					<h5><strong>Berita Terbaru</strong></h5>
					<div class="border-primary-1-2 mt-1 w-50"></div>
					<br>
					<a href="{{ route('berita') }}/show/3" class="text-decoration-none text-dark">
						<div class="d-flex align-items-center bg-warning-1 borderradius-10 overflow-hidden">
							<div class="col-4">
								<div class="w-100"
									style="
										height: 80px;
										background-image: url( {{ asset('assets/images/berita/berita-3.png')  }} );
										background-size: auto 80px;
										background-position: center;
									">
								</div>
							</div>
							<div class="col-8">
								<div class="text-end mx-2">
									<div style="text-align: justify; line-height:18px">
										<small class="my-0 mb-1"><strong>Congratulations Class Of 2023!</strong></small>
									</div>
									<small>Juli, 28 2023</small>
								</div>
							</div>
						</div>
					</a>
					<br>
					<a href="{{ route('berita') }}/show/4" class="text-decoration-none text-dark">
						<div class="d-flex align-items-center bg-warning-1 borderradius-10 overflow-hidden">
							<div class="col-4">
								<div class="w-100"
									style="
										height: 80px;
										background-image: url( {{ asset('assets/images/berita/berita-4.png')  }} );
										background-size: auto 80px;
										background-position: center;
									">
								</div>
							</div>
							<div class="col-8">
								<div class="text-end mx-2">
									<div style="text-align: justify; line-height:18px">
										<small class="my-0 mb-1"><strong>Workshop Finance bersama BNI</strong></small>
									</div>
									<small>Maret, 18 2023</small>
								</div>
							</div>
						</div>
					</a>
					<br>
					<a href="{{ route('berita') }}/show/2" class="text-decoration-none text-dark">
						<div class="d-flex align-items-center bg-warning-1 borderradius-10 overflow-hidden">
							<div class="col-4">
								<div class="w-100"
									style="
										height: 80px;
										background-image: url( {{ asset('assets/images/berita/berita-2.png')  }} );
										background-size: auto 80px;
										background-position: center;
									">
								</div>
							</div>
							<div class="col-8">
								<div class="text-end mx-2">
									<div style="text-align: justify; line-height:18px">
										<small class="my-0 mb-1"><strong>Pengisian Tracer Study Alumni 2023</strong></small>
									</div>
									<small>Februari, 08 2023</small>
								</div>
							</div>
						</div>
					</a>
					<br>
					<a href="{{ route('berita') }}/show/5" class="text-decoration-none text-dark">
						<div class="d-flex align-items-center bg-warning-1 borderradius-10 overflow-hidden">
							<div class="col-4">
								<div class="w-100"
									style="
										height: 80px;
										background-image: url( {{ asset('assets/images/berita/berita-5.png')  }} );
										background-size: auto 80px;
										background-position: center;
									">
								</div>
							</div>
							<div class="col-8">
								<div class="text-end mx-2">
									<div style="text-align: justify; line-height:18px">
										<small class="my-0 mb-1"><strong>Test TOEFL/PTESOL Bersama</strong></small>
									</div>
									<small>Mei, 08 2023</small>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
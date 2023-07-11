@extends('pages.landingpage.theme.layout')
@section('title', 'Informasi Karir')
@section('content')
<script type="text/javascript">
	document.getElementsByClassName('nav-link')[3].classList.add('active')
</script>
<div class="container my-5">
	<a href="{{ route('home') }}" class="text-decoration-none text-dark"> Beranda</a> <i class="fas fa-chevron-right mx-3"></i> <a href="{{ route('karir') }}" class="text-decoration-none text-dark"> Informasi Karir</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>Sinarmas</strong></span>
	<div class="karir mt-4">
		<div class="row">
			<div class="col-md-8">
				<h5 class="mb-2"><strong>SINARMAS</strong></h5>

				<small class="me-1"><i class="fas fa-user-circle me-2"></i>Oleh: Admin</small>
				<small class="ms-2"><i class="fas fa-bookmark me-2"></i>Teknologi</small><br>

				<img src="{{ asset('assets/images/lowongan/karir-4.png') }}" width="100%" class="mt-2">
				<p class="mt-4" style="text-align: justify;">
					Sinar Mas adalah brand dari perusahaan yang bergerak melalui tujuh pilar bisnis: Pulp dan Kertas, Agribisnis dan Pangan, Layanan Keuangan, Pengembang dan Realestat, Telekomunikasi
					<ul>
						<li>Store Manager</li>
						<li>Graphic Designer</li>
						<li>Mobile Developer</li>
					</ul>
					Fresh graduate are welcome to apply. Silahkan kirim CV dan Portfolio (jika diperlukan) terbaik kamu di link berikut <a href="https://workwithsinarmas.com">https://workwithsinarmas.com</a> Pendaftaran lamaran ini terbuka mulai tanggal 12 April 2023 - 12 Mei 2023. Salam semangat!
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
@extends('pages.landingpage.theme.layout')
@section('title', 'Berita')
@section('content')
<script type="text/javascript">
	document.getElementsByClassName('nav-link')[0].classList.add('active')
</script>
<div class="container my-5">
	<a href="{{ route('home') }}" class="text-decoration-none text-dark"> Beranda</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>Berita</strong></span>
	<div class="berita mt-4">
		<div class="row">
			<div class="col-md-4">
				<img src="{{ asset('assets/images/berita/berita-1.png') }}" width="100%" height="180px">
			</div>
			<div class="col-md-8">
				<a href="{{ route('berita') }}/show/1" class="text-decoration-none text-dark"><h5 class="mb-2"><strong>Persiapan Berkarir di Dunia Developer</strong></h5></a>
				<small><i class="fas fa-clock me-2"></i>Januari, 28 2023</small><br>
				<p class="mt-2 mb-0" style="text-align: justify;">Persiapan Berkarir di dunia Developer #PBDD diselenggarakan pada Rabu, (17/5) dengan tajuk The World of Programmer. Kegiatan PBDD kali ini bersama seorang Human Capital & Career Consultant, Hasna Askiyaah, M.Psi., Psikolog. yang merupakan alumnus dari Fakultas Psikologi Universitas A.</p>
			</div>
			<div class="col-12">
				<hr class="my-3">
			</div>

			<div class="col-md-4">
				<img src="{{ asset('assets/images/berita/berita-2.png') }}" width="100%" height="180px">
			</div>
			<div class="col-md-8">
				<a href="{{ route('berita') }}/show/2" class="text-decoration-none text-dark"><h5 class="mb-2"><strong>Pengisian Tracer Study Alumni 2023</strong></h5></a>
				<small><i class="fas fa-clock me-2"></i>Februari, 08 2023</small><br>
				<p class="mt-2 mb-0" style="text-align: justify;">Salam hangat kepada seluruh Alumni Tahun 2023. Kami, Universitas mengimbau para Alumni untuk dapat mengisi kuesioner Tracer Study yang telah disediakan di dalam website ini (klik disini). Feedback dan Informasi yang Alumni berikan akan sangat memberikan manfaat bagi perkembangan universitas dan Mahasiswa lain tentunya.</p>
			</div>
			<div class="col-12">
				<hr class="my-3">
			</div>

			<div class="col-md-4">
				<img src="{{ asset('assets/images/berita/berita-3.png') }}" width="100%" height="180px">
			</div>
			<div class="col-md-8">
				<a href="{{ route('berita') }}/show/3" class="text-decoration-none text-dark"><h5 class="mb-2"><strong>Congratulations Class Of 2023!</strong></h5></a>
				<small><i class="fas fa-clock me-2"></i>Juli, 28 2023</small><br>
				<p class="mt-2 mb-0" style="text-align: justify;">Kami selaku pihak Universitas A mengucapkan SELAMAT WISUDA kepada para wisudawan/wisudawati tahun 2023. Semoga ilmu dan pengalaman yang telah didapatkan dari Universitas dapat menjadi bekal kalian menuju kesuksesan.</p>
			</div>
			<div class="col-12">
				<hr class="my-3">
			</div>

			<div class="col-md-4">
				<img src="{{ asset('assets/images/berita/berita-4.png') }}" width="100%" height="180px">
			</div>
			<div class="col-md-8">
				<a href="{{ route('berita') }}/show/4" class="text-decoration-none text-dark"><h5 class="mb-2"><strong>Workshop Finance bersama BNI</strong></h5></a>
				<small><i class="fas fa-clock me-2"></i>Maret, 18 2023</small><br>
				<p class="mt-2 mb-0" style="text-align: justify;">BNI Goes To UNI kembali hadir dengan rangkaian Workshop Finance. Workshop ini bertujuan untuk memberikan pelatihan finance kepada mahasiswa tingkat akhir/calon Alumni  untuk membantu bekal bagi mahasiswa/calon alumni yang akan terjun ke dunia kerja.</p>
			</div>
		</div>
	</div>
</div>
@endsection
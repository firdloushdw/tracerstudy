@extends('pages.admin.layout')
@section('title', 'Berita')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[3].classList.add('active')
</script>
<div class="mx-md-5 mx-3">
	<a href="{{ route('admin.berita') }}" class="text-decoration-none text-dark"> Daftar Berita</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>Persiapan Berkarir di Dunia Developer</strong></span>
	<br><br>
	<legend><strong>Berita</strong></legend>
	<span>Seluruh informasi berita yang ditambahkan akan ditampilkan pada halaman utama (beranda) dan halaman detail berita.</span>
	<br>
	<br>
	<div>
		<div class="bg-white borderradius-10 border border-1 border-secondary p-4" style="text-align: justify;">
			<a href="{{ route('admin.berita') }}/show/1" class="text-decoration-none text-dark">
				<small>Januari, 28 2022</small>
				<h5 class="mt-2 mb-1"><strong>Persiapan Berkarir di dunia Developer</strong></h5>
				<br>
				<img src="{{ asset('assets/images/admin/berita.png') }}" width="100%">
				<br><br>
				<p>
					Persiapan Berkarir di dunia Developer #PBDD diselenggarakan pada Rabu, (17/5) dengan tajuk The World of Programmer. Kegiatan PBDD kali ini bersama seorang Human Capital & Career Consultant, Hasna Askiyaah, M.Psi., Psikolog. yang merupakan alumnus dari Fakultas Psikologi Universitas A. Rangkaian acara ini dilaksanakan secara bauran di Ruang Multimedia 1, Gedung Pusat Universitas A dan melalui Zoom Meeting dengan total 112 peserta.
					<br><br>
					Penyampaian materi pada sesi kali ini membahas tuntas mengenai proses bekerja di dunia developer Hasna menyampaikan dalam bekerja sebagai developer, karyawan harus memahami bagaimana logika pemrograman bekerja, berkomunikasi, bekerja dalam tekanan, bekerja secara tim, dan terus belajar untuk meningkatkan ilmu baru. Hasna berpesan kepada semua peserta untuk terus terus mencoba dan mengumpulkan pengalaman sebanyak-banyaknya sebagai bekal yang akan tertuang dalam cv ketika melamar bekerja nantinya.
					<br><br>
					Dari sesi kali ini, harapannya mahasiswa tingkat akhir dan alumni fresh graduate mampu mempersiapkan diri melewati berbagai tahapan seleksi di dunia profesional terutama dalam dunia developer.
				</p>
				<br>
			</a>
		</div>
		<br>
	</div>
</div>

@endsection
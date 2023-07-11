@extends('pages.login.layout')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('asked-login')[4].classList.add('pertanyaan-login-active')
</script>
<div class="border border-secondary rounded text-center d-flex align-items-center overflow-hidden">
	<div class="py-2 bg-success-1 me-2" style="width: 80%; top: 0; height: 30px"></div>
	80%
</div>
<br>
<div class="border border-secondary rounded position-relative overflow-hidden p-md-3 p-2">
	<h5 class="text-primary-1 my-0"><strong>Kepuasan Alumni</strong></h5>
	<div class="mt-4 form-group">
		<label><strong>Nama</strong></label>
		<input type="text" name="nama" class="form-control mt-2" required="" placeholder="Tulis nama kamu disini">
	</div>
	<div class="mt-3 form-group">
		<label><strong>Nomor Induk Mahasiswa (NIM)</strong></label>
		<input type="text" name="nim" class="form-control mt-2" required="" placeholder="Tulis NIM kamu disini">
	</div>
	<div class="mt-3 form-group">
		<label><strong>Program Studi</strong></label>
		<input type="text" name="prodi" class="form-control mt-2" required="" placeholder="Tulis program studi kamu disini">
	</div>
	<div class="mt-3 form-group">
		<label><strong>Tahun Lulus</strong></label>
		<input type="number" name="tahun_lulus" class="form-control mt-2" required="" placeholder="Masukkan tahun lulus kamu disini">
	</div>
	<div class="mt-3 form-group">
		<label><strong>Nomor Telepon (WA)</strong></label>
		<input type="number" name="wa" class="form-control mt-2" required="" placeholder="Masukkan nomor kamu disini">
	</div>
	<div class="mt-3 form-group">
		<label><strong>Alamat Email (Aktif)</strong></label>
		<input type="email" name="email" class="form-control mt-2" required="" placeholder="Masukkan email kamu disini">
	</div>
	<div class="mt-3 form-group">
		<label><strong>NIK</strong></label>
		<input type="number" name="nik" class="form-control mt-2" required="" placeholder="Tulis NIK kamu disini">
	</div>
	<div class="mt-3 form-group text-end">
		<button name="page-5" class="btn bg-warning-1"><strong>Submit</strong></button>
	</div>
</div>
@endsection
@extends('pages.landingpage.theme.layout')
@section('title', 'Legalisasi Online')
@section('content')
<script type="text/javascript">
	document.getElementsByClassName('nav-link')[2].classList.add('active')
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legalisasi.min.css') }}">
<div class="container my-5">
	<a href="{{ route('home') }}" class="text-decoration-none text-dark"> Beranda</a> <i class="fas fa-chevron-right mx-3"></i> <a href="{{ route('legalisasi') }}" class="text-decoration-none text-dark"> Legalisasi Ijazah & Transkip Nilai (Online)</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>Pengajuan Legalisasi</strong></span>
	<div class="mt-4">
		<form method="post">
			@csrf
			<div>
				<legend class="mb-2"><strong>Data Diri Alumni</strong></legend>
				<div class="d-md-flex align-items-center">
					<label class="col-md-2"><strong>Nama</strong></label>
					<div class="col-md-7">
						<input type="text" name="nama" class="form-control" placeholder="Adita Lipta Ditia">
					</div>
				</div>
				<div class="d-md-flex align-items-center mt-3">
					<label class="col-md-2"><strong>Jurusan</strong></label>
					<div class="col-md-7">
						<input type="text" name="jurusan" class="form-control" placeholder="Komunikasi">
					</div>
				</div>
				<div class="d-md-flex align-items-center mt-3">
					<label class="col-md-2"><strong>Tahun lulus</strong></label>
					<div class="col-md-7">
						<input type="number" name="tahun_lulus" class="form-control" placeholder="2020">
					</div>
				</div>
				<div class="d-md-flex align-items-center mt-3">
					<label class="col-md-2"><strong>Alamat Email</strong></label>
					<div class="col-md-7">
						<input type="email" name="email" class="form-control" placeholder="adita@gmail.com">
					</div>
				</div>
			</div>
			<div class="mt-md-5 mt-3">
				<legend class="mb-2"><strong>Detail Pemesanan</strong></legend>
				<div class="row">
					<label class="col-md-2"><strong>Unggah Berkas <em class="text-danger">*</em></strong></label>
					<div class="col-md-7">
						<label class="w-100">
							<input id="berkas" required="" type="file" name="berkas" class="form-control" placeholder="Adita Lipta Ditia">
							<!-- <input id="setname" required="" type="text" disabled="" placeholder="Pilih Berkas" class="form-control bg-white text-secondary"> -->
						</label>
						<small class="text-secondary">Maksimal upload 2MB format PDF dengan dimensi kertas A4</small>
					</div>
					<div class="col-md-3">
						<label for="berkas">
							<div class="btn bg-purple text-white">
								<i class="fas fa-upload me-3"></i>Cari file
							</div>
						</label>
					</div>
				</div>
				<div class="d-md-flex align-items-center mt-3">
					<label class="col-md-2"><strong>Jenis Berkas <em class="text-danger">*</em></strong></label>
					<div class="col-md-7 position-relative">
						<select class="form-control text-secondary" name="jenis_berkas">
							<option class="py-2" selected="" disabled="">Pilih Jenis Berkas</option>
							<option class="py-2" value="Ijazah">Ijazah</option>
							<option class="py-2" value="Transkrip Nilai">Transkrip Nilai</option>
						</select>
						<i class="fas fa-caret-down text-secondary position-absolute" style="top: 50%; transform: translateY(-50%); right: 10px"></i>
					</div>
				</div>
				<div class="d-md-flex align-items-center mt-3">
					<label class="col-md-2"><strong>Bahasa <em class="text-danger">*</em></strong></label>
					<div class="col-md-7 position-relative">
						<select class="form-control text-secondary" name="bahasa">
							<option class="py-2" selected="" disabled="">Pilih Bahasa</option>
							<option class="py-2" value="Indonesia">Indonesia</option>
							<option class="py-2" value="Inggris">Inggris</option>
						</select>
						<i class="fas fa-caret-down text-secondary position-absolute" style="top: 50%; transform: translateY(-50%); right: 10px"></i>
					</div>
				</div>
				<div class="d-md-flex align-items-center mt-3">
					<label class="col-md-2"><strong>Jumlah <em class="text-danger">*</em></strong></label>
					<div class="col-md-7 position-relative">
						<select class="form-control text-secondary" name="jumlah">
							<option class="py-2" selected="" disabled="">Pilih Jumlah</option>
							<option class="py-2" value="1">1</option>
							<option class="py-2" value="2">2</option>
							<option class="py-2" value="3">3</option>
						</select>
						<i class="fas fa-caret-down text-secondary position-absolute" style="top: 50%; transform: translateY(-50%); right: 10px"></i>
					</div>
				</div>
				<div class="d-md-flex align-items-center mt-3">
					<label class="col-md-2"><strong>Pengambilan Berkas <em class="text-danger">*</em></strong></label>
					<div class="col-md-7 position-relative d-flex align-items-center">
						<label class="d-flex align-items-center">
							<input checked class="d-none" type="radio" name="pengambilan" value="Ambil di kampus">
							<div class="p-2 me-2 rounded-circle border border-secondary"></div>
							Ambil di kampus
						</label>
						<label class="d-flex align-items-center">
							<input class="d-none" type="radio" name="pengambilan" value="Dikirim">
							<div class="p-2 me-2 ms-2 rounded-circle border border-secondary"></div>
							Dikirim
						</label>
					</div>
				</div>
				<div class="d-none" id="setDikirim">
					<div class="d-md-flex mt-3">
						<label class="col-md-2"><strong>Alamat Pengiriman <em class="text-danger">*</em></strong></label>
						<div class="col-md-7 position-relative">
							<textarea placeholder="Tulis Alamat Tujuan disini" class="form-control" name="alamat" rows="7"></textarea>
						</div>
					</div>
					<div class="d-md-flex mt-3">
						<label class="col-md-2"><strong>Kode pos <em class="text-danger">*</em></strong></label>
						<div class="col-md-7 position-relative">
							<input placeholder="Tulis Kode Pos disini" class="form-control" name="kodepos" type="number">
						</div>
					</div>
				</div>
				<div class="text-end col-md-9 mt-3">
					<button name="submit" type="submit" class="btn bg-purple text-white">Pesan Legalisasi</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	let getfile = document.getElementById('berkas');

    getfile.addEventListener('change', function () {
        $('#setname').val(this.files[0].name)
    })

    var pengambilan = $('input[name="pengambilan"]')
    pengambilan.on('change', function(e){
    	if(e.target.value == 'Ambil di kampus'){
    		$('#setDikirim').addClass('d-none')
    		$('textarea[name="alamat"]').removeAttr('required', 'required')
    	} else if(e.target.value == 'Dikirim'){
    		$('#setDikirim').removeClass('d-none')
    		$('textarea[name="alamat"]').attr('required', 'required')
    	}
    })

</script>
@endsection
@extends('pages.landingpage.theme.layout')
@section('title', 'Legalisasi Online')
@section('content')
<script type="text/javascript">
	document.getElementsByClassName('nav-link')[2].classList.add('active')
</script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/legalisasi.min.css') }}">
<div class="container my-5">
	<a href="#" class="text-decoration-none text-dark"> Pengajuan Legalisasi</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>Konfirmasi pemesanan & Pembayaran</strong></span>

	<div class="mt-4">
		<div class="border border-secondary borderradius-10">
			<div class="d-md-flex align-items-center mx-md-3 py-3">
				<div class="text-md-start text-center col-md-8">
					<h5 class="my-0"><strong>Pengajuan Legalisasi Jarak Jauh</strong></h5>
				</div>
				<div class="text-md-end text-center col-md-4 mt-md-0 mt-3">
					<a href="{{ route('pengajuan.legalisasi.tambah') }}" class="btn bg-purple text-white" class="my-0"><strong>Tambah pemesanan</strong></a>
				</div>
			</div>
			<hr class="my-0">
			<div class="mx-md-3 my-3 py-2 px-3 mx-2 table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Jenis Dokumen</th>
							<th>Berkas</th>
							<th>Bahasa</th>
							<th>Pengambilan</th>
							<th>Jumlah</th>
							<th>Harga</th>
							<th>Konfirmasi Pembayaran</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 1 @endphp
						@foreach($data as $value)
							<tr class="text-secondary">
								<td>{{ $no++ }}</td>
								<td>{{ $value['nama'] }}</td>
								<td>{{ $value['jenis'] }}</td>
								<td>{{ $value['berkas'] }}</td>
								<td>{{ $value['bahasa'] }}</td>
								<td>{{ $value['pengambilan'] }}</td>
								<td>{{ $value['jumlah'] }}</td>
								<td style="color: #008000">
									<strong>
									@if($value['pengambilan'] == 'Dikirim')
										Rp.15.000,00
									@else
										Rp.0,00
									@endif
									</strong>
								</td>
								<td style="color: #008000">
									
								</td>
							</tr>
						@endforeach
						@if($pengambilan == 'Dikirim')
							<tr>
								<td colspan="6"></td>
								<td><strong><small>Ongkos Kirim</small></strong></td>
								<td style="color: #008000">
									<strong>
										Rp.20.000,00
									</strong>
								</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="6"></td>
								<td><strong><small>TOTAL</small></strong></td>
								<td style="color: #008000">
									<strong>
										@if($count == 1)
											Rp.35.000,00
										@else
											Rp.50.000,00
										@endif
									</strong>
								</td>
								<td>
									<label>
										<input type="file" name="bukti" class="d-none">
										<div class="bg-warning-1 btn">Unggah bukti pembayaran</div>
									</label>
								</td>
							</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>
		<br>
		<div class="text-md-end text-center col-md-4 mt-md-0 mt-3 w-100">
			<a id="openModalBtn" class="btn bg-purple text-white px-5" class="my-0"><strong>Kirim</strong></a>
		</div>
	</div>
</div>
<div id="myModal" class="mymodal">
  	<div class="mymodal-content bounceIn text-center">
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}">
    	<h5><strong>Pengajuan Legalisasi Sedang di Proses</strong></h5>
    	<p>
    		Pengajuan legalisasi sedang di proses, untuk tahap selanjutnya<br>
    		kami akan memberikan konfirmasi melalui alamat<br>
    		Email alumni, Terimakasih.
    	</p>
  	</div>
</div>
<script type="text/javascript" src="{{ asset('assets/js/legalisasi.min.js') }}"></script>
@endsection
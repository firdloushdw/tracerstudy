@extends('pages.landingpage.theme.layout')
@section('title', 'Legalisasi Online')
@section('content')
<script type="text/javascript">
	document.getElementsByClassName('nav-link')[2].classList.add('active')
</script>

<div class="container my-5">
	<a href="{{ route('home') }}" class="text-decoration-none text-dark"> Beranda</a> <i class="fas fa-chevron-right mx-3"></i> <span class="text-primary-1"><strong>Legalisasi Ijazah & Transkip Nilai (Online)</strong></span>
	<div class="mt-4">
		<h5 class="mb-2"><strong>Informasi terkait pemesanan legalisasi ijazah dan transkrip nilai (online)</strong></h5>
		<br>
		<div class="info-legalisasi py-md-4 py-3 ps-2 pe-4" style="text-align: justify;">
			<ol class="my-0">
				<li>saat ini biaya legalisasi yang berlaku adalah Rp. 5.000.00/lembar </li>
				<li>File Ijazah dan Transkrip Nilai yang diunggah harus berformat PDF dengan dimensi ukuran kertas A4</li>
				<li>Pemesanan melalui pesan singkat/telepon tidak akan di proses</li>
				<li>Pembayaran dilakukan secara transfer ke rekening 988892348463 a.n Universitas A Penerimaan Pelayanan </li>
				<li>Pemrosesan Legalisasi Ijazah dan Transkrip Nilai dilakukan sesuai dengan urutan yang terekam dalam sistem kami</li>
				<li>Jika file legalisasi akan dilakukan pengiriman ke beberapa alamat tujuan, anda akan dibebani biaya pengiriman untuk masing-masing alamat tujuan</li>
				<li>Kami tidak bertanggung jawab terhadap hilangnya dokumen dalam perjalanan</li>
			</ol>
		</div>
	</div>
	<div class="mt-4">
		<div class="border border-secondary borderradius-10">
			<div class="d-md-flex align-items-center mx-md-3 py-3">
				<div class="text-md-start text-center col-md-8">
					<h5 class="my-0"><strong>Pengajuan legalisasi jarak jauh</strong></h5>
				</div>
				<div class="text-md-end text-center col-md-4 mt-md-0 mt-3">
					<a href="{{ route('pengajuan.legalisasi') }}" class="btn bg-purple text-white" class="my-0"><strong>Ajukan legalisasi</strong></a>
				</div>
			</div>
			<hr class="my-0">
			@if($data == '')
			<div class="mx-md-3 my-3 error-legalisasi py-2 px-3 mx-2">
				<div class="text-md-start text-center">
					<h6 class="my-0">Mohon maaf, kamu belum mengajukan Legalisasi apapun</h6>
				</div>
			</div>
			@else
			<div class="mx-md-1 my-3 my-md-1 py-2 px-3 mx-2 table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Jenis Dokumen</th>
							<th>Pengambilan</th>
							<th>Jumlah</th>
							<th>Harga</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@php $no = 1 @endphp
						@foreach($data as $value)
						<tr class="text-secondary">
							<td>{{ $no++ }}</td>
							<td>{{ $value['nama'] }}</td>
							<td>{{ $value['jenis'] }}</td>
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
									<div class="bg-warning-1 btn"><strong>Berkas dalam proses Legalisasi</strong></div><br>
									<small class="text-secondary">Pengajuan Legalisasi Online berlangsung selama 2 - 3 hari kerja,<br>tergantung dengan urutan yang terekam dalam sistem</small>
								</label>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@endif
		</div>
	</div>
</div>

@endsection
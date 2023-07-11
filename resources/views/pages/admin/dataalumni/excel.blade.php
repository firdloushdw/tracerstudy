<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rekap Data Alumni</title>
	<style type="text/css">
		table tr td, table tr th{
			border: 1px solid black;
			padding: 0 10px;
		}
	</style>
</head>
<body>
	@php 
		header("Content-Type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Rekap Data Alumni.xls");
	@endphp
			<table class="table table-bordered table-hovered text-center" id="datatable">
				<thead>
					<tr>
						<th style="background-color: #0B3BA1; color: white">No</th>
						<th style="background-color: #0B3BA1; color: white">NIM</th>
						<th style="background-color: #0B3BA1; color: white">Nama</th>
						<th style="background-color: #0B3BA1; color: white">Universitas</th>
						<th style="background-color: #0B3BA1; color: white">Jurusan</th>
						<th style="background-color: #0B3BA1; color: white">Tahun Lulus</th>
						<th style="background-color: #0B3BA1; color: white">Email</th>
						<th style="background-color: #0B3BA1; color: white">Telepon</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td ><small>1</small></td>
						<td ><small>1902345</small></td>
						<td ><small>Adita Lipta Ditia</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>adita@gmail.com</small></td>
						<td ><small>081254838329</small></td>
					</tr>
					<tr>
						<td ><small>2</small></td>
						<td ><small>1903467</small></td>
						<td ><small>Ahmad Dzikri</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>Dzkr@gmail.com</small></td>
						<td ><small>081254838330</small></td>
					</tr>
					<tr>
						<td ><small>3</small></td>
						<td ><small>1903456</small></td>
						<td ><small>Alfian Denanda</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>Denan@gmail.com</small></td>
						<td ><small>081254838338</small></td>
					</tr>
					<tr>
						<td ><small>4</small></td>
						<td ><small>1904687</small></td>
						<td ><small>Andian Putri</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>Andian@gmail.com</small></td>
						<td ><small>081254838337</small></td>
					</tr>
					<tr>
						<td ><small>5</small></td>
						<td ><small>1903456</small></td>
						<td ><small>Septia Ariani</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>Septi@gmail.com</small></td>
						<td ><small>081254838336</small></td>
					</tr>
					<tr>
						<td ><small>6</small></td>
						<td ><small>1902345</small></td>
						<td ><small>Andian Putri</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>Anip@gmail.com</small></td>
						<td ><small>081254838335</small></td>
					</tr>
					<tr>
						<td ><small>7</small></td>
						<td ><small>1904687</small></td>
						<td ><small>Dika Firmansyah</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>Diki@gmail.com</small></td>
						<td ><small>081254838334</small></td>
					</tr>
					<tr>
						<td ><small>8</small></td>
						<td ><small>1904687</small></td>
						<td ><small>Septia Ariani</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>Septi@gmail.com</small></td>
						<td ><small>081254838333</small></td>
					</tr>
					<tr>
						<td ><small>9</small></td>
						<td ><small>1903456</small></td>
						<td ><small>Andian Putri</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2019</small></td>
						<td ><small>Andip@gmail.com</small></td>
						<td ><small>081254838332</small></td>
					</tr>
					<tr>
						<td ><small>10</small></td>
						<td ><small>1904687</small></td>
						<td ><small>Firmansyah</small></td>
						<td ><small>Universitas A</small></td>
						<td ><small>Komunikasi</small></td>
						<td ><small>2023</small></td>
						<td ><small>Diki@gmail.com</small></td>
						<td ><small>081254838331</small></td>
					</tr>
				</tbody>
			</table>
</body>
</html>
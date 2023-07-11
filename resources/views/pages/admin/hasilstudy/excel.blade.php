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
		header("Content-Disposition: attachment; filename=Tracer Hasil Study.xls");
	@endphp

	<table class="table table-bordered table-hovered text-center" id="datatable">
        <thead>
          <tr >
            <th style="background-color: #0B3BA1; color: white">No</th>
            <th style="background-color: #0B3BA1; color: white">NIM</th>
            <th style="background-color: #0B3BA1; color: white">Nama</th>
            <th style="background-color: #0B3BA1; color: white">Jurusan</th>
            <th style="background-color: #0B3BA1; color: white">Email</th>
            <th style="background-color: #0B3BA1; color: white">Telepon</th>
            <th style="background-color: #0B3BA1; color: white">Jabatan</th>
            <th style="background-color: #0B3BA1; color: white">Status</th>
            <th style="background-color: #0B3BA1; color: white">Gaji</th>
            <th style="background-color: #0B3BA1; color: white">Waktu Tunggu</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <tr class="bg-white">
            <td class="align-middle" ><small>1</small></td>
            <td class="align-middle" ><small>1902345</small></td>
            <td class="align-middle" ><small>Adita Lipta Ditia</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>adita@gmail.com</small></td>
            <td class="align-middle" ><small>081254838329</small></td>
            <td class="align-middle"><small>Fullstack Dev</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>6.500.000</small></td>
            <td class="align-middle"><small>9 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>2</small></td>
            <td class="align-middle" ><small>1903467</small></td>
            <td class="align-middle" ><small>Ahmad Dzikri</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Dzkr@gmail.com</small></td>
            <td class="align-middle" ><small>081254838330</small></td>
            <td class="align-middle"><small>Wiraswasta</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>5.000.000</small></td>
            <td class="align-middle"><small>9 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>3</small></td>
            <td class="align-middle" ><small>1903456</small></td>
            <td class="align-middle" ><small>Alfian Denanda</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Denan@gmail.com</small></td>
            <td class="align-middle" ><small>081254838338</small></td>
            <td class="align-middle"><small>Karwayan Swasta</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>3.500.000</small></td>
            <td class="align-middle"><small>8 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>4</small></td>
            <td class="align-middle" ><small>1904687</small></td>
            <td class="align-middle" ><small>Andian Putri</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Andian@gmail.com</small></td>
            <td class="align-middle" ><small>081254838337</small></td>
            <td class="align-middle"><small>Admin</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>6.500.000</small></td>
            <td class="align-middle"><small>12 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>5</small></td>
            <td class="align-middle" ><small>1903456</small></td>
            <td class="align-middle" ><small>Septia Ariani</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Septi@gmail.com</small></td>
            <td class="align-middle" ><small>081254838336</small></td>
            <td class="align-middle"><small>Product Dev</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>4.500.000</small></td>
            <td class="align-middle"><small>8 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>6</small></td>
            <td class="align-middle" ><small>1902345</small></td>
            <td class="align-middle" ><small>Andian Putri</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Anip@gmail.com</small></td>
            <td class="align-middle" ><small>081254838335</small></td>
            <td class="align-middle"><small>Admin</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>4.500.000</small></td>
            <td class="align-middle"><small>8 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>7</small></td>
            <td class="align-middle" ><small>1904687</small></td>
            <td class="align-middle" ><small>Dika Firmansyah</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Diki@gmail.com</small></td>
            <td class="align-middle" ><small>081254838334</small></td>
            <td class="align-middle"><small>Notaris</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>3.500.000</small></td>
            <td class="align-middle"><small>7 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>8</small></td>
            <td class="align-middle" ><small>1904687</small></td>
            <td class="align-middle" ><small>Septia Ariani</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Septi@gmail.com</small></td>
            <td class="align-middle" ><small>081254838333</small></td>
            <td class="align-middle"><small>Fullstack Dev</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>3.500.000</small></td>
            <td class="align-middle"><small>7 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>9</small></td>
            <td class="align-middle" ><small>1903456</small></td>
            <td class="align-middle" ><small>Andian Putri</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Andip@gmail.com</small></td>
            <td class="align-middle" ><small>081254838332</small></td>
            <td class="align-middle"><small>Wiraswasta</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>5.500.000</small></td>
            <td class="align-middle"><small>8 Bulan</small></td>
          </tr>
          <tr class="bg-white">
            <td class="align-middle" ><small>10</small></td>
            <td class="align-middle" ><small>1904687</small></td>
            <td class="align-middle" ><small>Firmansyah</small></td>
            <td class="align-middle" ><small>Komunikasi</small></td>
            <td class="align-middle" ><small>Diki@gmail.com</small></td>
            <td class="align-middle" ><small>081254838331</small></td>
            <td class="align-middle"><small>Guru</small></td>
            <td class="align-middle"><small>Bekerja</small></td>
            <td class="align-middle"><small>2.500.000</small></td>
            <td class="align-middle"><small>1 Bulan</small></td>
          </tr>
        </tbody>
    </table>
</body>
</html>
@extends('pages.admin.layout')
@section('title', 'Hasil Tracer Study')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[7].classList.add('active')
</script>
<style type="text/css">
  select option:checked{ background-color: #EAF2F4; color: #000; }
  #datatable_filter{
    margin-bottom: 15px
  }
  #datatable_filter input{
    background-color: white
  }
  #datatable_length select{
    background-color: white
  }
  #datatable_paginate{
    margin-bottom: 20px;
    margin-top: 15px;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script>
<div class="container my-3">
	<legend><strong>Hasil Tracer Study</strong></legend>
  <span>Seluruh hasil pengisian kuesioner Tracer Study akan terekam disini.</span>
  <br><br>
	<div class="p-4 bg-white borderradius-10">
    <div class="d-md-flex align-items-center">
      <h5 class="my-0 me-4"><strong>Hasil Grafik</strong></h5>
      <div class="col-md-3 my-2 position-relative">
        <select class="form-control">
          <option disabled="" selected="">Tahun</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
        </select>
        <i class="fas fa-caret-down position-absolute" style="top: 50%; transform: translateY(-50%); right: 20px"></i>
      </div>
      <div class="col-md-3 my-2 position-relative ms-md-3">
        <select class="form-control">
          <option disabled="" selected="">Jurusan</option>
          <option>Komunikasi</option>
          <option>Management</option>
          <option>Matematika</option>
        </select>
        <i class="fas fa-caret-down position-absolute" style="top: 50%; transform: translateY(-50%); right: 20px"></i>
      </div>
    </div>
		<div id="carouselExampleIndicators" class="carousel slide" style="margin-top: -40px">
      <div class="carousel-indicators">
        <button style="width: 12px; height: 12px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="bg-secondary rounded-circle active" aria-current="true" aria-label="Slide 1"></button>
        <button style="width: 12px; height: 12px;" class="bg-secondary rounded-circle" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button style="width: 12px; height: 12px;" class="bg-secondary rounded-circle" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row align-items-center p-4 my-4">
            <div class="col-md-6 my-2">
              <img src="{{ asset('assets/images/admin/Chart kategori gaji.png') }}" class="d-block " alt="{{ asset('assets/images/admin/Chart kategori gaji') }}" width="100%">
            </div>
            <div class="col-md-6 my-2">
              <img src="{{ asset('assets/images/admin/pie kategori gaji.png') }}" class="d-block " alt="{{ asset('assets/images/admin/pie kategori gaji.png') }}" width="90%">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row align-items-center p-4 my-4">
            <div class="col-md-6 my-2">
              <img src="{{ asset('assets/images/admin/Chart kategori lama bekerja.png') }}" class="d-block " alt="{{ asset('assets/images/admin/Chart kategori lama bekerja.png') }}" width="100%">
            </div>
            <div class="col-md-6 my-2">
              <img src="{{ asset('assets/images/admin/pie kategori lama bekerja.png') }}" class="d-block " alt="{{ asset('assets/images/admin/pie kategori lama bekerja.png') }}" width="100%">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row align-items-center p-4 my-4">
            <div class="col-md-6 my-2">
              <img src="{{ asset('assets/images/admin/Chart kategori pekerjaan.png') }}" class="d-block " alt="{{ asset('assets/images/admin/Chart kategori pekerjaan.png') }}" width="100%">
            </div>
            <div class="col-md-6 my-2">
              <img src="{{ asset('assets/images/admin/pie kategori pekerjaan.png') }}" class="d-block " alt="{{ asset('assets/images/admin/pie kategori pekerjaan.png') }}" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
  <br>
  <div class="text-start w-100">
    <a href="javascript:;" onclick="excel()" class="btn bg-white" id="tambahlowongan"><strong><i class="fas fa-download me-2"></i>Excel</strong></a>
    <a href="javascript:;" onclick="pdf()" class="btn bg-white" id="tambahlowongan"><strong><i class="fas fa-download me-2"></i>PDF</strong></a>
  </div>
  <br>
  <div>
    <div class="table-responsive">
      <table class="table table-bordered table-hovered text-center" id="datatable">
        <thead>
          <tr class="bg-primary-1 text-white">
            <th class="align-middle">No</th>
            <th class="align-middle">NIM</th>
            <th class="align-middle">Nama</th>
            <th class="align-middle">Jurusan</th>
            <th class="align-middle">Email</th>
            <th class="align-middle">Telepon</th>
            <th class="align-middle">Jabatan</th>
            <th class="align-middle">Status</th>
            <th class="align-middle">Gaji</th>
            <th class="align-middle">Waktu Tunggu</th>
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
    </div>
  </div>
</div>
<div id="confirmexcel" class="mymodal">
    <div class="mymodal-content bounceIn text-center" style="max-width: 400px">
      <h5><strong>File akan tersimpan dalam bentuk Excel. Lanjutkan unduh data?</strong></h5>
      <div class="text-center">
        <button class="btn btn-danger mx-1 px-4" onclick="closeadd()">Tidak</button>
        <a href="{{ route('admin.tracerstudy.excel') }}" target="__blank" class="btn mx-1 px-4" style="background-color: #85E0A3">Lanjutkan</a>
      </div>
    </div>
</div>
<div id="confirmpdf" class="mymodal">
    <div class="mymodal-content bounceIn text-center" style="max-width: 400px">
      <h5><strong>File akan tersimpan dalam bentuk PDF. Lanjutkan unduh data?</strong></h5>
      <div class="text-center">
        <button class="btn btn-danger mx-1 px-4" onclick="closeadd()">Tidak</button>
        <a onclick="prosess()" href="{{ route('admin.tracerstudy.pdf') }}" target="__blank" class="btn mx-1 px-4" style="background-color: #85E0A3">Lanjutkan</a>
      </div>
    </div>
</div>


<div id="prosesberhasil" class="mymodal">
    <div class="mymodal-content bounceIn text-center" style="max-width: 400px">
      <h5><strong>Data Telah Berhasil Tersimpan</strong></h5>
      <img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
    </div>
</div>
<script type="text/javascript">
  $('#datatable').dataTable()
</script>
<script type="text/javascript">
  var confirmexcel = document.getElementById("confirmexcel")
  function excel() {
      confirmexcel.style.display = "block";
      confirmexcel.classList.add("bounceIn");
  };
  var confirmpdf = document.getElementById("confirmpdf");
  function pdf() {
      confirmpdf.style.display = "block";
      confirmpdf.classList.add("bounceIn");
  };
  var prosesberhasil = document.getElementById("prosesberhasil");
  function prosess() {
    closeadd()
      prosesberhasil.style.display = "block";
      prosesberhasil.classList.add("bounceIn");
      setTimeout(function() {
          prosesberhasil.style.display = "none";
          prosesberhasil.classList.remove("bounceIn");
      }, 5000);
  };
  function closeadd(){
        confirmexcel.style.display = "none";
        confirmexcel.classList.remove("bounceIn");
        confirmpdf.style.display = "none";
        confirmpdf.classList.remove("bounceIn");
  }
</script>
@endsection
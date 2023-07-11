@extends('pages.admin.layout')
@section('title', 'Pengaturan')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[4].classList.add('active')
</script>
<div class="mx-md-5 mx-3">
	<legend><strong>Pengaturan</strong></legend>
	<span>Halo Admin,<br>Tracer Study!</span>
	<br>
	<br>
	<div>
		<div class="row">
			<div class="col-md-8">
				<div class="bg-white borderradius-10 border border-1 border-secondary p-4" style="text-align: justify;">
					<form method="post">
						@csrf
						<h5 class="mt-2 mb-1"><strong>Account</strong></h5>
						<div class="form-group mt-2">
							<label>Username</label>
							<input type="text" name="username" class="form-control bg-white" required="" placeholder="admintracerstudy" value="admintracerstudy" readonly="">
						</div>
						<h5 class="mt-4 mb-1"><strong>Password</strong></h5>
						<div class="form-group mt-2">
							<label>Kata Sandi</label>
							<input type="password" name="username" class="form-control bg-white" required="" placeholder="*****" value="admin123" readonly="">
						</div>
						<div class="text-end w-100" id="coverall">
							<br>
							<a href="javascript:;" id="showall" class="text-end">Ubah kata sandi</a>
						</div>
						<div class="d-none" id="openall">
							<div class="form-group mt-2">
								<label>Kata Sandi Baru</label>
								<input type="password" name="username" class="form-control bg-white" required="" placeholder="adminTS2023">
							</div>
							<div class="form-group mt-2">
								<label>Konfirmasi Kata Sandi</label>
								<input type="password" name="username" class="form-control bg-white" required="" placeholder="adminTS2023">
							</div>
							<div class="text-end mt-3">
								<button class="btn" style="background-color: #FFCB42">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<div class="" style="background-color: #FFD6C3">
					<div class="py-2 px-3 rounded" style="color: #FF2323;background-color: #FBB3B3">
						<img class="me-2" src="{{ asset('assets/images/admin/emergency_home.png') }}"><strong>INFORMASI</strong>
					</div>
					<div class="px-3 py-3" style="text-align: justify;">
						<small>
							Mengubah Password akun Tracer Study  
							pada admin hanya dapat dilakukan 3 kali, jika lebih dari itu silahkan hubungi pihak staff IT untuk melakukan pemulihan akun.<br>Terimakasih. 
						</small>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
</div>
<div id="gantipasswordberhasil" class="mymodal">
  	<div class="mymodal-content bounceIn text-center" style="max-width: 400px">
    	<h5><strong>Kata Sandi Berhasil Diubah</strong></h5>
  		<img src="{{ asset('assets/images/legalisasi/success.png') }}" class="mb-2"><br>
  	</div>
</div>
@if(Session::has('gantipasswordberhasil'))
<?=
	'<script type="text/javascript">
		var gantipasswordberhasil = document.getElementById("gantipasswordberhasil");
		gantipasswordberhasil.style.display = "block";
	  	gantipasswordberhasil.classList.add("bounceIn");
	  	setTimeout(function() {
	      	gantipasswordberhasil.style.display = "none";
	      	gantipasswordberhasil.classList.remove("bounceIn");
	    }, 3000);
	</script>'
?>
@endif
<script type="text/javascript">
	$('#showall').on('click', function(){
		$('input').removeAttr('readonly')
		$('#coverall').addClass('d-none')
		$('#openall').removeClass('d-none')
	})
</script>
@endsection
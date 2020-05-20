<!DOCTYPE html>
<html>
<head>
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
	<title>@yield('master-judul')</title>
	<style>
		.active{
			background-color: #007ea8;
		}
		.navbar-nav{
			font-family: Open Sans;
			font-size: 1rem;
		}
		.navbar-dark .navbar-nav .nav-link {
		    color: white !important;
		    font-size: 1rem;
		}
		.navbar-nav .nav-item:hover {
		    background-color: #007ea8;
		}
		.footertext{
			font-family: Tahoma;
			font-size: 22pt;
			font-weight: 600;
		}
		.textinfo{
			font-family: Open Sans;
			font-size: 1rem;
		}
		.shadow {
			box-shadow: 0px 10px 6px 1px rgba(0, 0, 0, 0.1), 0px 10px 5px 0px rgba(0, 0, 0, 0), 0px 1px 5px 12px rgba(0, 0, 0, 0);
		}
		body{
			font-size: 1rem;
		}
		
		@yield('master-addstyle')
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('font/trajanfont.css')}}">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	@yield('master-headlink')
</head>
<body>
	<div class="container-fluid p-0 m-0">
		<div class="row align-items-center mb-2 mx-0">
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 text-center p-5">
				<a href="{{url('/')}}"><img class="img-fluid" src="{{asset('/img/logo-web.png')}}"></a>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-3 offset-xl-5 text-center">
				<form class="form-inline">
					<input class="form-control" type="search" placeholder="Search" style="width: 80%">
				</form>
			</div>
		</div>
	<div class="row m-0 p-0">
	<nav class="navbar navbar-expand-lg navbar-dark py-0 px-0 m-0" style="background-color: #2c4d86; width: 100%;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container-fluid px-0" style="max-width: 100%;">
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mx-auto">
		      <li class="nav-item px-2 py-3 home">
		        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item dropdown px-2 py-3 tentang">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Tentang PKM
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item sejarah" href="{{url('/sejarah-pkm')}}">Sejarah PKM</a>
		          <a class="dropdown-item tujuan" href="{{url('/tujuan-pkm')}}">Tujuan PKM</a>
		          <a class="dropdown-item karakteristik" href="{{url('/karakteristik-umum')}}">Karakteristik Umum</a>
		        </div>
		      </li>
		      <li class="nav-item px-2 py-3 kriteria">
		        <a class="nav-link" href="{{url('/kriteria-bidang')}}">Kriteria Bidang PKM</a>
		      </li>
		      <li class="nav-item px-2 py-3 tatacara">
		        <a class="nav-link " href="{{url('/tata-cara')}}">Tata Cara Penulisan</a>
		      </li>
		      <li class="nav-item px-2 py-3 aspek">
		        <a class="nav-link " href="{{url('/aspek-penilaian')}}">Aspek Penilaian</a>
		      </li>
		      <li class="nav-item px-2 py-3 perbandingan">
		        <a class="nav-link " href="{{url('/perbedaan-bidang')}}">Perbandingan Bidang</a>
		      </li>
		      <li class="nav-item px-2 py-3 pengajuan">
		        <a class="nav-link " href="{{url('/tahap-pengajuan')}}">Tahap Pengajuan</a>
		      </li>
		    </ul>
		  </div>
		</div>
	</nav>
	</div>
	</div>
	<div class="container-fluid p-0 m-0" >
	@yield('master-diataskonten')
	@yield('master-konten')
	</div>
	@yield('master-footer')
@yield('master-script')
</body>

</html>
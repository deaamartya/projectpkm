<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<style>
		.active{
			background-color: #007ea8;
		}
		.navbar-nav{
			font-family: Microsoft Sans Serif;
			font-size: 14pt;
		}
		.navbar-dark .navbar-nav .nav-link {
		    color: white !important;
		}
		.footertext{
			font-family: Tahoma;
			font-size: 22pt;
			font-weight: 600;
		}
		.textinfo{
			font-family: Microsoft Sans Serif;
			font-size: 10pt;
		}
		@yield('addstyle')
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('font/trajanfont.css')}}">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://genap2020.elearning.unair.ac.id/theme/mb2cg/assets/font-awesome/css/font-awesome.min.css">
	@yield('headlink')
</head>
<body>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-5 col-sm-5">
				<a class="px-2" href="{{url('/home')}}"><img class="img-fluid" src="{{asset('/img/logo-unair.png')}}" width="90%" style="max-height: 140px; max-width: 420px;"></a>
			</div>
			<div class="col-sm-12 col-md-3 col-sm-3 offset-md-3">
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search">
				</form>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark py-0 px-0" style="background-color: #2c4d86; width: 100%;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container px-0" style="max-width: 100%;">
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mx-auto">
		      <li class="nav-item active px-2 py-3 home">
		        <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item px-2 py-3 sejarah">
		        <a class="nav-link" href="{{url('/sejarah-pkm')}}">Sejarah PKM</a>
		      </li>
		      <li class="nav-item px-2 py-3 tujuan">
		        <a class="nav-link " href="{{url('/tujuan-pkm')}}">Tujuan PKM</a>
		      </li>
		      <li class="nav-item px-2 py-3 karakteristik">
		        <a class="nav-link" href="{{url('/karakteristik-umum')}}">Karakteristik Umum</a>
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
		    </ul>
		  </div>
		</div>
	</nav>
	@yield('diataskonten')
	<div class="container" style="max-width: 100%;">
		@yield('konten')
	</div>
	@yield('footer')
</body>
@yield('script')
</html>
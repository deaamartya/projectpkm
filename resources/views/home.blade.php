@extends('komponen/master')

@section('master-headlink')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('master-konten')

<!-- Masukin kontennya disini. -->
<div class="container">
<div class="row">
<div class="col" style="text-align:center" >
<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top:50px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a class="m-1"  href="kriteria-bidang">
      <img src="/img/logo-unair.png" class="d-block w-100" alt="">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h1>PKM - P</h1>
    
      </div>
    </div>
    <div class="carousel-item">
    <a class="m-1"  href="kriteria-bidang">
      <img src="/img/logo-unair.png" class="d-block w-100" alt="...">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h1>PKM - K</h1>
      </div>
    </div>
    <div class="carousel-item">
    <a class="m-1"  href="kriteria-bidang">
      <img src="/img/logo-unair.png" class="d-block w-100" alt="...">
    </a>  
      <div class="carousel-caption d-none d-md-block">
        <h1>PKM - M</h1>
      </div>
    </div>
    <div class="carousel-item">
    <a class="m-1"  href="kriteria-bidang">
      <img src="/img/logo-unair.png" class="d-block w-100" alt="...">
      </a>
      <div class="carousel-caption d-none d-md-block">
        <h1>PKM - T</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>
<div class="container">

<div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel" style="margin-top:50px">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions1" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions1" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a class="m-1"  href="kriteria-bidang">
      <img src="/img/logo-unair.png" class="d-block w-100" alt="...">
    </a>
      <div class="carousel-caption d-none d-md-block">
        <h1>PKM - KC</h1>
      </div>
    </div>
    <div class="carousel-item">
    <a class="m-1"  href="kriteria-bidang">
      <img src="/img/logo-unair.png" class="d-block w-100" alt="...">
    </a>
      <div class="carousel-caption d-none d-md-block">
        <h1>PKM - AI</h1>
      </div>
    </div>
    <div class="carousel-item">
    <a class="m-1"  href="kriteria-bidang">
      <img src="/img/logo-unair.png" class="d-block w-100" alt="...">
    </a>
      <div class="carousel-caption d-none d-md-block">
        <h1>PKM - GT</h1>
      </div>
    </div>
    <div class="carousel-item">
    <a class="m-1"  href="kriteria-bidang">
      <img src="/img/logo-unair.png" class="d-block w-100" alt="...">
    </a>
      <div class="carousel-caption d-none d-md-block">
        <h1>PKM - GFK</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
  <div class="card shadow p-3 mb-5 bg-white rounded";>
    <div class="card-head" style="background-color: white;">
      <div class="container" style="font-size: 20pt; text-align:center;">
      <a class="m-1" style="display: inline-block;" >
        <i class="fas fa-id-badge" style="color: black"></i>
      </a>
          CONTACT US
          
      </div>
      
      <div class="card-body ";>
      @foreach($contact as $c)
      {{$c ->ORGANISASI}}
      <div class="container" style="font-size: 18pt;">
        <a class="m-1" style="display: inline-block;">
        <i class="fab fa-whatsapp-square" style="color : green"></i>
        </a>
        {{$c -> NOMER_TLP_1}}
      </div>
      <div class="container" style="font-size: 18pt;">
        <a class="m-1" style="display: inline-block;">
        <i class="fab fa-line" style="color : green"></i>
        </a>
        @yield('konten-line')
        
      </div>
      <div class="container" style="font-size: 18pt;">
        <a class="m-1" style="display: inline-block;">
        <i class="fas fa-envelope-open-text" style="color : orange"></i>
        </a>
        @yield('konten-email')
        
      </div>
      @endforeach
      </div>
    </div>
    </div>
  </div>

</div>
</div>
</div>
<div class="row">
<div class="col">

</div>
</div>
</div>
@endsection

@section('master-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".nav-item").bind("click", function(event) {
        var clickedItem = $(".home");
        $(".nav-item").each( function() {
            $(this).removeClass("active");
        });
        clickedItem.addClass("active");
    });
    
    $(".btn-submit").click(function(e){
        e.preventDefault();
        var name = $("input[name=name]").val();
        var phone = $("input[name=phone]").val();
        var email = $("input[name=email]").val();
        var message = $("textarea[name=message]").val();
        $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
        $.ajax({
           type:'POST',
           url:'/sendMail',
           data:{name:name, phone:phone, email:email,message:message},
           success:function(data){
              Swal.fire(
		        'Berhasil!',
		        "Pesan Anda berhasil dikirim!",
		        'success'
		      );
		      $('#sendmail').trigger("reset");
           }
        });
	});
});
</script>
@endsection

@section('master-footer')
@include('/komponen/footer-home')
@endsection
@extends('komponen/master')

@section('master-judul','Home')

@section('master-headlink')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('master-konten')

<!-- Masukin kontennya disini. -->

  <div class="row mb-5 p-2 justify-content-center m-0">
    <div class="col-xl-8" style="text-align:center" >
      <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top:50px">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a class="" href="kriteria-bidang">
              <img src="{{asset('/img/pkm-p.jpg')}}" class="d-block w-100" alt="">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h1>PKM - P</h1>
              <p>{{$penjelasan["PKM - P "]}}</p>
            </div>
          </div>
          <div class="carousel-item">
          <a class="" href="kriteria-bidang">
            <img src="{{asset('/img/pkm-k.jpg')}}" class="d-block w-100" alt="...">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h1>PKM - K</h1>
              <p>{{$penjelasan["PKM - K"]}}</p>
            </div>
          </div>
          <div class="carousel-item">
          <a class="" href="kriteria-bidang">
            <img src="{{asset('/img/pkm-m.jpg')}}" class="d-block w-100" alt="...">
          </a>  
            <div class="carousel-caption d-none d-md-block">
              <h1>PKM - M</h1>
              <p>{{$penjelasan["PKM - M"]}}</p>
            </div>
          </div>
          <div class="carousel-item">
          <a class="" href="kriteria-bidang">
            <img src="{{asset('/img/pkm-t.jpg')}}" class="d-block w-100" alt="...">
            </a>
            <div class="carousel-caption d-none d-md-block">
              <h1>PKM - T</h1><p>{{$penjelasan["PKM - T"]}}</p>
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
      <div class="row">
        <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel" style="margin-top:50px">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions1" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions1" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions1" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions1" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
            <a class=""  href="kriteria-bidang">
              <img src="{{asset('/img/pkm-kc.jpg')}}" class="d-block w-100" alt="...">
            </a>
              <div class="carousel-caption d-none d-md-block">
                <h1>PKM - KC</h1>
                <p>{{$penjelasan["PKM - KC"]}}</p>
              </div>
            </div>
            <div class="carousel-item">
            <a class=""  href="kriteria-bidang">
              <img src="{{asset('/img/pkm-ai.jpg')}}" class="d-block w-100" alt="...">
            </a>
              <div class="carousel-caption d-none d-md-block">
                <h1>PKM - AI</h1>
                <p>{{$penjelasan["PKM - AI"]}}</p>
              </div>
            </div>
            <div class="carousel-item">
            <a class=""  href="kriteria-bidang">
              <img src="{{asset('/img/pkm-gt.jpg')}}" class="d-block w-100" alt="...">
            </a>
              <div class="carousel-caption d-none d-md-block">
                <h1>PKM - GT</h1><p>{{$penjelasan["PKM - GT"]}}</p>
              </div>
            </div>
            <div class="carousel-item">
            <a class=""  href="kriteria-bidang">
              <img src="{{asset('/img/pkm-gfk.jpg')}}" class="d-block w-100" alt="...">
            </a>
              <div class="carousel-caption d-none d-md-block">
                <h1>PKM - GFK</h1><p>{{$penjelasan["PKM - GFK"]}}</p>
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
    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 mt-5 ml-2">
      <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-head my-2" style="background-color: white;">
            <h6 class="m-1 text-center" style="font-size: 2rem;">
              <i class="fas fa-id-badge mr-2" style="color: black"></i>CONTACT US
            </h6>
        </div>
        <div class="accordion" id="accordionExample">
          @foreach($contact as $c)
            <div class="card mt-2">
              <div class="card-header p-0 heading" id="{{$c->ID_CP}}">
                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$c->ID_CP}}" aria-expanded="true" aria-controls="#collapse{{$c->ID_CP}}" style="text-decoration: none;" id="button{{$c->ID_CP}}">
                    {{$c ->ORGANISASI}}
                  </button>
              </div>
              <div id="collapse{{$c->ID_CP}}" class="collapse" aria-labelledby="heading{{$c->ID_CP}}" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row mx-2">
                     <h5 class="contacthead">
                      <i class="fab fa-whatsapp-square mr-2 contacticon" style="color : green;"></i>
                      <span class="contacttext">@php if($c -> NOMER_TLP_1 == ""){
                          echo "-";
                        } 
                        else {
                          echo $c -> NOMER_TLP_1;
                        }
                        @endphp</span>
                     </h5>
                  </div>
                  <div class="row mx-2">
                     <h5 class="contacthead">
                      <i class="fab fa-line mr-2 contacticon" style="color : green;"></i>
                      <span class="contacttext">
                        @php if($c->LINE == ""){
                          echo "-";
                        } 
                        else {
                          echo $c->LINE;
                        }
                        @endphp
                      </span>
                     </h5>
                  </div>
                  <div class="row mx-2">
                   <h5 class="contacthead">
                    <i class="fas fa-envelope-open-text mr-2 contactemail" style="color : orange;"></i>
                    <span class="contacttext">@php if($c -> EMAIL_CP == ""){
                          echo "-";
                        } 
                        else {
                          echo $c -> EMAIL_CP;
                        }
                        @endphp</span>
                   </h5>
                  </div> 
                </div>
              </div>
            </div>
          @endforeach
        </div>
        </div>
    </div> -->
  </div>
@endsection

@section('master-addstyle')
#button-tahap:hover{
    background-color: #d68d00 !important;
}
.contacthead{
  display: inline-flex;
}
.contacticon{
  font-size: 2rem;
}
.contactemail{
  font-size: 1.75rem;
}
.contacttext{
  font-size: 1.25rem
}
.heading{
  cursor:pointer;
}
@endsection

@section('master-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
$(document).ready(function() {
    var clickedItem = $(".home");
    $(".nav-item").each( function() {
        $(this).removeClass("active");
    });
    clickedItem.addClass("active");
    
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
    $(".heading").each(function(){
      $(this).click(function(){
        $("#collapse"+$(this).attr("id")).collapse('toggle');
        console.log("#button"+$(this).attr("id"));
      }); 
    });
});
</script>
@endsection

@section('master-footer')
@include('/komponen/footer-home')
@endsection
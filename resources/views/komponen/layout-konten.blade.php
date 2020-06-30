@extends('komponen/master')

@section('master-judul')
@yield('judul')
@endsection

@section('master-diataskonten')
@yield('diataskonten')
@endsection

@section('master-addstyle')
@yield('addstyle')
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
@section('master-konten')
<div class="row justify-content-center m-0">

  <div class="card1 col-lg-12 col-xl-9" style="margin-top:-5rem;margin-bottom:70px;">
    <div class="card-header" style="background-color: transparent;"> 
      <ul class="nav nav-tabs card-header-tabs">
        <div class="row nav-item" style="background-color:white;margin-left:1px">
          <a class="m-1" style="display: inline-block;" title="Twitter" target="_blank" href="https://twitter.com/Unair_Official">
                <i class="fab fa-twitter m-1" style="color: #007ea8;"></i> 
          </a> 
          <a class="m-1" style="display: inline-block;margin-right:1px;" title="Facebook" target="_blank" href="https://www.facebook.com/universitasairlangga">
                        <i class="fab fa-facebook-f  m-1" style="color: #007ea8;"></i>
          </a>
          <a class="m-1" style="display: inline-block;" title="Instagram" target="_blank" href="https://www.instagram.com/univ_airlangga/">
                        <i class="fab fa-instagram m-1" style="color: #007ea8;"></i>            
          </a>   
          <a class="m-1" style="display: inline-block;" title="LinkedIn" target="_blank" href="https://id.linkedin.com/school/universitas-airlangga/">
                        <i class="fab fa-linkedin-in m-1" style="color: #007ea8;"></i>
          </a>   
          <a class="m-1" style="display: inline-block;" title="Youtube" target="_blank" href="https://www.youtube.com/channel/UCUYwloXmWyNZplsqg4MVERw">
                <i class="fab fa-youtube m-1" style="color: #007ea8;"></i>
          </a> 
        
        </div>
      </ul>
    </div>
    <div class="card-body shadow py-3 px-4 mb-5 bg-white rounded" style="background-color: white;">
    @yield('konten')
      
    </div>
  </div>

<!--   <div class="col-lg-12 col-xl-3" style="margin-top: -36px;">
      <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-head" style="background-color: white;">
          <div class="container" style="font-size: 2rem; text-align:center;">
            <a class="m-1" style="display: inline-block;">
              <i class="fas fa-id-badge mr-2" style="color: black"></i>CONTACT US
            </a>
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
      </div>
    </div> -->
  
</div>
@endsection

@section('master-script')
@yield('script')
<script>
$(".heading").each(function(){
      $(this).click(function(){
        $("#collapse"+$(this).attr("id")).collapse('toggle');
        console.log("#button"+$(this).attr("id"));
      }); 
    });
</script>
@endsection

@section('master-footer')
@yield('footer')
@endsection

@section('master-headlink')
@yield('headlink')
@endsection
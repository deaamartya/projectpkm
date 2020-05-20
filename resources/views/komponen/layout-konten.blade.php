@extends('komponen/master')

@section('master-judul')
@yield('judul')
@endsection

@section('master-diataskonten')
@yield('diataskonten')
@endsection

@section('master-addstyle')
@yield('addstyle')
@endsection
@section('master-konten')
<div class="container">
<div class="row">

  <div class="card1 col-xs-6 col-sm-8 col-md-8 col-lg-8 col-xl-8" style="margin-top:-5rem;margin-bottom:70px;">
    <div class="card-header"> 
      <ul class="nav nav-tabs card-header-tabs">
        <div class="row nav-item" style="background-color:white;margin-left:1px">
          <a class="m-1" style="display: inline-block;" title="Twitter" target="_blank" href="https://twitter.com/Unair_Official">
                <i class="fab fa-twitter" style="color: blue"></i> 
          </a> 
          <a class="m-1" style="display: inline-block;margin-right:1px;" title="Facebook" target="_blank" href="https://www.facebook.com/universitasairlangga">
                        <i class="fab fa-facebook-f" style="color: blue"></i>
          </a>
          <a class="m-1" style="display: inline-block;" title="Instagram" target="_blank" href="https://www.instagram.com/univ_airlangga/">
                        <i class="fab fa-instagram" style="color: blue"></i>            
          </a>   
          <a class="m-1" style="display: inline-block;" title="LinkedIn" target="_blank" href="https://id.linkedin.com/school/universitas-airlangga/">
                        <i class="fab fa-linkedin-in" style="color: blue"></i>
          </a>   
          <a class="m-1" style="display: inline-block;" title="Youtube" target="_blank" href="https://www.youtube.com/channel/UCUYwloXmWyNZplsqg4MVERw">
                <i class="fab fa-youtube" style="color: blue"></i>
          </a> 
        
        </div>
      </ul>
    </div>
    <div class="card-body shadow p-3 mb-5 bg-white rounded" style="background-color: white;">
    @yield('konten')
      
    </div>
  </div>

  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="margin-top:-35px">
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
@endsection

@section('master-script')
@yield('script')
@endsection

@section('master-footer')
@yield('footer')
@endsection

@section('master-headlink')
@yield('headlink')
@endsection
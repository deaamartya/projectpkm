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
<div class="row p-0 m-0">
  <div class="card1 col-12" style="margin-top:-5rem;margin-bottom:70px;">
    <div class="card-header"  style="background-color: transparent;"> 
      <ul class="nav nav-tabs card-header-tabs">
        <div class="row nav-item" style="background-color:white;margin-left:1px">
          <a style="display: inline-block;" title="Twitter" target="_blank" href="https://twitter.com/Unair_Official">
                <i class="fab fa-twitter m-1" style="color: #007ea8;"></i> 
          </a> 
          <a style="display: inline-block;margin-right:1px;" title="Facebook" target="_blank" href="https://www.facebook.com/universitasairlangga">
                        <i class="fab fa-facebook-f m-1" style="color: #007ea8;"></i>
          </a>
          <a style="display: inline-block;" title="Instagram" target="_blank" href="https://www.instagram.com/univ_airlangga/">
                        <i class="fab fa-instagram m-1" style="color: #007ea8;"></i>            
          </a>   
          <a style="display: inline-block;" title="LinkedIn" target="_blank" href="https://id.linkedin.com/school/universitas-airlangga/">
                        <i class="fab fa-linkedin-in m-1" style="color: #007ea8;"></i>
          </a>   
          <a style="display: inline-block;" title="Youtube" target="_blank" href="https://www.youtube.com/channel/UCUYwloXmWyNZplsqg4MVERw">
                <i class="fab fa-youtube m-1" style="color: #007ea8;"></i>
          </a> 
        
        </div>
      </ul>
    </div>
    <div class="card-body shadow p-3 mb-5 bg-white rounded" style="background-color: white;"> 
      <!-- tambahin class "shadow setelah card-body han" -->
      @yield('konten')
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
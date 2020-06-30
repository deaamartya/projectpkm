@extends('komponen/layout-konten-normal')

@section('judul','Contact Us')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Contact Us"))
@endsection

@section('konten')
<div class="row justify-content-center" style="background-color: white">
      @foreach($data as $c)
      <div class="col col-lg-3 mx-1 my-1 px-2 py-1" style="width: 100%">
        <div class="card">
          <div class="card-body">
          <!-- <div class="row"> -->
            <h4>{{$c ->ORGANISASI}}</h4>
          <!-- </div> -->
          <!-- <div class="row"> -->
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
          <!-- </div> -->
          <!-- <div class="row"> -->
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
          <!-- </div>  -->
          <!-- <div class="row"> -->
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
         <!-- </div>  -->
           </div>
         </div>
       </div>
    @endforeach
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    var clickedItem = $(".contact");
    $(".nav-item").each( function() {
        $(this).removeClass("active");
    });
    clickedItem.addClass("active");
});
</script>
@endsection

@section('footer')
@include('/komponen/footer-konten')
@endsection
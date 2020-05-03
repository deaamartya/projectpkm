@extends('master')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Tujuan PKM"))
@endsection

@section('konten')
<div class="row" style="background-color: white">
	hello
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    var clickedItem = $(".tujuan");
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
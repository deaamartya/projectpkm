@extends('komponen/layout-konten')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Sejarah PKM"))
@endsection

@section('konten')
<div class="row" style="background-color: white">
	hello
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    var clickedItem = $(".tentang");
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
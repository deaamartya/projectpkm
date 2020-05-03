@extends('master')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Tahap Pengajuan PKM"))
@endsection

@section('konten')
<div class="row" style="background-color: white">
	hello
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    $(".nav-item").each( function() {
        $(this).removeClass("active");
    });
});
</script>
@endsection

@section('footer')
@include('/komponen/footer-konten')
@endsection
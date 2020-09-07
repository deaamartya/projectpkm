@extends('komponen/layout-konten')

@section('judul','Tujuan PKM')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Tujuan PKM"))
@endsection

@section('konten')
<div class="container" style="background-color: white; height:500px">
<div class="row" >
<div class="col" >
<h3> Tujuan PKM</h3>
<p style="text-align:left">
PKM secara umum bertujuan untuk memandu mahasiswa menjadi pribadi yang (1) tahu dan taat aturan. (2) kreatif, inovatif dan (3) objektif kooperatif dalam membangun keragaman intelektual.
</p>
</div>
</div>
</div>
<p style="text-align:left; font-style:italic; font-size: 13px; text-align:right">Sumber : Buku Pedoman PKM 2020 Kemenristekdikti</p>
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
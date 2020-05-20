@extends('komponen/layout-konten')

@section('judul','Karakteristik Umum PKM')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Karakteristik Umum PKM"))
@endsection

@section('konten')
<div class="row" style="background-color: white">
<div class="col">
    <h3>Karakteristik Umum</h3>
    <p style="text-align:justify">
    PKM menumbuhkembangkan HOTS (Higher Order Thinking Skills), Creative Thinking melalui implementasi filosofi Tri Dharma Perguruan Tinggi yaitu :
    </p>
    <p>
    1. Pendidikan dan pengajaran.
    </p>
    
    <p>
    2. Penelitian dan pengembangan.
    </p>
    <p>
    3. Pengabdian kepada masyarakat.
    </p>
    <p style="text-align:justify">
     Dapat digambarkan sebagai berikut:
    </p>
    <img src="img/karakteristik-umum.png" width="100%" height="auto">
</div>
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
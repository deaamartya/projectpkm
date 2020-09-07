@extends('komponen/layout-konten')

@section('judul','Aspek Penilaian PKM')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Aspek Penilaian PKM"))
@endsection

@section('konten')
<div class="row" style="background-color: white">
<div class="col">
<h3>Aspek Penilaian</h3>
    <p style="text-align:justify">
    Penilaian proposal PKM dilakukan dalam 2 (dua) tahap yaitu evaluasi internal Perguruan Tinggi, dan penilaian proposal secara daring Ditjen Belmawa.
    </p>
    <p style="text-align:justify">
    Evaluasi internal dilakukan oleh Tim Penilai (Reviewer) Perguruan Tinggi Pengusul dengan menitikberatkan pada aspek-aspek berikut:
    </p>
    <p style="text-align:justify">
        a. Kesesuaian persyaratan administrasi yang bersifat wajib seperti tanggal-bulan-tahun proposal, tandatangan pengusul, biodata yang ditandatangani, jumlah dan nomor halaman, surat pernyataan ketua pelaksana atau mitra untuk PKM-T dan PKM-M, dan lain-lain    
<br/>   b. Kesesuaian format proposal dan penulisan dengan Pedoman PKM yang berlaku
<br/>   c. Kesesuaian program yang diajukan dengan bidang PKM yang dipilih    
    </p>
    <p style="text-align:justify">
    Setiap proposal yang lolos Evaluasi Internal selanjutnya diunggah ke SIMBelmawa dan akan dinilai lebih lanjut oleh Tim Penilai Ditjen Belmawa. Perguruan Tinggi bertanggungjawab atas kebenaran data yang dikirimkan ke Ditjen Belmawa. Oleh karena itu, Perguruan Tinggi melalui Evaluasi Internal harus memastikan bahwa data yang dikirim ke Ditjen Belmawa sudah benar dan tidak melanggar ketentuan.   
     </p>
     <p style="text-align:justify">
     Apabila ditemukan ketidak-benaran data dan pelanggaran atas ketentuan yang ada, Ditjen Belmawa berhak membatalkan proposal dan berdampak pada rekam jejak pengusulan proposal PKM tahun berikutnya. Khusus berkaitan dengan keanggotaan kelompok, misalnya seorang mahasiswa ditemukan menjadi ketua atau anggota pada lebih dari dua judul, maka Ditjen Belmawa akan membatalkan hibah ketiga yang akan diterima oleh mahasiswa pengusul. Penilaian Proposal yang dilakukan Tim Penilai Ditjen Belmawa dengan menitikberatkan pada aspek-aspek berikut: 
    </p>
<p style="text-align:justify">
        a. Kesesuaian persyaratan administrasi yang bersifat wajib seperti: data/identitas tim pengusul, Dosen Pendamping, dan pimpinan perguruan tinggi bidang kemahasiswaan, biodata tim pengusul dan Dosen Pendamping yang ditandatangani, jumlah dan nomor halaman, surat pernyataan ketua pelaksana yang ditandatangani oleh ketua tim bermaterai dan diketahui Pimpinan Perguruan Tinggi, surat pernyataan mitra bermaterai untuk PKMT dan PKM-M. Nama tidak boleh disingkat dan lain-lain (dilakukan oleh sistem).
<br/>   b. Kesesuaian format proposal dan penulisan dengan Pedoman PKM yang berlaku
<br/>   c. Kesesuaian program yang diajukan dengan bidang PKM yang dipilih 
<br/>   d. Tingkat kreativitas program yang diusulkan yang terdiri dari aspek: keterulangan topik, bobot tantangan intelektual, dan menenkankan pada aspek Kreativitas/Substansial
</p>
</div>
</div>
<p style="text-align:left; font-style:italic; font-size: 13px; text-align:right">Sumber : Buku Pedoman PKM 2020 Kemenristekdikti</p>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    var clickedItem = $(".aspek");
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
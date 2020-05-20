@extends('komponen/layout-konten')

@section('judul','Sejarah PKM')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Sejarah PKM"))
@endsection

@section('konten')
<div class="row" style="background-color: white">
    <div class="col shadow-sm p-3 mb-5 bg-white rounded">
    <h3>Sejarah PKM</h3>
    <p style="text-align:justify">
    PKM dilaksanakan pertama kali pada tahun 2001, yaitu setelah dilaksanakannya program restrukturisasi di lingkungan Ditlitabmas Ditjen Dikti. Sedangkan Pekan Imiah Mahasiswa Nasional (PIMNAS) yang dilaksanakan pada tahun 2002 adalah PIMNAS-I kegiatan PKM. Kegiatan pendidikan, penelitian dan pengabdian kepada masyarakat yang selama ini sarat dengan partisipasi aktif mahasiswa, diintegrasikan ke dalam satu wahana, yaitu PKM. Sebelumnya, pada tahun 1997 Ditlitabmas sudah menginisiasi kegiatan khusus bagi mahasiswa yaitu Karya Alternatif Mahasiswa dan KAM digabungkan bersama Program Pengembangan Budaya Kewirausahaan di Perguruan Tinggi, PPBKPT. KAM kemudian tumbuh menjadi cikal bakal PKM. 
    </p>
    <p style="text-align:justify">
    PKM dikembangkan untuk mengantarkan mahasiswa mencapai taraf pencerahan kreativitas dan inovasi berlandaskan penguasaan sains dan teknologi serta keimanan yang tinggi. Dalam rangka mempersiapkan diri menjadi pemimpin yang cendekiawan, wirausahawan mandiri dan arif, mahasiswa diberi peluang untuk mengimplementasikan kemampuan, keahlian, sikap, tanggungjawab, membangun kerjasama tim maupun mengembangkan kemandirian melalui kegiatan yang kreatif dalam bidang ilmu yang ditekuni.
    </p>
    <p style="text-align:justify">
    Pada awalnya, dikenal lima jenis kegiatan yang ditawarkan dalam PKM, yaitu PKMPenelitian (PKM-P), PKM-Kewirausahaan (PKM-K), PKM-Pengabdian kepada Masyarakat (PKM-M), PKM-Penerapan Teknologi (PKM-T) dan PKM-Penulisan Ilmiah (PKM-I). Namun, sejak Januari 2009, Ditlitabmas mengelola 6 (enam) PKM. Kompetisi Karya Tulis Mahasiswa (KKTM) yang semula menjadi tugas Direktorat Akademik dalam pengelolaannya, dilimpahkan kepada Ditlitabmas. Karena sifatnya yang identik dengan PKM-I, KKTM selanjutnya dikelola bersama-sama PKM-I dalam PKM-Karya Tulis (PKMKT). Dengan demikian, di dalam PKM-KT terkandung dua program penulisan, yaitu: PKMArtikel Ilmiah (PKM-AI) dan PKM-Gagasan Tertulis (PKM-GT). PKM-I atau selanjutnya disebut PKM-AI yang merupakan artikel hasil kegiatan, tidak lagi ditampilkan dalam PIMNAS, namun dipublikasikan pada e-journal. Sedangkan PKM-GT yang berpeluang didiskusikan dalam forum terbuka, diposisikan sebagai pengganti PKM-AI di PIMNAS. Pada tahun 2011, jumlah bidang PKM bertambah menjadi 7 (tujuh) dengan diperkenalkannya bidang PKM-Karsa Cipta. Pada tahun 2015, terjadi alih kelola PKM dari Direktorat Penelitian dan Pengabdian kepada Masyarakat (DRPM) ke Direktorat Jenderal Pembelajaran dan Kemahasiswaan (DitjenBelmawa). Pada tahun 2019 mulai diperkenalkan satu lagi bidang PKM berbasis media sosial, yaitu PKM-GFK (Gagasan Futuristik Konstruktif) yang berpeluang ditampilkan di PIMNAS.
    </p>
    
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
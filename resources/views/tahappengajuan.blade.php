@extends('komponen/layout-konten')

@section('judul','Tahap Pengajuan PKM')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Tahap Pengajuan PKM"))
@endsection

@section('konten')
<div class="container">
<div class="row">
<div class="col">

<div class="card-header" style="background-color: white" >
    <ul class="nav nav-tabs card-header-tabs" >
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"><b>A. Persiapan</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"><b>B. PKM 5 Bidang</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"><b>C. PKM-AI dan PKM-GT</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab"><b>D. PKM-GFK</b></a>
        </li>
  
    </ul>
</div>
<div class="card-body " >
    <div class="tab-content">
        <div class="tab-pane active" id="tabs-1" role="tabpanel" style="background-color:white;">
        <p style="text-align:justify">
        1. Ditjen Belmawa menerbitkan Pedoman PKM 
<br/>   2. Ditjen Belmawa menetapkan klasterisasi Perguruan Tinggi program PKM 
<br/>   3. Mahasiswa menyusun proposal PKM 5 Bidang, artikel PKM AI, artikel PKM-GT, proposal dan video PKM-GFK
<br/>   4. Perguruan Tinggi dapat mengetahui klaster PKM melalui akun Operator 
<br/>   5. Perguruan Tinggi melaksanakan Evaluasi Internal dan membuat Berita Acara Hasil Evaluasi Internal setiap jenis PKM yaitu :
        <p >
                 a) Berita Acara PKM 5 Bidang 
<br/>            b) Berita Acara PKM-AI 
<br/>            c) Berita Acara PKM-GT
<br/>            d) Berita Acara PKM-GFK untuk memenuhi kuota klasterisasi yang ditetapkan <br/>(Lampiran 2)
        </p>
   6. Perguruan Tinggi mengajukan permohonan kepada Ditjen Belmawa untuk memperoleh akun pengguna Pimpinan Perguruan Tinggi Bidang Kemahasiswaan dan akun pengguna Operator Perguruan Tinggi untuk mengakses SIMBelmawa (Lampiran 1).
</div>
        </p>
        <div class="tab-pane" id="tabs-2" role="tabpanel" style="background-color:white;">
        <p style="text-align:justify">
        1. Operator mengunggah Berita Acara Hasil Evaluasi Internal, mendaftarkan usulan (judul, Ketua Tim Pengusul, Dosen Pendamping), membuat akun ketua tim pengusul, dan membuat akun Dosen Pendamping (akun ketua tim pengusul dan akun Dosen Pendamping akan di buat otomatis oleh sistem setelah judul usulan di daftarkan).
<br/>   2. Mahasiswa mengisi bagian kelengkapan usulan proposal (sampul dan pengesahan) :
<br>
<br/>1)	Mahasiswa mengunggah bagian halaman utama proposal (daftar isi, halaman inti, lampiran) : halaman inti (pendahuluan sampai dengan daftar pustaka) 
<br/>2)	Dosen Pendamping secara daring melakukan validasi halaman utama dan melakukan bimbingan pengesahan proposal 
<br/>3)	Pimpinan Perguruan Tinggi Bidang Kemahasiswaan secara daring melakukan validasi halaman utama dan melakukan pengesahan proposal 
<br/>4)	Ditjen Belmawa melaksanakan penilaian secara daring terhadap proposal yang telah divalidasi oleh Dosen Pendamping dan disahkan oleh Pimpinan Perguruan Tinggi Bidang Kemahasiswaan 
<br/>5)	Ditjen Belmawa menetapkan pendanaan dan penugasan kontrak 
<br/>6)	Mahasiswa peraih pendanaan melaksanakan kegiatan, mengunggah catatan harian dan menyusun laporan kemajuan 
<br/>7)	Mahasiswa mengisi kelengkapan laporan kemajuan (sampul dan pengesahan) 
<br/>8)	Mahasiswa mengunggah bagian halaman utama laporan kemajuan (ringkasan, daftar isi, halaman inti, lampiran) : halaman inti (pendahuluan sampai dengan rencana tahapan berikunya) 
<br/>9)	Dosen Pendamping secara daring melakukan validasi halaman utama laporan kemajuan dan melakukan pengesahan laporan kemajuan 
<br/>10)	Pimpinan Perguruan Tinggi Bidang Kemahasiswaan secara daring melakukan validasi halaman utama laporan kemajuan dan melakukan pengesahan laporan kemajuan 
<br/>11)	Ditjen Belmawa melaksanakan penilaian secara daring terhadap laporan kemajuan seluruh proposal peraih pendanaan. Penilaian hanya dilaksanakan terhadap laporan kemajuan yang telah divalidasi oleh Dosen Pendamping dan disahkan oleh Pimpinan Perguruan Tinggi Bidang Kemahasiswaan 
<br/>12)	Ditjen Belmawa melaksakanan Penilaian Kemajuan Pelaksanaan PKM 5 Bidang (PKP2) berupa penilaian presentasi kemajuan pelaksanaan kegiatan yang bisa secara luring (fisik atau on-site) atau secara daring berupa penilaian video kemajuan pelaksanaan kegiatan yang telah diunggah ke YOUTUBE. Pembagian jadwal, tempat pelaksanaan, dan judul yang mengikuti penilaian luring atau daring akan ditetapkan kemudian 
<br/>13)	Mahasiswa peraih pendanaan wajib menyusun laporan akhir untuk pertanggungjawaban laporan akhir kegiatan dan laporan akhir keuangan sesuai jadwal yang ditetapkan 
<br/>14)	Mahasiswa mengisi kelengkapan laporan akhir (sampul dan pengesahan) 
<br/>15)	Mahasiswa mengunggah bagian halaman utama laporan akhir (daftar isi, halaman inti, lampiran) : halaman inti (pendahuluan sampai dengan daftar pustaka) 
<br/>16)	Dosen Pendamping secara daring melakukan validasi halaman utama dan melakukan bimbingan pengesahan laporan akhir 
<br/>17)	Pimpinan Perguruan Tinggi Bidang Kemahasiswaan secara daring melakukan validasi halaman utama dan melakukan pengesahan laporan akhir 
<br/>18)	Ditjen Belmawa melaksanakan penilaian secara daring terhadap laporan akhir yang telah divalidasi oleh Dosen Pendamping dan disahkan oleh Pimpinan Perguruan Tinggi Bidang Kemahasiswaan 
<br/>19)	Ditjen Belmawa menetapkan peserta PIMNAS 
<br/>20)	Operator melakukan registrasi peserta PIMNAS 
<br/>21)	Mahasiswa peserta PIMNAS mengunggah poster dan artikel ilmiah

        </p>
        </div>
        <div class="tab-pane" id="tabs-3" role="tabpanel" style="background-color:white;">
        <p>
</br>1.  Operator mengunggah Berita Acara Hasil Evaluasi Internal, mendaftarkan usulan (judul, Ketua Tim Pengusul, Dosen Pendamping), membuat akun ketua tim pengusul, dan membuat akun Dosen Pendamping (akun ketua tim pengusul dan akun Dosen Pendamping akan di buat otomatis oleh sistem setelah judul usulan di daftarkan) 
</br>2.	 Mahasiswa mengisi bagian kelengkapan usulan artikel (sampul dan pengesahan) 
</br>3.	 Mahasiswa mengunggah bagian halaman utama artikel (isi sampai dengan lampiran) 
</br>4.	 Dosen Pendamping secara daring melakukan validasi halaman utama dan melakukan bimbingan pengesahan artikel 
</br>5.	 Pimpinan Perguruan Tinggi Bidang Kemahasiswaan secara daring melakukan validasi halaman utama dan melakukan pengesahan artikel 
</br>6.	 Ditjen Belmawa melaksanakan penilaian secara daring terhadap artikel yang telah divalidasi oleh Dosen Pendamping dan disahkan oleh Pimpinan Perguruan Tinggi Bidang Kemahasiswaan 
</br>7.	 Ditjen Belmawa menetapkan peraih insentif 
</br>8.	 Ditjen Belmawa menetapkan peserta PIMNAS untuk PKM-GT (PKM-AI tidak mengikuti PIMNAS) 
</br>9.	 Operator melakukan registrasi peserta PIMNAS 
</br>10. Mahasiswa peserta PIMNAS mengunggah poster 
</br>11. Pelaksanaan PIMNAS

        </p>
        </div>
        <div class="tab-pane" id="tabs-4" role="tabpanel" style="background-color:white;">
        <p>
        </br>1.	Operator mengunggah Berita Acara Hasil Evaluasi Internal, mendaftarkan usulan (judul, Ketua Tim Pengusul, Dosen Pendamping), membuat akun ketua tim pengusul, dan membuat akun Dosen Pendamping (akun ketua tim pengusul dan akun Dosen Pendamping akan di buat otomatis oleh sistem setelah judul usulan di daftarkan) 
        </br>2.	Mahasiswa mengunggah video PKM-GFK ke YOUTUBE durasi 3 sampai 7 menit dengan resolusi minimal 480p 
        </br>3.	Mahasiswa mengisi bagian kelengkapan usulan proposal (sampul dan pengesahan) 
        </br>4.	Mahasiswa mengunggah bagian halaman utama proposal (jadwal sampai dengan sinopsis) 
        </br>5.	Dosen Pendamping secara daring melakukan validasi halaman utama dan melakukan bimbingan pengesahan proposal 
        </br>6.	Pimpinan Perguruan Tinggi Bidang Kemahasiswaan secara daring melakukan validasi halaman utama dan melakukan pengesahan proposal 
        </br>7.	Ditjen Belmawa melaksanakan penilaian secara daring terhadap proposal dan video yang telah divalidasi oleh Dosen Pendamping dan disahkan oleh Pimpinan Perguruan Tinggi Bidang Kemahasiswaan 
        </br>8.	Ditjen Belmawa menetapkan peraih insentif 
        </br>9.	Mahasiswa peraih insentif menyusun laporan PKM-GFK 
        </br>10.	Mahasiswa mengisi kelengkapan laporan PKM-GFK (sampul dan pengesahan) dan mengunggah bagian halaman utama laporan PKM-GFK (daftar isi sampai dengan lampiran) 
        </br>11.	Dosen Pendamping secara daring melakukan validasi halaman utama dan melakukan bimbingan pengesahan laporan PKM-GFK 
        </br>12.	Pimpinan Perguruan Tinggi Bidang Kemahasiswaan secara daring melakukan validasi halaman utama dan melakukan pengesahan laporan PKM-GFK 
        </br>13.	Ditjen Belmawa melaksanakan penilaian secara daring terhadap laporan PKM-GFK yang telah divalidasi oleh Dosen Pendamping dan disahkan oleh Pimpinan Perguruan Tinggi Bidang Kemahasiswaan 
        </br>14.	Ditjen Belmawa peserta PIMNAS 
        </br>15.	Operator melakukan registrasi peserta PIMNAS 
        </br>16.	Mahasiswa peserta PIMNAS mengunggah poster Pelaksanaan PIMNAS
        </p>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
	var clickedItem = $(".pengajuan");
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
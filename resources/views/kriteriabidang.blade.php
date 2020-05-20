@extends('komponen/layout-konten-normal')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Kriteria Bidang PKM"))
@endsection

@section('konten')
<div class="row" style="background-color: white">
<div class="col">
<h3 style="text-align:center">Kriteria</h3>
<table class="table table-bordered">
  <thead>
    <tr>
            <th scope="col">SKEMA </th>
            @foreach($jenis_kriteria as $b)
              <th>{{$b->NAMA_JENIS}}</th>
            @endforeach
            <th scope="col">Tamplate PKM</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bidang as $b)
    <tr>
        <td scope="col">{{$b -> NAMA_BIDANG}}</td>
        
        <td>{{$b->URAIAN_KRITERIA}}</td>
        <td>{{$b->TEMPLATE}}</td>
        </tr>
    @endforeach
    </tr>
      <tr>
      </tr>
      <tr>
      </tr>
    </tr>
    
  </tbody>
</table>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    var clickedItem = $(".kriteria");
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
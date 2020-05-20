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
    @php
    $total = count($arrkriteria);
    for($i=0;$i<$total;$i++){
    @endphp
    <tr>
      <td>{{$arrkriteria[0][$i]->NAMA_BIDANG}}</td>
      @php for($j=1;$j<$total;$j++){
        $namajenis = $jenis_kriteria[$j-1]->NAMA_JENIS;
      @endphp
      <td>@php echo($arrkriteria[$j][$i]->$namajenis) @endphp</td>
    @php
      }
    @endphp
      <td><a href="{{$arrkriteria[0][$i]->TEMPLATE}}">{{$arrkriteria[0][$i]->TEMPLATE}}</a></td>
    </tr>
    @php
    }
    @endphp
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
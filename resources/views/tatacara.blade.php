@extends('komponen/layout-konten')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Tata Cara Penulisan PKM"))
@endsection

@section('konten')
<div class="row" style="background-color: white;">
	<div class="col shadow-sm p-3 mb-5 bg-white rounded">
    <table class="table" width="100%">
    <thead class="thead" style="background-color: #2c4d86;color:white">
    <tr>
      <th scope="col">No</th>
      <th scope="col" width="25%">Nama Tata Cara</th>
      <th scope="col">Tata Cara</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tatacara as $ttc)
    <tr>
        <td>{{ $ttc->ID_TATACARA }}</td>
        <td>{{ $ttc->NAMA_TATA_CARA }}</td>
        <td>{{ $ttc->TATA_CARA }}</td>
    </tr>
    @endforeach
  </tbody>
    </table>
    </div>
</div>
@endsection
@section('konten-wa')
@foreach ($wa as $w)
{{$w->NOMER_TLP_1}}
@endforeach
@endsection

@section('konten-line')
line....
@endsection

@section('konten-email')
email...
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    var clickedItem = $(".tatacara");
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
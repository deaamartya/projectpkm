@extends('master')

@section('konten')
<!-- Masukin kontennya disini. -->
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    $( ".nav-item" ).bind( "click", function(event) {
        var clickedItem = $(".home");
        $( ".nav-item" ).each( function() {
            $( this ).removeClass( "active" );
        });
        clickedItem.addClass( "active" );
    });
});
</script>
@endsection

@section('footer')
@include('/komponen/footer-home')
@endsection
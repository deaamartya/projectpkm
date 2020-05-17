@extends('komponen/master')

@section('master-headlink')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('master-konten')
<!-- Masukin kontennya disini. -->
@endsection

@section('master-addstyle')
#button-tahap:hover{
    background-color: #d68d00 !important;
}
@endsection

@section('master-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
$(document).ready(function() {
      var clickedItem = $(".home");
      $(".nav-item").each( function() {
          $(this).removeClass("active");
      });
      clickedItem.addClass("active");
    
    $(".btn-submit").click(function(e){
        e.preventDefault();
        var name = $("input[name=name]").val();
        var phone = $("input[name=phone]").val();
        var email = $("input[name=email]").val();
        var message = $("textarea[name=message]").val();
        $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
        $.ajax({
           type:'POST',
           url:'/sendMail',
           data:{name:name, phone:phone, email:email,message:message},
           success:function(data){
              Swal.fire(
		        'Berhasil!',
		        "Pesan Anda berhasil dikirim!",
		        'success'
		      );
		      $('#sendmail').trigger("reset");
           }
        });
	});
});
</script>
@endsection

@section('master-footer')
@include('/komponen/footer-home')
@endsection
@extends('komponen/master')

@section('diataskonten')
@include('/komponen/judulkonten', 
array('judulkonten' => "Perbedaan Bidang PKM"))
@endsection

@section('addstyle')
.btn-light {
    color: white !important;
    background-color: #2c4d86 !important;
    border-color: #f8f9fa;
}
@endsection

@section('konten')
<div class="row" style="background-color: white;min-height: 1000px;">
	<table class="table table-bordered">
		<tbody>
		<tr>
			<td>
				<select multiple class="selectpicker" id="criteria" data-size="5" title="Comparison Criteria" >
				@foreach($jenis_kriteria as $b)
				<option value="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}" selected>{{$b->NAMA_JENIS}}</option>
				@endforeach
				</select><br>
				<input type="checkbox" id="differ">Show Difference Only
			</td>
			<td>
				<select class="selectpicker bidang" id="bidang1" data-size="5" title="Pilih Bidang PKM">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}">{{$b->NAMA_BIDANG}}</option>
				@endforeach
				</select>
			</td>
			<td><select class="selectpicker bidang" id="bidang2" data-size="5" title="Pilih Bidang PKM">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}">{{$b->NAMA_BIDANG}}</option>
				@endforeach
			</select></td>
			<td><select class="selectpicker bidang" id="bidang3" data-size="5" title="Pilih Bidang PKM">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}">{{$b->NAMA_BIDANG}}</option>
				@endforeach
			</select></td>
			<td><select class="selectpicker bidang" id="bidang4" data-size="5" title="Pilih Bidang PKM">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}">{{$b->NAMA_BIDANG}}</option>
				@endforeach
			</select></td>
		</tr>
		@foreach($jenis_kriteria as $b)
		<tr>
			<td>{{$b->NAMA_JENIS}}</td>
			<td id="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}bidang1" class="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}"></td>
			<td id="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}bidang2" class="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}"></td>
			<td id="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}bidang3" class="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}"></td>
			<td id="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}bidang4" class="{{strtolower(str_replace(' ','',$b->NAMA_JENIS))}}"></td>
		</tr>
		@endforeach
	</tbody>
	</table>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
	var clickedItem = $(".perbandingan");
    $(".nav-item").each( function() {
        $(this).removeClass("active");
    });
    clickedItem.addClass("active");

    $(".bidang").change(function(){
    	console.log($(this).attr('id')+" "+$(this).val()+" clicked!");
    	var idselect = $(this).attr('id');
    	var val = $(this).val();
    	var select1 = $("#bidang1").val();
    	var select2 = $("#bidang2").val();
    	var select3 = $("#bidang3").val();
    	var select4 = $("#bidang4").val();
    	$(".bidang").each(function(){
			$(this).find("option:disabled").prop("disabled",false);
			if(select1 != ""){
				$(this).find('[value='+select1+']').prop('disabled', true);
				$("#bidang1").find('[value='+select1+']').prop('disabled', false);
			}
			if(select2 != ""){
				$(this).find('[value='+select2+']').prop('disabled', true);
				$("#bidang2").find('[value='+select2+']').prop('disabled', false);
			}
			if(select3 != ""){
				$(this).find('[value='+select3+']').prop('disabled', true);
				$("#bidang3").find('[value='+select3+']').prop('disabled', false);
			}
			if(select4 != ""){
				$(this).find('[value='+select4+']').prop('disabled', true);
				$("#bidang4").find('[value='+select4+']').prop('disabled', false);
			}
    	});
    	$('.bidang').selectpicker('refresh');
        var baseurl = '{{URL::to('')}}';
        $.ajax({
            url: baseurl+'/bidang/getData/'+val,
            method: 'GET',
            success: function(data) {
				var bidang = data.bidang;
				var options = $("#criteria option");
				for(var i=0;i<options.length;i++){
					$("#"+options[i].value+idselect).html(bidang[i]["URAIAN_KRITERIA"]);
				}
			},
            error: function(data) {
              // console.log(data);
            }
        });
    });

    $("#differ").click(function(){
    	var kelas = $("#criteria").val();
    	if($(this).prop("checked") == true){
    		for(var i=0;i<kelas.length;i++){
    			hideDifference(kelas[i]);
    		}
    	}
    	else{
    		for(var i=0;i<kelas.length;i++){
    			$("."+kelas[i]).parent().show();
    		}
    	}
    });

	$("#criteria").change(function(){
		var options = $("#criteria option");
		var kelas = $("#criteria").val();
		for(var i=0;i<options.length;i++){
			$("."+options[i].value).parent().hide();
		}
		for(var i=0;i<kelas.length;i++){
			$("."+kelas[i]).parent().show();
		}
		if($("#differ").prop("checked") == true){
    		for(var i=0;i<kelas.length;i++){
    			hideDifference(kelas[i]);
    		}
    	}
	});   

    function hideDifference(kelas){

    	var el = $("."+kelas);
    	var count=0;
    	var compare=new Array();
    	for(var i=0;i<el.length;i++){
    		if(el[i].innerHTML != ""){
    			count++;
    			compare[count-1] = el[i];
    		}
    	}
    	if(count==2){
    		if(compare[0].innerHTML == compare[1].innerHTML){
    			$("."+kelas).parent().hide();
    		}
    	}
    	else if(count==3){
    		if(compare[0].innerHTML == compare[1].innerHTML && compare[1].innerHTML == compare[2].innerHTML){
    			$("."+kelas).parent().hide();
    		}
    	}
    	else if(count==4){
    		if(compare[0].innerHTML == compare[1].innerHTML && compare[1].innerHTML == compare[2].innerHTML && compare[2].innerHTML == compare[3].innerHTML){
    			$("."+kelas).parent().hide();
    		}
    	}
    }
});
</script>
@endsection

@section('footer')
@include('/komponen/footer-konten')
@endsection

@section('headlink')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection
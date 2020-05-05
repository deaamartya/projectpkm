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
				<select class="selectpicker" data-live-search="false" name="criteria" data-size="5" title="Comparison Criteria">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}">{{$b->NAMA_BIDANG}}</option>
				@endforeach
				</select><br>
				<input type="checkbox" id="differ">Show Difference Only
			</td>
			<td>
				<select class="selectpicker bidang" id="bidang1" data-live-search="false" name="bidang1" data-size="5" title="Pilih Bidang PKM">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}" onclick="select('bidang1',{{$b->ID_BIDANG}})">{{$b->NAMA_BIDANG}}</option>
				@endforeach
				</select>
			</td>
			<td><select class="selectpicker bidang" id="bidang2" data-live-search="false" name="bidang2" data-size="5" title="Pilih Bidang PKM">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}">{{$b->NAMA_BIDANG}}</option>
				@endforeach
			</select></td>
			<td><select class="selectpicker bidang" id="bidang3" data-live-search="false" name="bidang3" data-size="5" title="Pilih Bidang PKM">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}">{{$b->NAMA_BIDANG}}</option>
				@endforeach
			</select></td>
			<td><select class="selectpicker bidang" id="bidang4" data-live-search="false" name="bidang4" data-size="5" title="Pilih Bidang PKM">
				@foreach($bidang as $b)
				<option value="{{$b->ID_BIDANG}}">{{$b->NAMA_BIDANG}}</option>
				@endforeach
			</select></td>
		</tr>
		<tr>
			<td>Inti Kegiatan</td>
			<td id="intikegiatanbidang1" class="intikegiatan"></td>
			<td id="intikegiatanbidang2" class="intikegiatan"></td>
			<td id="intikegiatanbidang3" class="intikegiatan"></td>
			<td id="intikegiatanbidang4" class="intikegiatan"></td>
		</tr>
		<tr>
			<td>Kriteria Keilmuan</td>
			<td id="kriteriabidang1" class="kriteriailmu"></td>
			<td id="kriteriabidang2" class="kriteriailmu"></td>
			<td id="kriteriabidang3" class="kriteriailmu"></td>
			<td id="kriteriabidang4" class="kriteriailmu"></td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td id="pendidikanbidang1" class="pendidikan"></td>
			<td id="pendidikanbidang2" class="pendidikan"></td>
			<td id="pendidikanbidang3" class="pendidikan"></td>
			<td id="pendidikanbidang4" class="pendidikan"></td>
		</tr>
		<tr>
			<td>Anggota</td>
			<td id="anggotabidang1" class="anggota"></td>
			<td id="anggotabidang2" class="anggota"></td>
			<td id="anggotabidang3" class="anggota"></td>
			<td id="anggotabidang4" class="anggota"></td>
		</tr>
		<tr>
			<td>Pendanaan</td>
			<td id="pendanaanbidang1" class="pendanaan"></td>
			<td id="pendanaanbidang2" class="pendanaan"></td>
			<td id="pendanaanbidang3" class="pendanaan"></td>
			<td id="pendanaanbidang4" class="pendanaan"></td>
		</tr>
		<tr>
			<td>Luaran</td>
			<td id="luaranbidang1" class="luaran"></td>
			<td id="luaranbidang2" class="luaran"></td>
			<td id="luaranbidang3" class="luaran"></td>
			<td id="luaranbidang4" class="luaran"></td>
		</tr>
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
				$("#intikegiatan"+idselect).html(bidang[0]["URAIAN_KRITERIA"]);
				$("#kriteriailmu"+idselect).html(bidang[1]["URAIAN_KRITERIA"]);
				$("#pendidikan"+idselect).html(bidang[2]["URAIAN_KRITERIA"]);
				$("#anggota"+idselect).html(bidang[3]["URAIAN_KRITERIA"]);
				$("#pendanaan"+idselect).html(bidang[4]["URAIAN_KRITERIA"]);
				$("#luaran"+idselect).html(bidang[5]["URAIAN_KRITERIA"]);
				hideDifference("intikegiatan");
				// hideDifference("kriteriailmu");
				// hideDifference("pendidikan");
				// hideDifference("anggota");
				// hideDifference("pendanaan");
				// hideDifference("luaran");
            },
            error: function(data) {
              // console.log(data);
            }
        });
    });

    $("#differ").click(function(){
    	if($(this).prop("checked") == true){
    		hideDifference("intikegiatan");
    		hideDifference("kriteriailmu");
    		hideDifference("pendidikan");
    		hideDifference("anggota");
    		hideDifference("pendanaan");
    		hideDifference("luaran");
    	}
    });

    function hideDifference(kelas){
    	var el = document.getElementsByClassName(kelas);
		// console.log(el[0].innerHTML);
		var flag_inti = false;
		console.log(el.length);
		for(var i=0;i<el.length;i++){
			if(flag_inti == true || i==0){
				if(el[i].innerHTML!=""){
					console.log("loop ke-"+i+" tidaklah kosong!");
					if(el[i].innerHTML != el[i++].innerHTML){
						console.log("aku masuk breakk");
						break;
					}
					else{
						console.log("sama wahhh!"+"loop ke-"+i+" "+el[i].innerHTML+" == "+el[i++].innerHTML);
	    				flag_inti = true;
	    			}
	    			
				}
			}
			console.log("aku loop ke-"+i);
		}
		if(flag_inti == true){
			for(var i=1;i<el.length;i++){
				el[i].innerHTML = "Tidak ada perbedaan";
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
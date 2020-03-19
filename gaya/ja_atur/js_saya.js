$(document).ready(function(){
	$('#masuk_form_data').click(function(){
		$('.tempat_class').load('load_form_karya');
	});
	
	$('#filter_kata').keyup(function(){
		var dt = $(this).val();
		$.ajax({
			type:'GET',
			url:'pencarian_kata',
			data: {
				'cari_dt' : dt
			},
			success: function(response){
				
				
				$('#hasilkan').html(response);
			}
		});
	});
	
	$('#masuk_data').click(function(e){
		e.preventDefault();
		
		var form = document.getElementById('data_karyawan');
		var formData = new FormData(form);
		
		formData.append('masuk_data', $('#masuk_data').val());
		
		$.ajax({
			type:'POST',
			url:'karyawan_masuk_data',
			data: formData,
			contentType: false,
			processData:false,
			success: function(response){
				var hasil = $.parseJSON(response);
					
				if(hasil.status === true){
					alert("data anda telah masuk");
					$('#modal-masuk-data').modal('toggle');
					location.reload();
				} else {
					alert("data tidak masuk, harap lengkapi data");
				}
			}
		});
	});
	
	$('#masuk_edit_data').click(function(e){
		e.preventDefault();
			
		var form = document.getElementById('edit_data_karyawan');
		var formData = new FormData(form);
		
		formData.append('masuk_edit_data', $('#masuk_edit_data').val());
		
		$.ajax({
			type:'POST',
			url:'karyawan_edit_masuk_data',
			data: formData,
			contentType: false,
			processData:false,
			success: function(response){
				var hasil = $.parseJSON(response);
					
				if(hasil.status === true){
					alert("data anda telah masuk");
					$('#modal-edit-data').modal('toggle');
					location.reload();
				} else {
					alert("data tidak masuk, harap lengkapi data");
				}
			}
		});
	});
	
	$('.edit_data').click(function(){
		
		var id = this.id;
		
		$.ajax({
			type:'GET',
			url:'edit_data_karyawan/'+id,
			success: function(response){
				$('.tempat_edit_class').html(response);
			}
		});
	});
	
	$('#grade, #edit_grade').change(function(){
		
		$.ajax({
			type:'GET',
			url:'ambil_grade_harga',
			data:{
				'ket_gj' : $(this).val()
			},
			dataType: "text",
			success: function(response){
				$('#gj, #edit_gj').val(response);
			}
		});
	});
	
	$('.hapus_data').click(function(){
		
		var peringatan;
		var konf = confirm("Apakah Anda yakin akan menghapus data");
		var id  = this.id;
		
		if(konf == true){
			
			
			
			peringatan = "Anda telah menghapus data";
			$.ajax({
				type:'GET',
				url:'hapus_data_karyawan/'+id,
				success: function(response){
					location.reload();
				}
			});
		} 
	});
	
	$('#cari_data').click(function(){
		var tgl_aw = $('#filter_tgl_awal').val();
		var tgl_akh = $('#filter_tgl_akhir').val();
		$.ajax({
			type:'GET',
			url:'ambil_tanggal_masuk?tgl_aw='+tgl_aw+'&tgl_akh='+tgl_akh,
			success: function(response){
				$('#hasilkan').html(response);
			}
		});
	});
	
	$('#cari').change(function(){
		if($(this).val() == 'cari_ketik'){
			$('#tampil_ketik').show();
			$('#tampil_tgl').hide();
			$('#cari_data').hide();
			$('#tampil_btn').hide();
			$('#tampil_tgl_awal').hide();
			$('#tampil_tgl_akhir').hide();
		} else {
			$('#tampil_tgl').show();
			$('#tampil_ketik').hide();
			$('#cari_data').show();
			$('#tampil_btn').show();
			$('#tampil_tgl_awal').show();
			$('#tampil_tgl_akhir').show();
		}
	});
	
	$( '.satuan' ).mask('000.000.000', {reverse: true});
});

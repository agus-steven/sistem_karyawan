<div class="row">
	<div class="col-md-12">
		<form id="edit_data_karyawan">
			<input type="hidden" id="edit_id" name="edit_id" value="<?php echo $edit_data_karyawan[0]['id']; ?>" />
			<label>NIP</label>
			<input type="text" class="form-control" name="edit_nip" id="edit_nip" value="<?php echo $edit_data_karyawan[0]['nip']; ?>" /> 
			
			<label>Nama</label>
			<input type="text" class="form-control" name="edit_nama" id="edit_nama" value="<?php echo $edit_data_karyawan[0]['nama']; ?>" /> 
			
			<label>Gender</label>
			<select class="form-control" name="edit_gender" id="edit_gender">
				<?php if($edit_data_karyawan[0]['gender'] == 'm'){ ?>
				<option value="m" selected>Male</option>
				<option value="f">Female</option>
				<?php } else { ?>
				<option value="m">Male</option>
				<option value="f" selected>Female</option>
				<?php } ?>
			</select>
			
			<label>Tanggal Lahir</label>
			<input type="date" class="form-control" name="edit_tgl_lahir" id="edit_tgl_lahir" value="<?php echo date('Y-m-d', strtotime($edit_data_karyawan[0]['tgl_lahir'])); ?>" />
			
			<label>Tanggal Masuk</label>
			<input type="date" class="form-control" name="edit_tgl_masuk" id="edit_tgl_masuk" value="<?php echo date('Y-m-d', strtotime($edit_data_karyawan[0]['tgl_masuk'])); ?>" />
			
			<label>Grade</label>
			<select class="form-control" name="edit_grade" id="edit_grade">
				<?php if($edit_data_karyawan[0]['grade'] == 'a'){ ?>
				<option value="a" selected>A</option>
				<option value="b">B</option>
				<option value="c">C</option>
				<option value="d">D</option>
				<?php }else if($edit_data_karyawan[0]['grade'] == 'b'){ ?>
				<option value="a">A</option>
				<option value="b" selected>B</option>
				<option value="c">C</option>
				<option value="d">D</option>
				<?php }else if($edit_data_karyawan[0]['grade'] == 'c'){ ?>
				<option value="a">A</option>
				<option value="b">B</option>
				<option value="c" selected>C</option>
				<option value="d">D</option>
				<?php }else if($edit_data_karyawan[0]['grade'] == 'd'){ ?>
				<option value="a">A</option>
				<option value="b">B</option>
				<option value="c">C</option>
				<option value="d" selected>D</option>
				<?php }else{ ?>
				
				
				<?php } ?>
			</select>
			
			<input type="hidden" class="form-control" name="edit_gj" id="edit_gj" value="<?php echo $edit_data_karyawan[0]['gaji']; ?>" />
			<input type="button" class="form-control mt-3 bg-warning text-light" name="masuk_edit_data" id="masuk_edit_data" value="Edit Data" />
		</form>
	</div>
</div>

<script type="text/javascript" src="gaya/ja_atur/js_saya.js"></script>
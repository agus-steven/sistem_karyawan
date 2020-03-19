<div class="row">
	<div class="col-md-12">
		<form id="data_karyawan">
			<label>Massukan NIP</label>
			<input type="text" class="form-control" name="msk_nip" id="msk_nip" />
			
			<label>Massukan Nama</label>
			<input type="text" class="form-control" name="msk_nm" id="msk_nm" />
			
			<label>Pilih Gender</label>
			<select class="form-control" name="gender" id="gender">
				<option value="">---- Silahkan Pilih ----</option>
				<option value="m">Male</option>
				<option value="f">Female</option>
			</select>
			
			<label>Tanggal Lahir</label>
			<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" />
			
			<label>Tanggal Masuk</label>
			<input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk" />
			
			<label>Grade</label>
			<select name="grade" class="form-control" id="grade">
				<option value="">---- Silahkan Pilih ----</option>
				<option value="a">A</option>
				<option value="b">B</option>
				<option value="c">C</option>
				<option value="d">D</option>
			</select>
			
			
			<input type="hidden" class="form-control" name="gj" id="gj" />
			
			<input type="button" name="masuk_data" id="masuk_data" class="form-control bg-primary text-light mt-3" value="Masuk Data Karyawan" /> 
		</form>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url('gaya/ja_atur/js_saya.js'); ?>"></script>
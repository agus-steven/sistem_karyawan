<div class="modal fade" id="modal-masuk-data" role="dialog">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Masuk Data Karyawan</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
		  <div class="tempat_class"></div>
		</div>
	  </div>
	</div>
</div>

<div class="modal fade" id="modal-edit-data" role="dialog">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h4 class="modal-title">Edit Data Karyawan</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		  </button>
		</div>
		<div class="modal-body">
		  <div class="tempat_edit_class"></div>
		</div>
	  </div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-3 order-first">
						<input type="button" id="masuk_form_data" name="masuk_form_data" class="btn bg-success text-light" data-toggle="modal" data-target="#modal-masuk-data" value="masuk data" />
					</div>
					
					<div class="col-sm-4">
						<select id="cari" class="form-control" style="text-align:center;">
							<option value="">-------- Silahkan Pilih Pencarian --------</option>
							<option value="cari_ketik">Pencarian Per Kata</option>
							<option value="cari_tanggal">Pencarian Tanggal</option>
						</select>
					</div>
					
					<div class="col-sm-4" id="tampil_ketik" style="display:none;">
						<input type="text" id="filter_kata" name="filter_kata" class="form-control" placeholder="Isikan berdasarkan NIP, Nama, Gender, Grade, Gaji" />
					</div>
					
					<div class="col-sm-2" id="tampil_tgl_awal" style="display:none;">
						<input type="date" id="filter_tgl_awal" name="filter_tgl_awal" class="form-control" />
					</div>
					
					<div class="col-sm-2" id="tampil_tgl_akhir" style="display:none;">
						<input type="date" id="filter_tgl_akhir" name="filter_tgl_akhir" class="form-control" />
					</div>
					
					<div class="col-sm-1" id="tampil_btn" style="display:none;">
						<input type="button" id="cari_data" name="cari_data" value="Cari" class="btn btn-primary" />
					</div>
				</div>
			</div>
			
			<div class="row">	
				<div class="col-md-12">

					<table class="table table-bordered table-striped text-center" id="hasilkan">
						<tr>
							<th>NIP</th>
							<th>Nama</th>
							<th>Gender</th>
							<th>Tanggal Lahir</th>
							<th>Tanggal Masuk</th>
							<th>Grade</th>
							<th>Gaji</th>
							<th>Aksi</th>
						</tr>
						
						
						
						<?php foreach($hasil_join_karyawan as $key => $val) {  ?>
							<tr>
								<td><?php echo $val['nip']; ?></td>
								<td><?php echo $val['nama']; ?></td>
								<td><?php echo $val['gender']; ?></td>
								<td><?php echo $val['tgl_lahir']; ?></td>
								<td><?php echo $val['tgl_masuk']; ?></td>
								<td><?php echo $val['grade']; ?></td>
								<td><div class="satuan"><?php echo $val['ket_grade']; ?></div></td>
								<td><input type="button" id="<?php echo $val['id']; ?>" class="btn btn-md btn-warning edit_data" data-toggle="modal" data-target="#modal-edit-data" value="edit" /> || <input type="button" id="<?php echo $val['id']; ?>" class="btn btn-md btn-danger hapus_data" value="hapus" />
							</tr>	
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="gaya/ja_atur/js_saya.js"></script>
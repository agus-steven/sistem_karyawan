<?php
	class KaryawanLihat extends CI_Controller{
			
		public function data_anda(){
			
			$ket = $this->input->get('ket_gj');
			if(isset($ket)){
				if($ket == 'a'){
					echo "1000000";
				} else if($ket == 'b'){
					echo "2000000";
				} else if($ket == 'c'){
					echo "3000000";
				} else if($ket == 'd'){
					echo "4000000";
				}
			}
		}
		
		public function cari_data(){
			$filter = $this->input->get('cari_dt');
			if(isset($filter)){
				$this->load->model('KaryawanModel');
				$data = $this->KaryawanModel->cari_data($filter);
				echo 
						'<tr>'.
							'<th>'.'Nip'.'</th>'.
							'<th>'.'Nama'.'</th>'.
							'<th>'.'Gender'.'</th>'.
							'<th>'.'Tanggal Lahir'.'</th>'.
							'<th>'.'Tanggal Masuk'.'</th>'.
							'<th>'.'Grade'.'</th>'.
							'<th>'.'Gaji'.'</th>'.
						'</tr>';
						
				foreach($data as $key => $val){
					
					echo '<tr>'.
							'<td>'.$val['nip'].'</td>'.
							'<td>'.$val['nama'].'</td>'.
							'<td>'.$val['gender'].'</td>'.
							'<td>'.$val['tgl_lahir'].'</td>'.
							'<td>'.$val['tgl_masuk'].'</td>'.
							'<td>'.$val['grade'].'</td>'.
							'<td>'.$val['gaji'].'</td>'.
						'</tr>';
				}
			}
		}
		
		public function cari_tanggal(){
			$awal = $this->input->get('tgl_aw');
			$akhir = $this->input->get('tgl_akh');
			
			$this->load->model('KaryawanModel');
			$data_tgl = $this->KaryawanModel->cari_tgl($awal, $akhir);
			
				echo '<table class="table table-bordered table-striped text-center" id=hasilkan>'.
					'<tr>'.
						'<th>'.'Nip'.'</th>'.
						'<th>'.'Nama'.'</th>'.
						'<th>'.'Gender'.'</th>'.
						'<th>'.'Tanggal Lahir'.'</th>'.
						'<th>'.'Tanggal Masuk'.'</th>'.
						'<th>'.'Grade'.'</th>'.
						'<th>'.'Gaji'.'</th>'.
					'</tr>';
						
			foreach($data_tgl as $key => $val){
					
				echo '<tr>'.
						'<td>'.$val['nip'].'</td>'.
						'<td>'.$val['nama'].'</td>'.
						'<td>'.$val['gender'].'</td>'.
						'<td>'.$val['tgl_lahir'].'</td>'.
						'<td>'.$val['tgl_masuk'].'</td>'.
						'<td>'.$val['grade'].'</td>'.
						'<td>'.$val['gaji'].'</td>'.
					'</tr>';
			}

			echo '</table>';			
		}
	}
?>
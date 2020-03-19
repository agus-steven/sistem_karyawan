<?php
	class KaryawanHapus extends CI_Controller{
		
		public function hapus_karyawan($id){
			
			if(isset($id)){
				$this->load->model('KaryawanModel');
				
				$where = array('id' => $id);
				$this->KaryawanModel->hapus_data($where);
			}
		}
	}
?>
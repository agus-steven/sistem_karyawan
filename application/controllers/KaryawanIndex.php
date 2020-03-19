<?php
	class KaryawanIndex extends CI_Controller{
		
		
		public function index(){
			
			$this->load->model('KaryawanModel');
			
			$data['hasil_join_karyawan'] = $this->KaryawanModel->tampil_join();
			$this->load->view('atas/header');
			$this->load->view('konten/isi', $data);
			$this->load->view('bawah/footer');
		}
		
		public function input_form(){
			$this->load->view('form/input_data');
		}
	}
?>
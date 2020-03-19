<?php
	class KaryawanInsert extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			
		}
		
		public function insert_data(){
			
			$response = array();
			if(isset($_POST['masuk_data'])){
				
				
			if(empty($this->input->post('msk_nm')) || empty($this->input->post('msk_nip')) || empty($this->input->post('gender')) || empty($this->input->post('grade'))){
					$response['status'] = false; 
				} else {
					$data = array(
						'nip' => $this->input->post('msk_nip'),
						'nama' => $this->input->post('msk_nm'),
						'gender' => $this->input->post('gender'),
						'tgl_lahir' => $this->input->post('tgl_lahir'),
						'tgl_masuk' => $this->input->post('tgl_masuk'),
						'grade' => $this->input->post('grade'),
						'gaji' => $this->input->post('gj')
					);
					
					$this->load->model('KaryawanModel');
					$this->KaryawanModel->masuk_karyawan_data($data);
					$response['status'] = true;
				}
			}
			
			header('Content-Type', 'application/json');
			echo json_encode($response);
		}
	}
?>
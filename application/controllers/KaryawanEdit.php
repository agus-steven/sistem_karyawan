<?php
	class KaryawanEdit extends CI_Controller{
		
		public function edit($id){
			
			if(isset($id)){
				$this->load->model('KaryawanModel');
				
				$data['edit_data_karyawan'] = $this->KaryawanModel->tampil_edit($id);
				
				$this->load->view('edit/edit_karyawan', $data);
			}
		}
		
		public function edit_masuk_karyawan(){
			$response = array();
			if(isset($_POST['masuk_edit_data'])){
				
				
			if(empty($this->input->post('edit_nip')) || empty($this->input->post('edit_nama')) || empty($this->input->post('edit_gender')) || empty($this->input->post('edit_grade'))){
					$response['status'] = false;
				} else {
					$data = array(
						'nip' => $this->input->post('edit_nip'),
						'nama' => $this->input->post('edit_nama'),
						'gender' => $this->input->post('edit_gender'),
						'tgl_lahir' => $this->input->post('edit_tgl_lahir'),
						'tgl_masuk' => $this->input->post('edit_tgl_masuk'),
						'grade' => $this->input->post('edit_grade'),
						'gaji' => $this->input->post('edit_gj')
					);
					
					$id = array(
						'id' => $this->input->post('edit_id')
					);
					
					$this->load->model('KaryawanModel');
					$this->KaryawanModel->edit_karyawan_data($data, $id);
					$response['status'] = true;
				}
			}
			
			header('Content-Type', 'application/json');
			echo json_encode($response);
		}
	}
?>
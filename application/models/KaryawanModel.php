<?php
	class KaryawanModel extends CI_Model {
		
		public function masuk_karyawan_data($arr){
			$this->db->insert('tb_karyawan', $arr);
		}
		
		public function tampil_join(){
			$this->db->select('*');
			$this->db->from('tb_karyawan');
			$this->db->join('tb_gaji', 'tb_karyawan.grade = tb_gaji.grade');
			$this->db->order_by('nip', "asc");
			$query = $this->db->get();
			return $query->result_array();
		}
		
		public function tampil_edit($id){
			$this->db->select('*');
			$this->db->from('tb_karyawan');
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->result_array();
		}
		
		function edit_karyawan_data($data, $where){
            $this->db->where($where);
            $this->db->update("tb_karyawan", $data);
        }	
		
		function hapus_data($id){
			
			$this->db->where($id);
			$this->db->delete('tb_karyawan');
		}
		
		function cari_data($kata){
			$this->db->select('*');
			$this->db->group_start();
			$this->db->like('nip', $kata);
			$this->db->or_like('nama', $kata);
			$this->db->or_like('gender', $kata);
			$this->db->or_like('grade', $kata);
			$this->db->or_like('gaji', $kata);
			$this->db->group_end();
			
			$query = $this->db->get('tb_karyawan');
			return $query->result_array();
		}
		
		public function cari_tgl($awal, $akhir){
			$this->db->select('*');
			$this->db->where('tgl_masuk BETWEEN "'. date('Y-m-d', strtotime($awal)). '" and "'. date('Y-m-d', strtotime($akhir)).'"');
			$query = $this->db->get('tb_karyawan');
			
			return $query->result_array();
		}
	}
?>
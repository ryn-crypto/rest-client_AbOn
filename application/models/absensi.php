<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Model {

	public function index($id)
	{
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->where('user_id', $id);
        $this->db->order_by('tanggal', 'ASC');
		return $this->db->get()->result_array();
	}

	public function absenMasuk($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function absenPulang($tabel, $data){
		$this->db->set('waktu_pulang', $data);
        $this->db->where('id');
		$this->db->update('user');
	}

}
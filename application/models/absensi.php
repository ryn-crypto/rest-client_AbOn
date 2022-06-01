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

	// cek absensi
	public function cek_absen($data){
		$this->db->select('waktu_masuk');
		$this->db->from('absensi');
		$this->db->where($data);
		return $this->db->get()->result_array();
	}

	public function absenMasuk($data){
		$this->db->insert('absensi', $data);
	}

	public function absenPulang($id, $data){
		$this->db->set($data);
        $this->db->where($id);
		$this->db->update('absensi');
	}

}
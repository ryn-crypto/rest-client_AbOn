<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Model {

    // semua jadwal
	public function index($data)
	{
        $this->db->select('tanggal, bulan, tahun, jam_masuk, jam_pulang');
		$this->db->from('jadwal');
		$this->db->join('user','user.nik = jadwal.nik');
		$this->db->join('shift','shift.id = jadwal.shift_id');
        $this->db->where($data);
		return $this->db->get()->result_array();
	}
}
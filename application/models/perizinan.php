<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perizinan extends CI_Model {

	public function index($id)
	{
		$this->db->select('*');
		$this->db->from('cuti');
		$this->db->join('jenis_cuti','cuti.jenis_cuti = jenis_cuti.id');
		$this->db->where('id_user', $id);
        $this->db->order_by('cuti.id', 'ASC');
		return $this->db->get()->result_array();
	}
	
	public function semua()
	{
		$this->db->select('cuti.id, user.nama, jenis_cuti.jenis_cuti, cuti.tanggal_mulai, cuti.tanggal_selesai, jenis_cuti.code, user.divisi_id, cuti.status, cuti.cuti_khusus, cuti.ket, cuti.berangkat, cuti.pulang');
		$this->db->from('user');
		$this->db->join('cuti','cuti.id_user = user.id');
		$this->db->join('jenis_cuti','cuti.jenis_cuti = jenis_cuti.id');
        $this->db->order_by('cuti.id', 'ASC');
		return $this->db->get()->result_array();
	}

	public function jenis()
	{
		$this->db->select('*');
		$this->db->from('jenis_cuti');
        $this->db->order_by('id', 'ASC');
		return $this->db->get()->result_array();
	}
	
    public function cuti($data)
	{
		$this->db->insert('cuti', $data);
	}

    public function jmlcuti($data, $id)
    {
        $this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('User');
	}
    
	public function status($data, $id)
    {
        $this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('cuti');
	}
}
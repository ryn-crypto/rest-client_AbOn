<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perizinan extends CI_Model {

	public function index()
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
}
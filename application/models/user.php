<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function index()
	{
		$this->db->select();
		$this->db->from('user');
		$this->db->join('jabatan','jabatan.kode_jabatan = user.jabatan_id');
		$this->db->join('divisi','divisi.kode_divisi = user.divisi_id');
        $this->db->order_by('user.nik', 'ASC');
		return $this->db->get()->result_array();
	}

	public function update($data, $id)
	{
        $this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('User');
	}

	public function ambil_data($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		return $this->db->get()->row_array();
	}

	public function no_terahir()
	{
		$this->db->select('id');
		$this->db->from('user');
		$this->db->order_by('id', 'DESC');
		return $this->db->get()->row_array();
	}
}
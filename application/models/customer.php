<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Model {

	public function index()
	{
		$this->db->select('*');
		$this->db->from('daftar_game');
        $this->db->order_by('id', 'ASC');
		return $this->db->get()->result_array();
	}

	public function gamedipilih($id)
	{
		$this->db->select('*');
		$this->db->from('game_rank');
		$this->db->join('daftar_game', 'daftar_game.id = game_rank.game_id');
		$this->db->where('game_rank.game_id', $id);
        return $this->db->get()->result_array();
	}

	public function select($id)
	{
		$this->db->select('*');
		$this->db->from('game_rank');
		$this->db->where($id);
        return $this->db->get()->result_array();
	}

	public function insert($data)
	{
		$this->db->insert('transaksi', $data);
	}
}
<?php defined('BASEPATH') or exit('No direct script access
allowed');
class Kos_model extends CI_Model
{
	public $table = 'tb_kos';
	public $id = 'tb_kos.id_kos';

	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function daftarkos()
	{
		$query = $this->db->get('tb_kos');
		return $query;
	}
	public function getById($nama) {
		$this->db->from($this->table); 
		$this->db->where("nama", $nama);
		$query=$this->db->get();
		return $query->result_array();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}

	public function count_kos(){
		$this->db->select('*');
		$this->db->from('tb_kos');
		return $this->db->count_all_results();
	}
}

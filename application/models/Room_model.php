<?php 
/**
* 
*/
class Room_model extends CI_Model
{
	public $admin			= 'admin';
	public $room			= 'room';
	public $id				= 'id_room';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->admin)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->room)->result();
	}

	function ambil_data1($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->room)->row();
	}

	function tambah_data($data)
	{
		return $this->db->insert($this->room,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->room);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->room,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->room)->row();
	}

}

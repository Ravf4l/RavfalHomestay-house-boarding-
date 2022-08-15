<?php

/**
 * 
 */
class Rent_model extends CI_Model
{
	public $rent		= 'rent';
	public $id			= 'rent_id';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('rent.rent_id, member.name_member, room.room_name, rent.date, rent.nominal, rent.picture,  rent.month, rent.status');
		$this->db->from('rent');
		$this->db->join('member', 'rent.id_member = member.id_member');
		$this->db->join('room', 'rent.id_room = room.id_room');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id, $data)
	{
		$this->db->where($this->id, $id);
		return $this->db->update($this->rent, $data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->rent)->row(); //1 data
	}

	function tambah_data($data) //array
	{
		return $this->db->insert($this->rent, $data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->rent);
	}

	public function get_sum()
	{
		$this->db->select_sum('nominal', 'total');
		$this->db->from('rent');
		return $this->db->get('')->row();
	}
}

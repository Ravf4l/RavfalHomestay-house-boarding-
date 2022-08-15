<?php

/**
 * 
 */
class Report_model extends CI_Model
{
	public $report		= 'report';
	public $id			= 'report_id';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('report.report_id, member.name_member, room.room_name, report.about, report.content');
		$this->db->from('report');
		$this->db->join('member', 'report.id_member = member.id_member');
		$this->db->join('room', 'report.id_room = room.id_room');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id, $data)
	{
		$this->db->where($this->id, $id);
		return $this->db->update($this->report, $data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->report)->row(); //1 data
	}

	function tambah_data($data) //array
	{
		return $this->db->insert($this->report, $data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->report);
	}
}

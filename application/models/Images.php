<?php

class Images extends MY_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function all()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get("images");
		return $query->result_array();
	}
}
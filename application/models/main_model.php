<?php
/**
 * 
 */
class Main_model extends CI_Model
{
	
	function test_main()
	{
		echo "this is a model";

	}

	function insert_data($data)
	{
		$this->db->insert('users', $data);
	}
}

?>
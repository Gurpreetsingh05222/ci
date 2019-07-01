<?php

class User_model extends CI_Model{

	public function get_users(){

		$query = $this->db->query('SELECT * FROM users'); //Another way to query database

		// $query = $this->db->get('users'); // Query database

		return $query->num_fields(); // This will give no. of column

		// return $query->num_rows(); // This will give no. of rows

	}
}
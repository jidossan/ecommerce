<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Marque_model extends CI_Model 
{

	public function findAllMarque()
	{
		//echo 'je suis ici';
		$query = $this->db->query("SELECT * FROM marque;");
		//var_dump($query->result('Marque_model'));

		return ($query->result('Marque_model'));

	}


}
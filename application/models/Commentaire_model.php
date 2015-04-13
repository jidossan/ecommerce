<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Commentaire_model extends CI_Model 
{

	public function insertCommentaire($data)
	{
		$this->db->insert("commentaire",$data);
	}


}
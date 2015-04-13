<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Produit_model extends CI_Model 
{
/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function displayImage()
	{
		return base_url()."assets/images/".$this->img;
	}

	public function findLimit($nb=5)
	{
		//$requeteDeux=$this->db->get('produit');
		//var_dump($requeteDeux->result('produit'));
		$requete=$this->db->query('SELECT * FROM produit LIMIT ?', [$nb]);
		$resultat = $requete->result('Produit_model');
		return $resultat;
		
		die('class Produit');
	}

	public function findProduitById($id)
	{
		$query=$this->db->get_where("produit",["idproduit"=>$id]);
		//var_dump($query->unbuffered_row("Produit_model"));
		return($query->unbuffered_row("Produit_model"));//unbuffered_row=fetch
	}


}


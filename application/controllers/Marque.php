<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marque extends CI_Controller 
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



	public function index()
	{
		$this->load->model('Marque_model');
		
		$toutesLesMarques = $this->Marque_model->findAllMarque();// $this->Marque_model->findAllMarque(); equivaut a ($query->result('Marque_model')); dans la page Marque_model.php

								//produits : nom du fichier dans views
		$this->load->view('affichelesmarques', [ 'allMarques' => $toutesLesMarques] );
													// $articles : les produits de la requête
		
	}
}
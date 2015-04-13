<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller 
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
		//$this->load->helper('url');
		$this->load->model('Produit_model');//chargement du dossier Produit_model qui se trouve dans le fichier models
		$articles=$this->Produit_model->findLimit();
		//var_dump($articles);
		$this->load->view('accueil',
		['produits'=>$articles]);//chargement du dossier acceuil dans le dossier view

	}
}
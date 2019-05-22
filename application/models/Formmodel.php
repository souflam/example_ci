<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formmodel extends MY_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	
	public function adddemande()
	{
		$data = array(
		'formation' => $this->input->post('formation'),
		'niveaux' => $this->input->post('niveaux'),
		'prenom' => $this->input->post('prenom'),
		'tel' => $this->input->post('tel'),
		'raisonsemail' => $this->input->post('raisonsemail'),
		'email' => $this->input->post('email'),
		'horaire' => $this->input->post('horaire'),
		);
		$this->db->insert('demande_information', $data);
	}


	public function adddcontact()
	{
		$data = array(
		'formation' => $this->input->post('formation'),
		'message' => $this->input->post('message'),
		'prenom' => $this->input->post('prenom'),
		'nom' => $this->input->post('nom'),
		'telephone' => $this->input->post('tel'),
		'message' => $this->input->post('message'),
		'email' => $this->input->post('email'),
		'type' => $this->input->post('type'),
		);
		$this->db->insert('contact', $data);
	}


	


	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }

    // Frontend User CRUD
    public function index()
    {
        $crud = $this->generate_crud('contact');

        $crud->columns('prenom', 'nom', 'email', 'formation','type');
        $state = $crud->getState();
        $crud->order_by('id','desc');
        $state_info = $crud->getStateInfo();
        $crud->unset_print()->unset_add()->unset_edit();
        $this->mPageTitle = 'contact';
        $this->render_crud();    }
}
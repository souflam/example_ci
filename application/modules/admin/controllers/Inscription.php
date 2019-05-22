<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }

    // Frontend User CRUD
    public function index()
    {
        $crud = $this->generate_crud('demande_information');

        $crud->columns('email', 'tel','created_at');
        $state = $crud->getState();
        $state_info = $crud->getStateInfo();
        $crud->order_by('id','desc');
        $crud->unset_print()->unset_add()->unset_edit();
        $this->mPageTitle = 'Inscription';
        $this->render_crud();    }
}
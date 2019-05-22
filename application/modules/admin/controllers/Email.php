<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }

    // Frontend User CRUD
    public function index()
    {
        $crud = $this->generate_crud('emails');

        $crud->columns('nom', 'email', 'created_at');
        $state = $crud->getState();
        $state_info = $crud->getStateInfo();
        $crud->order_by('id','desc');
        $crud->unset_print()->unset_read()->unset_add()->unset_edit();
        $this->mPageTitle = 'email';
        $this->render_crud();    }
}
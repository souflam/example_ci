<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }

    // Frontend User CRUD
    public function index()
    {
        $crud = $this->generate_crud('agenda');

        $state = $crud->getState();
        $crud->order_by('id','desc');
        $crud->columns('title', 'date_debut', 'image');
        $state_info = $crud->getStateInfo();
        $crud->set_field_upload('image','assets/uploads');
        $crud->set_field_upload('image_fb','assets/uploads');

        $crud->unset_print()->unset_read();
        $this->mPageTitle = 'agenda';
        $this->render_crud();
    }
}
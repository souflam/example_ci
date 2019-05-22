<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleController extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }

    // Frontend User CRUD
    public function index()
    {
        $crud = $this->generate_crud('articles');

        $state = $crud->getState();
        $crud->order_by('publicationDate','desc');
        $crud->columns('title', 'publicationDate', 'image');

        $state_info = $crud->getStateInfo();
        $crud->set_field_upload('image','assets/uploads');
        $crud->set_field_upload('image_fb','assets/uploads');
        $crud->unset_print();
        $this->mPageTitle = 'articles';
        $this->render_crud();
    }
}
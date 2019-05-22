<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actualites extends MY_Controller {
	
	private $data = array(); 

	public function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
	}

	
	public function index()
	{
		$this->mViewData['menu'] = 'actualites';
		$this->mViewData['title_page'] = 'Actualité';
		$config = array();
        $config["base_url"] = base_url() . "actualites/index";
        $config["total_rows"] = $this->article->record_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = $this->input->get('p');

		//var_dump($page);die;

        $this->mViewData["actualites"] = $this->article->
            getAll($config["per_page"], $page);
        $this->mViewData["links"] = $this->pagination->create_links();
		
		$this->render('actualites', 'full_width');
	}


	public function voir($id = '')
	{
		$this->mViewData['menu'] = 'actualites';
		$this->mViewData['title_page'] = 'Actualité';
		$this->mViewData['article'] = $this->article->getArticleById($id);
		$this->render('actualite', 'full_width');
	}


	



}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agenda extends MY_Controller {
	
	private $data = array(); 

	public function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
		
	}

	public function index()
	{
		$this->mViewData['menu'] = 'agenda';
		$this->mViewData['title_page'] = 'Agenda';
		$config = array();
        $config["base_url"] = base_url() . "agenda/index";
        $config["total_rows"] = $this->agendamodel->record_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->mViewData["agenda"] = $this->agendamodel->
            getAll($config["per_page"], $page);
        $this->mViewData["links"] = $this->pagination->create_links();
		
		$this->render('agenda', 'full_width');
	}


	public function details($id = '')
	{
		$this->mViewData['menu'] = 'agenda';
		$this->mViewData['title_page'] = 'Agenda';
		$this->mViewData['agenda'] = $this->agendamodel->getArticleById($id);
		$this->render('agenda_details', 'full_width');
	}


	



}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
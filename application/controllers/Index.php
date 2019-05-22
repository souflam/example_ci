<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {
	
	private $data = array();
	
	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->mViewData['menu'] = 'home';
		$this->mViewData["actualites"] = $this->article->getAll(6, 0);
		$this->mViewData["events"] = $this->agendamodel->getAll(3, 0);
        $this->mViewData['title_page'] = 'Institut de Formation aux Professions de Santé Privé accrédité';
		$this->render('home','full_width');
	}

	public function mot_fondatrice()
	{
		$this->mViewData['menu'] = 'mot_fondatrice';
        $this->mViewData['title_page'] = 'Mot de la Fondatrice';
		$this->render('mot_fondatrice','full_width');
	}

	public function presentation()
	{
        $this->mViewData['title_page'] = 'Présentation de IPFOPS';
		$this->mViewData['menu'] = 'presentation';
		$this->render('presentation','full_width');
	}

	public function nos_plus()
	{
		$this->mViewData['menu'] = 'nos_plus';
        $this->mViewData['title_page'] = 'Nos plus';
		$this->render('nos_plus','full_width');
	}

	



}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
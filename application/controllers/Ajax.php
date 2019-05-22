<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajax extends MY_Controller {



	public function postEmail()
	{
		if($this->input->is_ajax_request()){
			$nom = $this->input->post('nom');
			$email = $this->input->post('email');
			$email = $this->participation->postNewsLetter($nom, $email);
			echo json_encode($email, JSON_FORCE_OBJECT);
		}
	}

}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agendamodel extends MY_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function record_count() {
        return $this->db->count_all("agenda");
    }


	public function getAll($limit, $start)
	{
		$this->db->limit($limit, $start);
        $this->db->select("*,STR_TO_DATE(date_debut,'%Y-%m-%d') AS DATE",FALSE);
        $this->db->order_by("DATE", "Desc");
        $query = $this->db->get("agenda");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;

	}

	public function getArticleById($id = '')
	{
		if($id){
			$query = $this->db->get_where('agenda', array('id' => $id));
			if($query->num_rows()){
				return $query->row();
			}else {
				return false;
			}
		}
		return false;
	}

	
}

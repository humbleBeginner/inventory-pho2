<?php defined('SYSPATH') or die('No direct script access.');
 
class Office_Model extends ORM {
 	protected $belongs_to = array('district');
    protected $has_many = array('requests','office_budgets','transaction');
    
 	public function insert($data){
 		$id = $this->db->insert('offices', $data)->insert_id();
 		return $this->getOne($id);
 	}

 	public function getAll($isArray = FALSE){
 		return $this->db->get('offices')->result_array($isArray);
 	}

 	public function getOne($id){
 		return $this->db->getwhere('offices', array('id'=>$id));
 	}
}
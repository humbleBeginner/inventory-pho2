<?php defined('SYSPATH') or die('No direct script access.');
 
class Category_Model extends ORM {
 	protected $has_many = array('items');

 	public function insert($data){
 		$id = $this->db->insert('categories', $data)->insert_id();
 		return $this->getOne($id);
 	}

    public function getAll($isArray = FALSE){
        return $this->db->get('categories')->result_array($isArray);
    }

 	public function getOne($id){
 		return $this->db->getwhere('categories',array( 'id' => $id)  );
 	}
}
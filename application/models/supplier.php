<?php defined('SYSPATH') or die('No direct script access.');
 
class Supplier_Model extends ORM {
 	
	protected $has_many = array('items','purchases'); 

 	public function insert($data){
 		$id = $this->db->insert('suppliers', $data)->inser_id();
 		return $this->getOne( $id );
 	}

    public function getOne($id){
        return $this->db->getwhere('suppliers',array( 'id' => $id ));
    }
    
    public function getAll($isArray = FALSE){
        return $this->db->get('suppliers')->result_array($isArray);
    }

 	

 	
}
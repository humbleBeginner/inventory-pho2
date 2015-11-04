<?php defined('SYSPATH') or die('No direct script access.');
 
class Item_Model extends ORM {
 	
	protected $belongs_to = ['category','supplier']; 
    protected $has_many = ['item_stocks'];

	public function insert($data){
		$id = $this->db->insert('items', $data)->insert_id();
		return $this->getOne( $id );
	}

	public function getOne($id){
		return $this->db->getwhere('items',['id' => $id]);
	}
 	
 	public function getAll($isArray = FALSE){
        $q = @"SELECT item_name, code, expiration_date, quantity FROM vw_purchase_details";
 		return $this->db->query($q)->result_array($isArray);
 	}

    public function getAllOnStock(){
        return $this->db->getwhere('vw_purchase_details',['quantity > ' => 0]);
    }

    public function getAllOutOfStock(){
        return $this->db->getwhere('item_stocks', ['quantity =' => 0]);
    }

    public function getAllExpired(){
        return $this->db->getwhere('item_stocks', ['expiration <' => \Carbon\Carbon::now()]);
    }
}
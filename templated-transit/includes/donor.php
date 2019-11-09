<?php
class Donor extends User{
	protected $donor_id;
	protected $tags;
	protected $account;

	public function __construct($first_name, $last_name, $email, $contact, $donor_id){
		parent::__construct($first_name, $last_name, $email, $contact);
		$this->donor_id = $donor_id;
		$this->tags = $tags;
		$this->account = $account;


	}

	
	public function get_id(){
		return $this->donor_id;
	}
	public function get_tags(){
		return $this->tags;
	}
	public function get_account(){
		return $this->account;
	}



	public function set_id($id){
		$this->donor_id = $id;
	}
	public function set_tags($tag){
		array_push($this->tags,$tag);
	}
	public function set_account($account){
		$this->account = $account;
	}



	public function getSignedInObj(){
		//
	}
}
?>
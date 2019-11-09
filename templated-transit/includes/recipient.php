<?php
class Recipient extends User{
	protected $recipient_id;
	protected $organization_name;
	protected $events;
	protected $account;

	public function __construct($first_name, $last_name, $email, $contact, $recipient_id, $organization_name){
		parent::__construct($first_name, $last_name, $email, $contact);
		$this->recipient_id = $recipient_id;
		$this->organization_name = $organization_name;
	}

	//getters
	public function get_id(){
		return $this->recipient_id;
	}


	//setters
	public function set_id($id){
		$this->recipient_id = $id;
	}



	public function getSignedInObj(){
		//
	}
	public function create_event(){
		//return event
	}
}
?>
<?php
class Recipient extends User{
	protected $admin_id;

	public function __construct($first_name, $last_name, $email, $contact, $admin_id){
		parent::__construct($first_name, $last_name, $email, $contact);
		$this->admin_id = $admin_id;
		$this->organization_name = $organization_name;
	}

	//getters
	public function get_id(){
		return $this->admin_id;
	}


	//setters
	public function set_id($id){
		$this->admin_id = $id;
	}


	//other functions
	public function getSignedInObj(){
		//
	}
	public function generate_report($event){
		//return event report obj
	}
	public function delete_account(){
		//through an event 
	}
	public function manage_event(){
		//alter atributes
	}
}
?>
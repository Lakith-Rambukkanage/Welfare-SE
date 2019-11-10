<?php
class User{
	//protected $user_id;
	protected $user_name;
	protected $email;
	protected $type;
	//protected $notifications;
	//protected $system;

	public function __construct($user_name, $email, $type/*, $sys*/){
		$this->user_name = $user_name;
		$this->email = $email;
		$this->type = $type;
		//$this->system = $sys;
	}

	
	public function get_id(){
		return $this->user_id;
	}
	public function get_email(){
		return $this->email;
	}
	public function get_first_name(){
		return $this->first_name;
		//echo $this->first_name;
	}
	public function get_last_name(){
		return $this->last_name;
	}
	public function get_contact_number(){
		return $this->contact;
	}
	public function get_type(){
		return $this->type;
	}





	public function set_id($id){
		$this->user_id = $id;
	}
	public function set_type($type){
		$this->type = $type;
	}
	public function set_email($email){
		$this->email = $email;
	}
	public function set_first_name($first_name){
		$this->first_name = $first_name;
		//echo $this->first_name;
	}
	public function set_last_name($last_name){
		$this->last_name = $last_name;
	}
	public function set_contact_number($contact_number){
		$this->contact = $contact_number;
	}
	public function send_notification($user,$msg){
		$this->sys->notify_user($user, $msg);
	}
	public function receive_notification($msg){
		$this->notification_center->push($msg);
	}
}
?>
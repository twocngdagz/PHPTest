<?php
require_once(SITE_ROOT.'database.php');

class Customer extends DatabaseObject {
	protected static $table_name = "customer_details";
	protected static $db_fields = array('id', 'first_name', 'last_name', 'address', 'city', 'state', 'phone', 'email');
	
	public $id;
	public $first_name;
	public $last_name;
	public $address;
	public $city;
	public $state;
	public $phone;
	public $email;
}
?>
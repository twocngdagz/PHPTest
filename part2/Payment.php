<?php
require_once(SITE_ROOT.'database.php');

class Payment extends DatabaseObject {
	protected static $table_name = "payment_details";
	protected static $db_fields = array('id', 'card_type', 'card_number', 'card_exp_date', 'verification_code');
	
	public $id;
	public $card_type;
	public $card_number;
	public $card_exp_date;
	public $verification_code;
}
?>
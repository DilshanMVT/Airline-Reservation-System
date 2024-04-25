<?php
require_once('../database/Database.php');
require_once('../interface/iTransaction2.php');
class Transaction extends Database implements iTransaction
 {

	
	
	public function getAllTransaction1()
	{
		$sql = "SELECT * FROM route ,destination,origin,fleet 
		where route.dest_id = destination.dest_id
		and route.org_id=origin.origin_id
		and route.aircraft_Id = fleet.aircraft_id
			";
		return $this->getRows($sql);
	}//end getAllTransaction



}//end class Transaction

$transaction = new Transaction();

/* End of file Transaction.php */
/* Location: .//D/xampp/htdocs/medallion/class/Transaction.php */



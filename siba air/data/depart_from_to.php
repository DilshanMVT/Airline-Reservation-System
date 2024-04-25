<?php 
require_once('database/Database.php');
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}
$db = new Database();
$orig = $_SESSION['origin'];
$desti = $_SESSION['destination'];

$sqlOrig = "SELECT *
			FROM origin
			WHERE origin_id = ?;
";
$origin = $db->getRow($sqlOrig, [$orig]);

$sqlDest = "SELECT *
			FROM destination
			WHERE dest_id = ?;
";
$dest = $db->getRow($sqlDest, [$desti]);

$sqlflight = "SELECT Route_name,model,make,d_time,a_time,t_time,on_day FROM route ,destination,origin,fleet 
            where route.dest_id = destination.dest_id
            and route.org_id=origin.origin_id
            and route.aircraft_Id = fleet.aircraft_id
            and destination.dest_id = ?
            and origin.origin_id= ?
    ";
$flght = $db->getRow($sqlflight,[$desti,$orig]);


$db->Disconnect();
<?php
try{
	$db = new PDO("mysql:host=localhost;dbname=crateberry", "crateberry" ,"B1@thering!");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(Exception $e){
	die($e->getMessage());
}

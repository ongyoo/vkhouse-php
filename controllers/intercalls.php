<?php 

require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/controllers/config.php";
// require_once LIB_BASE."intercall.class.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/intercalls.class.php";

function test_intercall() 
{
	 $intercall = new intercalls();
	 $data = $intercall->getDataintercall();
	// print_r($data); //exit();
	// echo $data;
	return $data;
}

function getProductAll() 
{
	 $intercall = new intercalls();

	 $data = $intercall->getProductAll();
	 //print_r($data); //exit();
	 //echo $data;
	return $data;
}

function test_intercallWhere($id) 
{
	 $intercall = new intercalls();

	 $data = $intercall->getDataintercallSearch($id);
	// print_r($data); //exit();
	// echo $data;
	return $data;
}

function get_user() 
{
	$intercall = new intercalls();
	$data = $intercall->getDatauser();
	//print_r($data); exit();
	return $data;
}

function getUserByID($id) 
{
	$intercall = new intercalls();
	$data = $intercall->getUserByID($id);
	//print_r($data); exit();
	return $data;
}

function get_company_where($id) 
{
	$intercall = new intercalls();
	$data = $intercall->getDatacompanySearch($id);
	//print_r($data); exit();
	return $data;
}	

function get_company() 
{
	$intercall = new intercalls();
	$data = $intercall->getDatacompany();
	//print_r($data); exit();
	return $data;
}	
function insert_user($name,$email,$password,$status){

	$intercall = new intercalls();
	// $intercall->insert_data($name);
	$intercall->insert_user($name,$email,$password,$status);
	// print_r($data); exit();
	//return $data;
	
}
function insert_intercall($detail,$intercall_id,$price,$company_id){

	$intercall = new intercalls();
	// $intercall->insert_data($name);
	$intercall->insert_intercall($detail,$intercall_id,$price,$company_id);
	// print_r($data); exit();
	//return $data;
	
}
function insert_companys($name,$detail,$url_img,$status){

	$intercall = new intercalls();
	// $intercall->insert_data($name);
	$intercall->insert_company($name,$detail,$url_img,$status);
	//print($name);
	//return $data;
	
}
function update_intercall($id,$detail,$intercall_id,$price,$company_id){

	$intercall = new intercalls();
	// $intercall->insert_data($name);
	$intercall->update_intercall($id,$detail,$intercall_id,$price,$company_id);
	//print($name);
	//return $data;
	
}

function update_user($id,$name,$email,$password,$status){

	$intercall = new intercalls();
	// $intercall->insert_data($name);
	$intercall->update_user($id,$name,$email,$password,$status);
	//print($name);
	//return $data;
	
}

function update_company($id,$name,$detail,$url_img,$status){

	$intercall = new intercalls();
	// $intercall->insert_data($name);
	$intercall->update_company($id,$name,$detail,$url_img,$status);
	//print($name);
	//return $data;
	
}

function login($email,$password) {

	$intercall = new intercalls();
	// $intercall->insert_data($name);
	$data = $intercall->getDatadminLogin($email,$password);
	//print($data);
	return $data;
	
}

function delete_intercall($id){

	$intercall = new intercalls();
	// $intercall->insert_data($name);
	$intercall->delete_intercall($id);
	//print($name);
	//return $data;
	
}
?>
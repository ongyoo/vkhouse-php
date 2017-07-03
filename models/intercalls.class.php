<?php 

// require_once "config.php";
// require_once "models/intercalls.class.php";


/*****test*****/
// 

/*****test*****/

// $mode = $_POST["mode"];
Class Intercalls{

// switch($mode){
// 	case "get_categorys" : {
// 		$p->getDataCategorys();
// 	}
// 	break;
// 	case "get_products" : {
// 		$p->getDataProducts();
// 	}
// 	break;
// }
	
function getDataintercall() 
{
	 require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
			 $db = new dbi();
			 
			 $arr = array();
			 $i = 0;
			 	
	 		 $db->clear();
			 $db->addfield("intercall.id");
			 $db->addfield("company.name");
		     // $db->addfield("intercall.detail");
		     $db->addfield("intercall.intercall_id");
		     $db->addfield("intercall.price");
		     $db->addfield("intercall.status");
		     $db->addfield("company.url_img");
		     $db->addfield("company_id");
		     

		     $db->table="intercall";
		     $db->addjoin("(intercall","company_id","company","id)","INNER");

			 $db->order = "id asc";
			 //echo $db->query2();exit();
			 if ($db->query()) {
	             while ($row = $db->getrow()) {
	             	 $arr[$i] = array(
					     'id'=>$row["id"],
					     'name'=>$row["name"],
					     // 'detail'=>$row["detail"],
					     'intercall_id'=>$row["intercall_id"],
					     'price'=>$row["price"],
					     'status'=>$row["status"],
					     'company_id'=>$row["company_id"],
					     'url_img'=>$row["url_img"]
					     
					 );
					 
					 $i++;
	             }
			}
			$db->close();
			//echo '{"intercall":'.json_encode($arr).'}';	
	return $arr;	
	}

	function getProductAll() 
{
	 require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
			 $db = new dbi();
			 
			 $arr = array();
			 $i = 0;	
			 	
	 		 $db->clear();
			 //$db->addfield("*");
			 $db->addfield("Product.Product_id");
			 $db->addfield("Product.Product_name");
			 $db->addfield("Product.Product_detail");
			 $db->addfield("Product.Product_price");
			 $db->addfield("Product.Product_price_day");
			 $db->addfield("Product.Product_redeem_code");
			 $db->addfield("Product.Product_isActive");
			 $db->addfield("Product.User_id");
			 $db->addfield("Product.Product_start_date_in");
			 $db->addfield("Product.Product_end_date_out");
			 $db->addfield("Product.Company_id");
			 $db->addfield("Product.Product_thumbnail");
			 $db->addfield("Status.Status_id");
			 $db->addfield("Status.Status_name");

			 $db->addfield("Users.identity");
			 $db->addfield("Users.first_name");
			 $db->addfield("Users.last_name");

			 // $db->addfield("Product_image.Product_img_id");
			 // $db->addfield("Product_image.Product_img_fileName");
			 // $db->addfield("Product_image.Product_id");
			 // $db->addfield("Product_image.Product_img_isActive");

		     
		     $db->table="Product";
		     $db->addjoin("(Product","Status_id","Status","Status_id)","INNER");
		  	 $db->addjoin("(Product","User_id","Users","identity)","INNER");
		  	 //$db->addjoin("(Product","Product_id","Product_image","Product_id)","INNER");
			 $db->order = "Product_id asc";

			 if ($db->query()) {
	             while ($row = $db->getrow()) {
	             	 $arr[$i] = array(
					     'Product_id'=>$row["Product_id"],
					     'Product_name'=>$row["Product_name"],
					     'Product_detail'=>$row["Product_detail"],
					     'Product_price'=>$row["Product_price"],
					     'Product_price_day'=>$row["Product_price_day"],
					     'Product_redeem_code'=>$row["Product_redeem_code"],
					     'Product_isActive'=>$row["Product_isActive"],
					     'Product_thumbnail'=>$row["Product_thumbnail"],
					     'User_id'=>$row["User_id"],
					     'Product_start_date_in'=>$row["Product_start_date_in"],
					     'Product_end_date_out'=>$row["Product_end_date_out"],
					     'Status_id'=>$row["Status_id"],
					     'Status_name'=>$row["Status_name"],
					     'Users_identity'=>$row["identity"],
					     'Users_first_name'=>$row["first_name"],
					     'Users_last_name'=>$row["last_name"],
					     // 'Product_img_id'=>$row["Product_img_id"],
					     // 'Product_img_fileName'=>$row["Product_img_fileName"],
					     // 'Product_img_isActive'=>$row["Product_img_isActive"],
					     'Company_id'=>$row["Company_id"]
					 );
					 
					 $i++;
	             }
			}
			$db->close();
			//echo '{"intercall":'.json_encode($arr).'}';	
	return $arr;	
	}	

	function getUserByID($id) 
{
	 require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
			 $db = new dbi();
			 
			 $arr = array();
			 $i = 0;
			 	
	 		 $db->clear();
			 $db->addfield("*");
		     $db->table="Users";
		     $db->addcon("UCASE(identity)", "=", $id);
			 //echo $db->query2();exit();
			 if ($db->query()) {
	             while ($row = $db->getrow()) {
	             	 $arr[$i] = array(
					     'identity'=>$row["identity"],
					     'email'=>$row["email"],
					     'password'=>$row["password"],
					     'first_name'=>$row["first_name"],
					     'last_name'=>$row["last_name"],
					     'address'=>$row["address"],
					     'telephone'=>$row["telephone"],
					     'card_id'=>$row["card_id"],
					     'role_id'=>$row["role_id"],
					     'company_id'=>$row["company_id"],
					     'create_date'=>$row["create_date"],
					     'card_thumbnail'=>$row["card_thumbnail"],
					     'profile_thumbnail'=>$row["profile_thumbnail"],
					     'user_isActive'=>$row["user_isActive"]
					 );
					 
					 $i++;
	             }
			}
			$db->close();
			//echo '{"intercall":'.json_encode($arr).'}';	
	return $arr;	
	}	


function getDatauser() 
{
	 require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
			 $db = new dbi();
			 
			 $arr = array();
			 $i = 0;	
			 	
	 		 $db->clear();
			 $db->addfield("*");
		     
		     $db->table="admin";
			 $db->order = "id asc";

			 if ($db->query()) {
	             while ($row = $db->getrow()) {
	             	 $arr[$i] = array(
					     'id'=>$row["id"],
					     'name'=>$row["name"],
					     'email'=>$row["email"],
					     'password'=>$row["password"],
					     'role'=>$row["role"],
					     'create_at'=>$row["create_at"],
					     'update_at'=>$row["update_at"],
					     'status'=>$row["status"]
					 );
					 
					 $i++;
	             }
			}
			$db->close();
			//echo '{"intercall":'.json_encode($arr).'}';	
	return $arr;	
	}

function getDatauserSearch($id)
{
	 require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
			 $db = new dbi();
			 
			 $arr = array();
			 $i = 0;	
			 	
	 		 $db->clear();
			 $db->addfield("*");
		     
		     $db->table="admin";
		     $db->addcon("UCASE(id)", "=", $id);
			 $db->order = "id asc";

			 if ($db->query()) {
	             while ($row = $db->getrow()) {
	             	 $arr[$i] = array(
					     'id'=>$row["id"],
					     'name'=>$row["name"],
					     'email'=>$row["email"],
					     'password'=>$row["password"],
					     'role'=>$row["role"],
					     'create_at'=>$row["create_at"],
					     'update_at'=>$row["update_at"],
					     'status'=>$row["status"]
					 );
					 
					 $i++;
	             }
			}
			$db->close();
			//echo '{"intercall":'.json_encode($arr).'}';	
	return $arr;	
	}

function getDatacompanySearch($id)
{
	 require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
			 $db = new dbi();
			 
			 $arr = array();
			 $i = 0;	
			 	
	 		 $db->clear();
			 $db->addfield("*");
		     
		     $db->table="company";
		     $db->addcon("UCASE(id)", "=", $id);
			 $db->order = "id asc";

			 if ($db->query()) {
	             while ($row = $db->getrow()) {
	             	 $arr[$i] = array(
					     'id'=>$row["id"],
					     'name'=>$row["name"],
					     'detail'=>$row["detail"],
					     'url_img'=>$row["url_img"],
					     'status'=>$row["status"]
					 );
					 
					 $i++;
	             }
			}
			$db->close();
			//echo '{"intercall":'.json_encode($arr).'}';	
	return $arr;	
	}

function getDatadminLogin($email,$password)
{
	 require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
			 $db = new dbi();
			 $arr = array();
			 $i = 0;	
	 		 $db->clear();
			 $db->addfield("*");
		     
		     $db->table="Users";
		     $db->addcon("UCASE(email)", "like", $email);
		     $db->addcon("UCASE(password)", "like", $password);
			 $db->order = "identity asc";

			 if ($db->query()) {
	             while ($row = $db->getrow()) {
	             	 $arr[$i] = array(
					     'identity'=>$row["identity"],
					     'email'=>$row["email"],
					     'password'=>$row["password"],
					     'first_name'=>$row["first_name"],
					     'last_name'=>$row["last_name"],
					     'address'=>$row["address"],
					     'telephone'=>$row["telephone"],
					     'card_id'=>$row["card_id"],
					     'role_id'=>$row["role_id"],
					     'company_id'=>$row["company_id"],
					     'create_date'=>$row["create_date"],
					     'card_thumbnail'=>$row["card_thumbnail"],
					     'profile_thumbnail'=>$row["profile_thumbnail"],
					     'user_isActive'=>$row["user_isActive"]
					     
					 );
					 
					 $i++;
	             }
			}
			$db->close();
			//echo '{"intercall":'.json_encode($arr).'}';	
	return $arr;	
	}

function getDatacompany() 
{
	 require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
			 $db = new dbi();
			 
			 $arr = array();
			 $i = 0;	
			 	
	 		 $db->clear();
			 $db->addfield("*");
		     
		     $db->table="company";
			 $db->order = "id asc";

			 if ($db->query()) {
	             while ($row = $db->getrow()) {
	             	 $arr[$i] = array(
					     'id'=>$row["id"],
					     'name'=>$row["name"],
					     'detail'=>$row["detail"],
					     'url_img'=>$row["url_img"],
					     'status'=>$row["status"]
					 );
					 
					 $i++;
	             }
			}
			$db->close();
			//print_r($arr);exit();
			//echo '{"intercall":'.json_encode($arr).'}';	
	return $arr;	
	}


//------insert
	function insert_user($name,$email,$password,$status) {
		require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
		$db = new dbi();
		   $db->clear();
           $db->dict["name"] = $name;
		   $db->dict["email"] = $email;
           $db->dict["password"] = $password;
           $db->dict["role"] = "0";
		   $db->dict["status"] = $status;
           $db->dict["create_at"] = date("Y-m-d H:i:s");
           $db->dict["update_at"] = date("Y-m-d H:i:s");
           $db->table="admin";
           $db->insert();
           //echo $db->query2();exit();
	}

	function insert_intercall($intercall_id,$price,$company_id) {
		require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
		$db = new dbi();
		   $db->clear();
           //$db->dict["name"] = $name;
           // $db->dict["detail"] = $detail;
           $db->dict["intercall_id"] = $intercall_id;
           $db->dict["price"] = $price;
           $db->dict["status"] = "0";
           $db->dict['company_id'] = $company_id;
           $db->table="intercall";
           $db->insert();

	}

	function insert_company($name,$detail,$url_img,$status) {
		require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
		$db = new dbi();
		   $db->clear();
           $db->dict["name"] = $name;
           $db->dict["detail"] = $detail;
           $db->dict["url_img"] = $url_img;
           $db->dict["status"] = $status;
           $db->table="company";
           $db->insert();

	}
//-------Update
	function update_intercall($id,$intercall_id,$price,$company_id) {
		require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
		$db = new dbi();
		$db->clear();
		// $db->dict["detail"] = $detail;
		$db->dict["intercall_id"] = $intercall_id;
		$db->dict["price"] = $price;
		$db->dict["company_id"] = $company_id;						         
		$db->table="intercall";
		$db->addcon("id", "=", $id);
		$db->update();	
		//echo $db->update();exit();

	}

	function update_user($id,$name,$email,$password,$status) {
		require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
		$db = new dbi();
		$db->clear();
		$db->dict["name"] = $name;
		$db->dict["email"] = $email;
		$db->dict["password"] = $password;
		$db->dict["status"] = $status;						         
		$db->table="admin";
		$db->addcon("id", "=", $id);
		$db->update();	
		//echo $db->update();exit();

	}

	function update_company($id,$name,$detail,$url_img,$status) {
		require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
		$db = new dbi();
		$db->clear();
		$db->dict["name"] = $name;
		$db->dict["detail"] = $detail;
		$db->dict["url_img"] = $url_img;
		$db->dict["status"] = $status;						         
		$db->table="company";
		$db->addcon("id", "=", $id);
		$db->update();	
		//echo $db->update();exit();

	}
	//-----Delete
	function delete_intercall($id) {
		require_once $_SERVER["DOCUMENT_ROOT"]."/vkhouse/models/dbi.class.php";
		$db = new dbi();
		$db->clear();
		// $db->dict["detail"] = $detail;				         
		$db->table="intercall";
		$db->addcon("id", "=", $id);
		$db->delete();	
		// echo $db->delete();exit();

	}
}
?>
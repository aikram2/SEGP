<?php

	//session_start();	

	require_once("DBconnect.php"); 

	function loggedIn(){
		//to check if the person is admin or not
		if(isset($_SESSION['username'])){

			return true;

		} else {

			return false;

		}

	}

	//to show the user profile
	function getUser_value($field_name){

		global $conn;

		//$user_id = $_SESSION['id'];

		$sql = "SELECT $field_name FROM Register WHERE id='$ID'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		return $row[$field_name];


	}
	
	//shopping cart functionality below
	
	function getip(){

  $ip = $_SERVER['REMOTE_ADDR'];


  if(!empty($_SERVER['HTTP_CLIENT_IP'])){
 
$ip = $_SERVER['HTTP_CLIENT_IP'];


  }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];


  }

return $ip;
}


//function for cart

function cart(){
  
  if(isset($_GET['addcart'])) {

global $conn;
$ip = getip();
$pro_id = $_GET['addcart'];

$checkpro = "select * from cart where ip_add = '$ip' AND p_id = '$pro_id'";
$run_checkpro = mysqli_query($con,$checkpro);


if(mysqli_num_rows($run_checkpro)>0){


  echo "";


}else{


  $insertpro = "insert into cart (p_id,ip_add) values ('$pro_id','$ip')";  


  $run_insertpro = mysqli_query($conn,$insertpro);


     



}



 

  }

}


?>
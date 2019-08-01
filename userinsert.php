<?php
include("config.php");
session_start();
if(isset($_POST['btnSubmit']))
	{
		$username = $_POST['username'];
		$email = $_POST['emailid'];
		$password = $_POST['Password'];
		$usertype=$_POST['usertype'];

		$name = $_FILES['fulImage']['name'];
 		$tmp_name = $_FILES['fulImage']['tmp_name'];
 		$check = getimagesize($_FILES["fulImage"]["tmp_name"]);

 		if($check !== false) {
 			$result = $mysqli->query("SELECT * from tbl_user");
 			while($row =mysqli_fetch_assoc($result))
 				{
 					if($name==$row['image'])
 						{ $error_img=5; }
 				}
 		if ($error_img!=5) 
		{		
		$insert=$mysqli->query("INSERT into tbl_user(id,name,user_name,password,usertype,image) value('','$username','$email','$password','$usertype','$name')");
		$location = 'profile/';
		move_uploaded_file($tmp_name, $location. $name);
		$_SESSION['sucess']="sucess";
		}
		else
		{
			$_SESSION['errors']="this image already in database";
		}

	}
	else
	{
		$_SESSION['file_types']="selected file is not image please select an image.";
	}
	header("location:createuser");

}
?>
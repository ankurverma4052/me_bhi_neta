<?php
if(!isset($_SESSION)){session_start();}
if(empty($_SESSION['uname'])) {
  header("location:login.php");
}
include("config.php");

if(isset($_POST['btnjobpost']))
{
	$jobtitle= addslashes($_POST['jobtitle']);
	$position= addslashes($_POST['position']);
	$keyskill= addslashes($_POST['keyskill']);
	$containt= addslashes($_POST['containt']);
	$salary =$_POST['salary'];
	$exprience =$_POST['exprience'];
	$location = $_POST['location'];
	$opening = $_POST['opening'];


 	$name = $_FILES['fulImage']['name'];
 	$tmp_name = $_FILES['fulImage']['tmp_name'];
 	$check = getimagesize($_FILES["fulImage"]["tmp_name"]);


 if($check !== false)
 {
  $results = $mysqli->query("SELECT * from containt");
  while($row =mysqli_fetch_assoc($results))
  	{
  		if($name==$row['image'])
  		{ $error_img=5; }
	 }

	 if ($error_img!=5)
	 {
	 $result=$mysqli->query("INSERT INTO job_post(id,job_title,position,keyskill,description,salary,experience,location,opening,img) values('','$jobtitle','$position','$keyskill','$containt','$salary','$exprience','$location','$opening','$name')");
	 $location = 'uploads/';
	 move_uploaded_file($tmp_name, $location. $name);
	 $_SESSION['suc']="data inserted sucessfully";
	 }
	 if($error_img==5)
	 {
	 $_SESSION['error_img']="this img name already in db plz change name";
	 }

 else
 {
 	$_SESSION['file_type']="selected file is not an image";
 }
}
 header("location:job_posting");
	}
?>
<?php
if(!isset($_SESSION)){session_start();}
if(empty($_SESSION['uname'])) {
  header("location:login.php");
}
include("config.php");

if(isset($_POST['btnaspiring']))
{
	$contenttitle =mysql_real_escape_string($_POST['contenttitle']);
	$containt = mysql_real_escape_string($_POST['containt']);
	$dat=time();

 	$name = $_FILES['fulImage']['name'];
 	$tmp_name = $_FILES['fulImage']['tmp_name'];
 	$check = getimagesize($_FILES["fulImage"]["tmp_name"]);

 if($check !== false)
 {
  $results = $mysqli->query("SELECT * from prominent_leaders");
  while($row =mysqli_fetch_assoc($results))
  	{
  		if($name==$row['image'])
  		{ $error_img=5; }
	 }

	 if ($error_img!=5)
	 {
	 $result=$mysqli->query("INSERT INTO prominent_leaders(id,title,description,img,dats) values('','$contenttitle','$containt','$name','$dat')");
	 $location = 'uploadprominent/';
	 move_uploaded_file($tmp_name, $location. $name);
	 $_SESSION['suc']="data inserted sucessfully";
	 }
	 if($error_img==5)
	 {
	 $_SESSION['error_img']="this img name already in db plz change name";
	 }
}
 else
 {
 	$_SESSION['file_type']="selected file is not an image";
 }


	}
	 header("location:prominent.php");
?>
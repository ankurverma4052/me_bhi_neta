<?php
if(!isset($_SESSION)){session_start();}
if(empty($_SESSION['uname'])) {
  header("location:login.php");
}
include("config.php");


if(isset($_POST['txttitle'])&&($_POST['containt']))
{
	$ids=$_SESSION['id'];
	$dat=date();
	$title=$_POST['txttitle'];
	$containt=$_POST['containt'];
 	$name = $_FILES['fulImage']['name'];
 	$tmp_name = $_FILES['fulImage']['tmp_name'];
 	$check = getimagesize($_FILES["fulImage"]["tmp_name"]);
if($check !== false)
{
	
  $results = $mysqli->query("SELECT * from usercon");
 while($row =mysqli_fetch_assoc($results))
  	{
  		if($name==$row['image'])
  		{ $error_img=5; }
	 }

	 if ($error_img!=5)
	 {
	 $result=$mysqli->query("INSERT INTO usercon(id,title,content,image,add_by,dat) values('','$title','$containt','$name','$ids','$dat')");
	 $location = 'conuploads/';
	 move_uploaded_file($tmp_name, $location. $name);
	 $_SESSION['succed']="data inserted sucessfully";
	 }
	 if($error_img==5)
	 {
	 $_SESSION['errord_img']="this img name already in db plz change name";
	 }
}
else
{
	$_SESSION['file_type']="selected file is not an image";
}
}
 header("location:write_blog.php");
?>
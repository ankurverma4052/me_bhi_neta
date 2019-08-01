<?php
if(!isset($_SESSION)){session_start();}
include("config.php");
if(isset($_POST['sublog']))
{

	if(!empty($_POST['uname']) && ($_POST['password']))
	{
	$uname=$_POST['uname'];
	$password=$_POST['password'];

	$result=$mysqli->query("SELECT * FROM tbl_user where user_name='$uname' and password='$password'");
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$_SESSION['uname']=$row['user_name'];
			$_SESSION['utype']=$row['usertype'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['image'] = $row['image'];
			header("location:admin");
		}
	}
	else
	{
		$_SESSION['error']="Invalid User Name And Password";
		header("location:login");
	}	
}
else
	{
		$_SESSION['err']="please fill email id and password";
		header("location:login");
	}	

}
?>
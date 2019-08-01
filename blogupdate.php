<?php
include("config.php");
 if(isset($_POST['title']) && ($_POST['containt']) && ($_POST['id']) )
 	{
 		
 	$title = $_POST['title'];
 	$id= $_POST['id'];
 	$containt = $_POST['containt'];
	
 	$result=$mysqli->query("update usercon set title='$title', content='$containt' where id='$id'");
 	if($result)
 	{
	echo "1";
	}
	}
?>
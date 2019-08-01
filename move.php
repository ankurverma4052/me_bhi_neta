<?php
if(!isset($_SESSION)){session_start();}
if(empty($_SESSION['uname'])) {
  header("location:login.php");
}
include("config.php");

if(isset($_POST['ids']))
{
	$id=$_POST['ids'];
	$result=$mysqli->query("select * from usercon where id='$id'");
	while($row = mysqli_fetch_assoc($result))
	{
		$title = $row['title'];
		$content = $row['content'];
		$image = $row['image'];
		$date = $row['date'];
	}

	$sec=$mysqli->query("insert into containt(id,title,content,image)value('','$title','$content','$image')");
	if($sec)
	{
		$fup=$mysqli->query("update usercon set status='1' where id='$id'");
	}

echo "1";
}
?>
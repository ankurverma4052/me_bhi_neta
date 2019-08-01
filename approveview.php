<?php
 include("config.php");
 include("include/head.php");
 if(isset($_POST['ids']))
 	{
 		$id = $_POST['ids'];
 		$result=$mysqli->query("select * from usercon where id='$id'");
 		while($row = mysqli_fetch_assoc($result))
 		{?>

 		<div class="page-content container-fluid">
          <div class="">
            <div class="">
              <h2 class="widget-title"><center>Blog List</center></h2>
              <h4><?php echo $row['title'].' '.$row['date']; ?></h4>
              <?php echo '<img class="img-responsive" src="uploads/'.$row['image'].'">.<br>';?>
              <h5><?php echo $row['content']; ?></h5>

            </div>
          </div>
        </div>
 			
 		<?php }
	}


  if(isset($_POST['idss']))
  {
    $id = $_POST['idss'];
    $result=$mysqli->query("select * from containt where id='$id'");
    while($row = mysqli_fetch_assoc($result))
    {?>

    <div class="page-content container-fluid">
          <div class="">
            <div class="">
              <h2 class="widget-title"><center>Blog List</center></h2>
              <h4><?php echo $row['title'].' '.$row['date']; ?></h4>
              <?php echo '<img class="img-responsive" src="uploads/'.$row['image'].'">.<br>';?>
              <h5><?php echo $row['content']; ?></h5>

            </div>
          </div>
        </div>
      
    <?php }
  }
?>
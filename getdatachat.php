<?php include ('config.php');
?>
<?php
if(!isset($_SESSION)){session_start();}
if(empty($_SESSION['uname'])) {
  header("location:login.php");
  }

?>
<div class="messagess"> 
  <?php
    
$callid = $_POST['id'];
$try="select * from tbl_user where id='".$callid."'";
$try1 = mysqli_query($mysqli,$try);
while($ro=mysqli_fetch_array($try1))
{
   $_SESSION['iids'] = $ro['id'];

   $_SESSION['agent']=$ro['name'];
}
?>







<?php

$select = "select * from chat where to_user='".$_SESSION['id']."' and from_user='".$_SESSION['iids']."' 
     UNION ALL
    select * from chat where from_user='".$_SESSION['id']."' and to_user='".$_SESSION['iids']."' ORDER BY added ASC";
$run    =   mysqli_query($mysqli,$select);

while($mr = mysqli_fetch_array($run))
{
    
?>

  <?php if($mr['to_user']==$_SESSION['id']) { ?>
   <div class="message-body">
          <div class="col-sm-12 message-main-receiver">
            <div class="receiver">
              <div class="message-text">
               <?php echo $mr['msg'] ?>
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>
        
        <?php } else { ?>
         <div class="message-body">
          <div class="col-sm-12 message-main-sender">
            <div class="sender">
              <div class="message-text">
                  <?php echo $mr['msg'] ?>
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>
        <?php } ?>

<?php }?>







<?php
if(isset($_POST['ref']))
{
$select = "select * from chat where to_user='".$_SESSION['id']."' and from_user='".$_SESSION['iids']."' 
     UNION ALL
    select * from chat where from_user='".$_SESSION['id']."' and to_user='".$_SESSION['iids']."' ORDER BY added ASC";
$run    =   mysqli_query($mysqli,$select);

while($mr = mysqli_fetch_array($run))
{
    
?>

  <?php if($mr['to_user']==$_SESSION['id']) { ?>
   <div class="message-body">
          <div class="col-sm-12 message-main-receiver">
            <div class="receiver">
              <div class="message-text">
               <?php echo $mr['msg'] ?>
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>
        
        <?php } else { ?>
         <div class="message-body">
          <div class="col-sm-12 message-main-sender">
            <div class="sender">
              <div class="message-text">
                  <?php echo $mr['msg'] ?>
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>
        <?php } ?>

<?php }}?>











<?php
if(isset($_POST['msg']) && !empty($_POST['msg']))
{
$msg = $_POST['msg'];
 $today = time();

   $test="insert into chat(id,to_user,from_user,msg,added)value('','".$_SESSION['iids']."','".$_SESSION['id']."','".$msg."','$today')";
$test1=mysqli_query($mysqli,$test);

$select = "select * from chat where to_user='".$_SESSION['id']."' and from_user='".$_SESSION['iids']."' 
     UNION ALL
    select * from chat where from_user='".$_SESSION['id']."' and to_user='".$_SESSION['iids']."' ORDER BY added asc";
$run    =   mysqli_query($mysqli,$select);

while($mr = mysqli_fetch_array($run))
{

?>
  <?php if($mr['to_user']==$_SESSION['id']) { ?>
   <div class="message-body">
          <div class="col-sm-12 message-main-receiver">
            <div class="receiver">
              <div class="message-text">
               <?php echo $mr['msg'] ?>
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>
        
        <?php } else { ?>
         <div class="message-body">
          <div class="col-sm-12 message-main-sender">
            <div class="sender">
              <div class="message-text">
                  <?php echo $mr['msg'] ?>
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>
        <?php } ?>
<?php } }  ?>

</div> 

















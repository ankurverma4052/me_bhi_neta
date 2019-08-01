<?php
if(!isset($_SESSION)){session_start();}
if(empty($_SESSION['uname'])) {
  header("location:login.php");
}
include("config.php");
include("include/head.php");

if(isset($_POST['ids']))
{
	$ids = $_POST['ids'];
	$result= $mysqli->query("select * from usercon where id ='$ids'");
	while($row=mysqli_fetch_assoc($result))
	{?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/lib/sweet-alert.css">
 <div class="page-content container-fluid">
          <div class="widget">
            <div class="widget-heading">
              <h3 class="widget-title">Vertical Form</h3>
            </div>
            <div class="widget-body">
              <form id="form-vertical" method="post" novalidate="novalidate" action="" enctype="multipart/form-data">
                <input type="hidden" id="ids" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                  <label for="txttitle">Title</label>
                  <input id="txttitle" type="text" name="txttitle" value="<?php echo $row['title']; ?>" data-rule-required="true" data-rule-rangelength="[10,20]" data-rule-text="true" class="form-control">
                </div>
              
                <div class="form-group">
                  <label for="textarea">containt</label>
                  <textarea id="containt" name="containt" value="" data-rule-required="true" data-rule-rangelength="[10,20]" data-rule-text="true" class="form-control"><?php echo $row['content']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="fulImage">Image upload</label>
                  <input id="fulImage" type="file" name="fulImage" data-buttontext="Choose file" data-buttonname="btn-outline btn-primary" data-iconname="ti-image" data-rule-required="true" data-rule-accept="image/*" class="filestyle">
                </div>
                <button type="button" name="btnSubmit" id="btnsubmit" class="btn btn-raised btn-black">Submit</button>
              </form>
            </div>
        </div>
        <div class="footer">2018 &copy;  <a href="">Mebhineta - Responsive Web App Kit</a> by <a href="" target="_blank">Lethemes.</a></div>
      </div>
      <?php 	}
}
    echo '
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                                  <script type="text/javascript">
                                    $(document).ready(function()
                                    {
                                         $("#btnsubmit").click(function(){
                                       
                                      var title =$("#txttitle").val();
                                      var containt=$("#containt").val();
                                      var id=$("#ids").val();



                                        $.ajax({
                                type: "POST",
                                url: "blogupdate.php",
                                data: {title:title,
                                      id:id,
                                      containt:containt},
                              success: function(data)
                                {
                                  if(data=="1")
                                  {
                                       swal("Good job!", "You clicked the button!", "success");

                                  }

                                } 
                                    });
                            
                                 });
                             });
                             </script>';
?>

 <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Animo.js-->
    <script type="text/javascript" src="plugins/animo.js/animo.min.js"></script>
    <!-- Bootstrap Progressbar-->
    <script type="text/javascript" src="plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- jQuery Easy Pie Chart-->
    <script type="text/javascript" src="plugins/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <!-- Sweet Alert-->
    <script type="text/javascript" src="plugins/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
    <!-- Code Prettify-->
    <script type="text/javascript" src="plugins/code-prettify/src/run_prettify.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/first-layout/app.js"></script>
    <script type="text/javascript" src="build/js/first-layout/demo.js"></script>
    <script type="text/javascript" src="build/js/page-content/indicators/sweet-alert.js"></script>
<?php 
if(!isset($_SESSION)){session_start();}
if(empty($_SESSION['uname'])) {
  header("location:login.php");
}
 // if($_SESSION['utype']!="admin") {
 //   header("location:login.php");
 // }
?>
<!DOCTYPE html>
<html lang="en">
  <?php include("include/head.php") ?>
  <body data-sidebar-color="sidebar-light" class="sidebar-light">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Header start-->
  <?php include("include/header.php") ?>
    <!-- Header end-->
    <div class="main-container">
      <!-- Main Sidebar start-->
   <?php include("include/mainslide.php") ?>
      <!-- Main Sidebar end-->
      <div class="page-container">
        <div class="page-header clearfix">
          <div class="row">
            <div class="col-sm-6">
              <h4 class="mt-0 mb-5">Welcome to Me Bhi Neta </h4>
              <p class="text-muted mb-0">Adminal Panel</p>
            </div>
            <div class="col-sm-6">
              <div class="btn-group mt-5">
                <button type="button" class="btn btn-default btn-outline"><i class="flag-icon flag-icon-us mr-5"></i> English</button>
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
                  <li><a href="#"><i class="flag-icon flag-icon-de mr-5"></i> German</a></li>
                  <li><a href="#"><i class="flag-icon flag-icon-fr mr-5"></i> French</a></li>
                  <li><a href="#"><i class="flag-icon flag-icon-es mr-5"></i> Spanish</a></li>
                  <li><a href="#"><i class="flag-icon flag-icon-it mr-5"></i> Italian</a></li>
                  <li><a href="#"><i class="flag-icon flag-icon-jp mr-5"></i> Japanese</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="page-content container-fluid">
          <div class="widget">
            <div class="widget-heading">
              <h3 class="widget-title">Blog List</h3>
            </div>
            <div class="widget-body">
              <form>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtProductName">Post By Name</label>
                      <input id="txtProductName" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtPrice">Date</label>
                      <input id="txtPrice" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="ddlStatus">Status</label>
                      <select id="ddlStatus" class="form-control">
                        <option value="">Choose</option>
                        <option value="1">Live</option>
                        <option value="0">Panding</option>
                        <option value="2">Reject</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtModel">Model</label>
                      <input id="txtModel" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="txtPrice">Quantity</label>
                      <input id="txtQuantity" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <button type="submit" class="mb-15 btn btn-raised btn-success">Filter</button>
              </form>
              <table id="product-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                <thead>
                  <tr>
                    <th class="text-center">
                      <div class="checkbox-custom">
                        <input id="checkAll" type="checkbox" value="option1">
                        <label for="checkAll" class="pl-0">&nbsp;</label>
                      </div>
                    </th>
                    <th>Image</th>
                    <th>Post By</th>
                    <th>title</th>
                    <th class="text-right">Containt</th>
                    <th class="text-right">Date</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
            

                    <?php 
                    include("config.php");

                    $result=$mysqli->query("select * from usercon where add_by='$_SESSION[id]'");
                    while($row=mysqli_fetch_assoc($result))
                    {?>

                  <tr>
                    <td class="text-center">
                      <div class="checkbox-custom">
                        <input id="product-01" type="checkbox" value="01">
                        <label for="product-01" class="pl-0">&nbsp;</label>
                      </div>
                    </td>
                  
                    <td class="text-center"><img src="build/images/products/01.jpg" width="50" alt="" class="img-thumbnail img-responsive"></td>
                    <td>prem ranjan</td>
                    <td><?php echo $row['title']; ?></td>
                    <td class="text-right"><?php echo $row['content'] ?></td>
                    <td class="text-right"><?php echo $row['date'] ?></td>
                    <td><?php if($row['status']==0) { echo '<span class="label label-warning">pending</span>'; }
                    else
                    {
                      echo '<span class="label label-success">Live</span>';
                    }
                     ?></td>
                    
                    <td class="text-center">
                      <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                        <?php 
                        echo '<button type="button" id="'.$row['id'].'" value="'.$row['id'].'" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-outline btn-primary"><i class="ti-eye"></i></button>';?>

                        <?php echo '<button type="button" id="u'.$row['id'].'" value="'.$row['id'].'" data-toggle="modal" data-target=".bs-example-modal-lg1" class="btn btn-outline btn-success"><i class="ti-pencil"></i></button>';?>

                      

                      

                      </div>
                    </td>
                  </tr>

                  <?php 
                   echo '
                                  <script>

                                    $(document).ready(function()
                                    {
                                         $("#'.$row['id'].'").click(function(){
                                        
                                      var eb =$("#'.$row['id'].'").val();

                                        $.ajax({
                                type: "POST",
                                url: "approveview.php",
                                data: {ids:eb},
                              success: function(data)
                                {
                                    $("#resultview").html(data);
                                } 
                                    });
                            
                                 });
                             });
                             </script>';

                             //for delete

                           echo ' 
                        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                                    <script type="text/javascript">
                                    $(document).ready(function()
                                    {
                                         $("#d'.$row['id'].'").click(function(){
                                        swal({
                                        title: "Are you sure?",
                                        text: "Once deleted, you will not be able to recover this imaginary file!",
                                        icon: "warning",
                                        buttons: true,
                                        dangerMode: true,
                                    })
                                    .then((willDelete) => {
                                      if (willDelete) 

                                      {
                                      var eb =$("#d'.$row['id'].'").val();

                                        $.ajax({
                                type: "POST",
                                url: "delete.php",
                                data: {dd:eb},
                              success: function(data)
                                {
                                        swal("Poof! Your imaginary file has been deleted!", {
                                          icon: "success",
                                        });
                                        window.location.href = window.location.href
                                    }});
                                      } else {
                                        swal("Your imaginary file is safe!");
                                      }
                                    });
                            
                                 });
                             });
                             </script>';

                             //for update.
                            echo '<script>

                                    $(document).ready(function()
                                    {
                                         $("#u'.$row['id'].'").click(function(){
                                        
                                      var eb =$("#u'.$row['id'].'").val();

                                        $.ajax({
                                type: "POST",
                                url: "approveupdate.php",
                                data: {ids:eb},
                              success: function(data)
                                {
                                    $("#update").html(data);
                                } 
                                    });
                            
                                 });
                             });
                             </script>';
                             //to move data

                               echo '<script>

                                    $(document).ready(function()
                                    {
                                         $("#a'.$row['id'].'").click(function(){
                                        
                                      var eb =$("#a'.$row['id'].'").val();

                                        $.ajax({
                                type: "POST",
                                url: "move.php",
                                data: {ids:eb},
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


                } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

                <!--Model for popup-->
                <div class="col-md-3 col-sm-6">
                  <div tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          <h6 id="myLargeModalLabel" class="modal-title">View Blog</h6>
                        </div>
                        <div class="modal-body" id="resultview">
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-raised btn-default">Close</button>
                          <button type="button" class="btn btn-raised btn-black">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 col-sm-6">
                  <div tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg1">
                    <div role="document" class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          <h6 id="myLargeModalLabel" class="modal-title">View Blog</h6>
                        </div>
                        <div class="modal-body" id="update">
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-raised btn-default">Close</button>
                          <button type="button" class="btn btn-raised btn-black">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



        <div class="footer">2016 &copy;  <a href="http://themeforest.net/item/umega-responsive-web-app-kit/15482080">Umega - Responsive Web App Kit</a> by <a href="http://themeforest.net/user/lethemes" target="_blank">Lethemes.</a></div>
      </div>
      <!-- Right Sidebar start-->
     <?php include("include/chat.php"); ?>
      <!-- Right Sidebar end-->
    </div>
    <!-- Demo Settings start-->
    <div class="setting closed"><a href="javascript:;" class="setting-toggle fs-16"><i class="ti-palette text-muted"></i></a>
      <h5 class="fs-16 mt-0 mb-20">Header Colors</h5>
      <ul class="list-inline">
        <li><a href="javascript:;" data-color="header-primary" class="mo-xs bg-primary inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-green" class="mo-xs bg-success inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-purple" class="mo-xs bg-purple inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-yellow" class="mo-xs bg-warning inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-red" class="mo-xs bg-danger inline-block img-circle header-color"></a></li>
      </ul>
      <h5 class="fs-16 mt-0 mb-20">Sidebar Style</h5>
      <ul class="list-inline">
        <li><a href="javascript:;" data-color="sidebar-dark" class="sidebar-color mo-xs bg-black inline-block img-circle"></a></li>
        <li><a href="javascript:;" data-color="sidebar-light" class="sidebar-color mo-xs bg-default inline-block img-circle"></a></li>
      </ul>
      <form class="form-horizontal mb-20">
        <div class="clearfix">
          <p class="form-control-static pull-left">Background Image</p>
          <div class="switch pull-right">
            <input id="sidebar-bg" type="checkbox" checked="">
            <label for="sidebar-bg" class="switch-success"></label>
          </div>
        </div>
      </form>
      <ul class="list-inline mb-0">
        <li><a href="javascript:;" data-bg="10.jpg" class="inline-block sidebar-bg"><img src="build/images/thumbnails/10.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="11.jpg" class="inline-block sidebar-bg"><img src="build/images/thumbnails/11.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="12.jpg" class="inline-block sidebar-bg"><img src="build/images/thumbnails/12.jpg" width="60" alt="" class="img-rounded"></a></li>
      </ul>
    </div>
    <!-- Demo Settings end-->
    <!-- jQuery-->
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
    <!-- Toastr-->
    <script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
    <!-- MomentJS-->
    <script type="text/javascript" src="plugins/moment/min/moment.min.js"></script>
    <!-- jQuery BlockUI-->
    <script type="text/javascript" src="plugins/blockUI/jquery.blockUI.js"></script>
    <!-- jQuery Counter Up-->
    <script type="text/javascript" src="plugins/jquery-waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="plugins/Counter-Up/jquery.counterup.min.js"></script>
    <!-- Jvector Map-->
    <script type="text/javascript" src="plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script type="text/javascript" src="plugins/jvectormap/maps/jquery-jvectormap-world-mill.js"></script>
    <!-- Flot Charts-->
    <script type="text/javascript" src="plugins/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="plugins/flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="plugins/flot.curvedlines/curvedLines.js"></script>
    <script type="text/javascript" src="plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <!-- Morris Chart-->
    <script type="text/javascript" src="plugins/raphael/raphael-min.js"></script>
    <script type="text/javascript" src="plugins/morris.js/morris.min.js"></script>
    <!-- DataTables-->
    <script type="text/javascript" src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jszip/dist/jszip.min.js"></script>
    <script type="text/javascript" src="plugins/pdfmake/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="plugins/pdfmake/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <!-- jQuery UI-->
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- FullCalendar-->
    <script type="text/javascript" src="plugins/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- jQuery MiniColors-->
    <script type="text/javascript" src="plugins/jquery-minicolors/jquery.minicolors.min.js"></script>
    <!-- Bootstrap Date Range Picker-->
    <script type="text/javascript" src="plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/first-layout/app.js"></script>
    <script type="text/javascript" src="build/js/first-layout/demo.js"></script>
    <script type="text/javascript" src="build/js/page-content/e-commerce/product-list.js"></script>
  </body>
</html>
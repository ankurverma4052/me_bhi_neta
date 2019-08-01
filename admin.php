<?php 
if(!isset($_SESSION)){session_start();}
if(empty($_SESSION['uname'])) {
  header("location:login");
}
 // if($_SESSION['utype']!="admin") {
 //   header("location:login");
 // }
?>
<!DOCTYPE html>
<html lang="en">
  <?php include("include/head.php"); ?>
  <body data-sidebar-color="sidebar-light" class="sidebar-light">
    <!-- Header start-->
  <?php include("include/header.php"); ?>
    <!-- Header end-->
    <div class="main-container">
      <!-- Main Sidebar start-->
   <?php include("include/mainslide.php"); ?>
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
          <div class="row">
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
    <script type="text/javascript" src="build/js/page-content/dashboard/index.js"></script>
  </body>
</html>
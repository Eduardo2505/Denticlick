<!DOCTYPE html>

<html lang="es">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
 <?php $this->load->view('plantilla/head') ?>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header -i navbar navbar-fixed-top">
  <!-- BEGIN HEADER INNER -->
 <?php echo $barra; ?>
  <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
  <!-- BEGIN SIDEBAR -->
      <?php echo $menu; ?>
  <!-- END SIDEBAR -->
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <div class="page-content">
      
      
      <div class="row margin-top-5">
        <div class="col-md-12">
          <!-- BEGIN PROFILE SIDEBAR -->
          <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet">
              <!-- SIDEBAR USERPIC -->
              <div class="profile-userpic">
                <img src="../../assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
              </div>
              <!-- END SIDEBAR USERPIC -->
              <!-- SIDEBAR USER TITLE -->
              <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                   Marcus Doe
                </div>
                <div class="profile-usertitle-job">
                   Developer
                </div>
              </div>
              <!-- END SIDEBAR USER TITLE -->
              <!-- SIDEBAR BUTTONS -->
              <div class="profile-userbuttons">
                <button type="button" class="btn btn-circle green-haze btn-sm">Follow</button>
                <button type="button" class="btn btn-circle btn-danger btn-sm">Message</button>
              </div>
              <!-- END SIDEBAR BUTTONS -->
              <!-- SIDEBAR MENU -->
              <div class="profile-usermenu">
                <ul class="nav">
                  <li class="active">
                    <a href="extra_profile.html">
                    <i class="icon-home"></i>
                    Overview </a>
                  </li>
                  <li>
                    <a href="extra_profile_account.html">
                    <i class="icon-settings"></i>
                    Account Settings </a>
                  </li>
                  <li>
                    <a href="page_todo.html" target="_blank">
                    <i class="icon-check"></i>
                    Tasks </a>
                  </li>
                  <li>
                    <a href="extra_profile_help.html">
                    <i class="icon-info"></i>
                    Help </a>
                  </li>
                </ul>
              </div>
              <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <div class="portlet light">
              <!-- STAT -->
              <div class="row list-separated profile-stat">
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <div class="uppercase profile-stat-title">
                     37
                  </div>
                  <div class="uppercase profile-stat-text">
                     Projects
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <div class="uppercase profile-stat-title">
                     51
                  </div>
                  <div class="uppercase profile-stat-text">
                     Tasks
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6">
                  <div class="uppercase profile-stat-title">
                     61
                  </div>
                  <div class="uppercase profile-stat-text">
                     Uploads
                  </div>
                </div>
              </div>
              <!-- END STAT -->
              <div>
                <h4 class="profile-desc-title">About Marcus Doe</h4>
                <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                <div class="margin-top-20 profile-desc-link">
                  <i class="fa fa-globe"></i>
                  <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                </div>
                <div class="margin-top-20 profile-desc-link">
                  <i class="fa fa-twitter"></i>
                  <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                </div>
                <div class="margin-top-20 profile-desc-link">
                  <i class="fa fa-facebook"></i>
                  <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                </div>
              </div>
            </div>
            <!-- END PORTLET MAIN -->
          </div>
          <!-- END BEGIN PROFILE SIDEBAR -->
          <!-- BEGIN PROFILE CONTENT -->
          <div class="profile-content">
            <div class="row">
              <div class="col-md-12">
                <!-- BEGIN PORTLET -->
                <div class="portlet light ">
                  xxx
                  
                  
                  
                  
                </div>
                <!-- END PORTLET -->
              </div>
              
              
              
            </div>
            
            
          
          </div>
          <!-- END PROFILE CONTENT -->
        </div>
      </div>
      <!-- END PAGE CONTENT-->
    </div>
  </div>
  <!-- END CONTENT -->
  <!-- BEGIN QUICK SIDEBAR -->
  
  <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
  <div class="page-footer-inner">
     2014 &copy; Metronic by keenthemes.
  </div>
  <div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
  </div>
</div>

<?php $this->load->view('plantilla/script') ?>


</body>
<!-- END BODY -->
</html>
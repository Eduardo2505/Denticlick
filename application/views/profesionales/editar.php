<!DOCTYPE html>

<html lang="es">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <?php $this->load->view('plantilla/head') ?>
  <link href="<?php echo site_url('') ?>metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo site_url('') ?>metronic/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo site_url('') ?>metronic/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content  page-container-bg-solid">
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


    <?php echo $menu; ?>


    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
      <div class="page-content">

        <!-- END PAGE HEADER-->
        
        <!-- BEGIN PAGE CONTENT-->


        <div class="row">

          <div class="col-md-12">

            <form action="#" class="form-horizontal">
              <div class="form-body">
                <!-- BEGIN PROFILE SIDEBAR -->
                <div class="profile-sidebar">
                  <!-- PORTLET MAIN -->
                  <div class="portlet light profile-sidebar-portlet">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                      <img src="<?php echo site_url('') ?>metronic/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">

                      <div class="profile-usertitle-job">
                       Foto 
                     </div>
                   </div>
                   <!-- END SIDEBAR USER TITLE -->
                   <!-- SIDEBAR BUTTONS -->

                   <!-- END SIDEBAR BUTTONS -->
                   <!-- SIDEBAR MENU -->
                   <div class="profile-usermenu">
                    <div class="col-md-12">
                     <h4 class="profile-desc-title">Fecha de nacimiento</h4>
                   </div>

                   <div class="form-group">
                    <label class="col-md-1"></label>
                    <div class="col-md-3">
                     <select class=" input-circle">
                      <option> Día</option>
                      <option> 2</option>
                      <option> 3</option>
                      <option> 4</option>
                      <option> 5</option>
                    </select>

                  </div>
                  <div class="col-md-3">
                   <select class="input-circle">
                     <option> Mes</option>
                     <option> 2</option>
                     <option> 3</option>
                     <option> 4</option>
                     <option> 5</option>
                   </select>

                 </div>
                 <div class="col-md-3">
                   <select class="input-circle">
                    <option> Año</option>
                    <option> 2</option>
                    <option> 3</option>
                    <option> 4</option>
                    <option> 5</option>
                  </select>

                </div>

              </div>
              <div class="form-group">
                <label class="col-md-3"></label>
                <div class="col-md-8">
                  <div class="input-group">
                    <div class="icheck-inline">
                      <label>
                        <input type="radio" name="radio2" class="form-control input-circle" data-radio="iradio_square-grey">Hombre </label>
                        <label>
                          <input type="radio" name="radio2" checked class="form-control input-circle" data-radio="iradio_square-grey"> Mujer</label>

                        </div>
                      </div>
                    </div>


                  </div>




                </div>
                <!-- END MENU -->
              </div>
              <!-- END PORTLET MAIN -->
              <!-- PORTLET MAIN -->
              
              <!-- END PORTLET MAIN -->
            </div>
            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">






              <div class="col-md-7">

               <div class="portlet box green">
                <div class="portlet-title">
                  <div class="caption">
                    <i class="fa fa-user"></i>Editar Datos Personales
                  </div>

                </div>
                <div class="portlet-body form">
                  <!-- BEGIN FORM-->


                  <div class="form-body">


                   <!--  <h4 class="block">Checkboxe Addons</h4> -->
                   <div class="form-group">
                    <label class="col-md-3 control-label">Nombre </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-user"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="Nombre">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Email </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-envelope"></i>
                        </span>
                        <input type="email" class="form-control input-circle-right" placeholder="Email ..">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Télefono </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-phone"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="Télefono">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Celular </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-phone"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="Celular">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Calle </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-car"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="Calle">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Num. Int. </label>
                    <div class="col-md-4">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-flag"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="Num. Int.">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-flag"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="Num. Ext">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Cidad </label>
                    <div class="col-md-5">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-home"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="Delegación">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-home"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="CP">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Delegación </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-home"></i>
                        </span>
                        <input type="text" class="form-control input-circle-right" placeholder="Delegación">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">Puesto </label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon input-circle-left">
                          <i class="fa fa-home"></i>
                        </span>
                        <select class="form-control input-circle-right" >
                        <option> Seleccione</option>
                         <option> Profesional</option>
                         <option> Ayudante</option>
                         <option> Limpieza</option>
                        
                       </select>
                     </div>
                   </div>
                 </div>









                 <!-- END FORM-->
               </div>

               <div class="form-actions">
                <button type="submit" class="btn blue">Guardar</button>

              </div>
            </div>


          </div>
        </div>





      </form>
    </div>
  </div>

  <!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
  <div class="page-footer-inner">
    2016 &copy; HelpMex.com.mx
  </div>
  <div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
  </div>
</div>

<!-- END JAVASCRIPTS -->
<?php $this->load->view('plantilla/script') ?>

<script>
  jQuery(document).ready(function() {
                // initiate layout and plugins

                Layout.init(); // init current layout
                QuickSidebar.init(); // init quick sidebar
                Metronic.init(); // init metronic core components
                Demo.init(); // init demo features
               // UIExtendedModals.init();

             });
           </script>





         </body>
         <!-- END BODY -->
         </html>
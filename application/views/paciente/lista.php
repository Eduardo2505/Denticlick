<!DOCTYPE html>

<html lang="es">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <?php $this->load->view('plantilla/head') ?>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content ">
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
                <h3 class="page-title">
                    Pacientes <small> Catálogo de clientes</small>
                </h3>
                <!-- BEGIN PAGE CONTENT-->


                <div class="row">

                    <div class="col-md-12">

                        <div class="row search-form-default">
                            <div class="col-md-12">
                                <form action="<?php echo site_url('') ?>avaluos/mostrar">
                                    <div class="input-group">
                                        <div class="input-cont">
                                            <div class="col-md-4">
                                                <input type="text" name="nombre" class="form-control" placeholder="Nombre .." maxlength="45">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="empleado" class="form-control" placeholder="Profesional.." maxlength="45">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="empleado" class="form-control" placeholder="Palabra Clave .." maxlength="45">
                                            </div>
                                        </div>

                                        <span class="input-group-btn">

                                            <button type="submit" class="btn green-haze">
                                                Buscar &nbsp; <i class="m-icon-swapright m-icon-white"></i>
                                            </button>
                                        </span>
                                        &nbsp;
                                        <span class="input-group-btn">   
                                            <a href="<?php echo site_url('') ?>demo/paciente" class="btn blue">
                                                <i class="fa fa-times"></i> Nuevo Paciente </a>
                                            </span>

                                        </div>
                                    </form>
                                </br>
                            </div>
                        </div>



                        <div class="tabbable-line boxless tabbable-reversed">

                            <div class="tab-content">


                                <div class="tab-pane active" id="tab_1">
                                    <div class="portlet box blue">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa fa-child"></i> Paciente
                                            </div>



                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-scrollable">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Email</th>
                                                            <th>Télefono</th>
                                                            <th>Observaciones</th>
                                                            <th>Profesional</th>
                                                            <th>Acciones</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                      <tr>
                                                        <td>Eduardo Padilla</td>
                                                        <td>eduardo@padilla.com</td>
                                                        <td>+52 55 55 03 86 25</td>
                                                        <td>Alérgico a medicamento</td>
                                                        <td>Dra. Maria José </td>
                                                        <td>
                                                            <a href="<?php echo site_url('') ?>demo/ficha" title="Ficha" class="btn btn-sm input-circle blue">
                                                                <i class="fa fa-user"></i>
                                                            </a>
                                                            <a href="javascript:;" title="Evolución/Historial" class="btn input-circle btn-sm yellow-crusta">
                                                                <i class="fa fa-file"></i>
                                                            </a>
                                                               <!--  <a href="javascript:;" title="Presupuestos" class="btn red">
                                                               <i class="fa fa-edit"></i> -->
                                                               <a href="javascript:;" title="Pagos" class="btn btn-sm input-circle grey-cascade cicle">
                                                                 <i class="fa fa-money"></i></a>

                                                                 <a href="javascript:;" title="Citas" class="btn input-circle btn-sm purple-plum">
                                                                    <i class="fa fa-clock-o"></i></a>

                                                                    <a href="javascript:;" title="Desctivar" class="btn input-circle btn-sm red">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>

                                                                </td>

                                                            </tr>




                                                        </tbody>
                                                    </table>

                                                </div>

                                            </div>
                                            <div class="pull-right" >

                                                <?php echo $pagination; ?>

                                            </div>
                                        </div>


                                    </div>

                                    <div style="display: none">
                                        <a class="btn default" data-target="#static" data-toggle="modal" id="btnmodal">
                                            View Demo </a>
                                        </div>
                                        <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-body"  id="mostrarprivi">
                                                <p>
                                                 PRIVILEGIOS
                                             </p>
                                         </div>
                                         <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn blue">ACEPTAR</button>

                                        </div>
                                    </div>





                                </div>
                            </div>
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
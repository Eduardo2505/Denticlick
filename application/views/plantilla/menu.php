<div class="page-sidebar-wrapper">
 
    <div class="page-sidebar navbar-collapse collapse">
      
      <ul class="page-sidebar-menu page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="sidebar-search-wrapper">
         
          <form class="sidebar-search sidebar-search-bordered" action="#" method="POST">
            <a href="javascript:;" class="remove">
            <i class="icon-close"></i>
            </a>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
              <a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
              </span>
            </div>
          </form>
          <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>

         <li  class="<?php  if(!empty($agenda)) {echo $agenda; }?>">

            <a href="<?php echo site_url('') ?>demo">
                <i class="fa fa-calendar"></i>
                <span class="title">Agenda</span>
                <span class="selected"></span>

            </a>

        </li>

        <li  class="<?php  if(!empty($paciente)) {echo $paciente; }?>">

            <a href="<?php echo site_url('') ?>demo/pacienteLista">
                <i class="fa fa fa-child"></i>
                <span class="title">Paciente</span>
                <span class="selected"></span>

            </a>

        </li>

        <li  class="<?php  if(!empty($reportes)) {echo $reportes; }?>">

            <a href="<?php echo site_url('') ?>demo/pacienteLista">
                <i class="fa fa-cubes"></i>
                <span class="title">Reportes</span>
                <span class="selected"></span>

            </a>

        </li>
       
        <li>
          <a href="javascript:;">
          <i class="fa fa-cogs"></i>
          <span class="title">Administración</span>
          <span class="arrow "></span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="ecommerce_index.html">
              <i class="fa fa-user"></i>
              Profesionales</a>
            </li>
            <li>
              <a href="ecommerce_index.html">
              <i class="icon-home"></i>
              Empresa</a>
            </li>
             <li>
              <a href="ecommerce_index.html">
              <i class="fa fa-calendar"></i>
              Agenda</a>
            </li>
          
          </ul>
        </li>
      
      </ul>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
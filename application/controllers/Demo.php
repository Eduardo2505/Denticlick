<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    private $limite = 10;

    function __construct() {

        parent::__construct();
        
    }

    public function index() {

        $datam['agenda'] = "start active";
        $datam['paciente'] = "x";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('calendario', $data);
    }
    public function pacienteLista() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('paciente/lista', $data);
    }

    public function paciente() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('paciente/paciente', $data);
    }
    public function ficha() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('paciente/ficha', $data);
    }

    public function hitorial() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('historial/historial', $data);
    }

    public function nuevohitorial() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('historial/nuevoHistorial', $data);
    }

    public function editarhitorial() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('historial/editarHistorial', $data);
    }
    public function pagos() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('pagos/lista', $data);
    }
    public function nuevoPagos() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('pagos/registro', $data);
    }
    public function editarPagos() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('pagos/editar', $data);
    }


    public function citas() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('citas/lista', $data);
    }

     public function nuevaCita() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('citas/registro', $data);
    }



}

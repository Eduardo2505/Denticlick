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
        $this->load->view('paciente/historial', $data);
    }

     public function nuevohitorial() {

        $datam['agenda'] = "x";
        $datam['paciente'] = "start active";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";

        $data['pagination']="-";//Eliminar
        
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('paciente/nuevoHistorial', $data);
    }



}

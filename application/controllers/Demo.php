<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    private $limite = 10;

    function __construct() {

        parent::__construct();
        
    }

    public function index() {

        $datam['agenda'] = "start active open";
        $datam['agendex'] = "x";
        $data['menu'] = $this->load->view('plantilla/menu', $datam, true);
        $datab['agendex'] = "x";
        $data['barra'] = $this->load->view('plantilla/barra', $datab, true);
        $this->load->view('calendario', $data);
    }



}

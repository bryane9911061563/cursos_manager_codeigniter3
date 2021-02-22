<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Inicio_controller extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('masterpage/Head_view');
    $this->load->view('masterpage/Navbar_view');
    $this->load->view('masterpage/Sidebar_view');
    $this->load->view('masterpage/Footer_view');
  }
  public function otra_funcion(){
    echo "hola";
  }
}


/* End of file Inicio_controller.php */
/* Location: ./application/controllers/Inicio_controller.php */

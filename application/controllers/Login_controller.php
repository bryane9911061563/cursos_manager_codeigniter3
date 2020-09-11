<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Login_controller
 *
 * Este controlador maneja las vistas y funciones de login principal
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Bryan Edilberto Pool  Mercado <bryanedilberto@outlook.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 */

class Login_controller extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()//Load vista Inicio de sesion
  {
    $this->load->view('publico/Login_view');
  }
  
  public function index_registro()//Load vista de registro
  {
    $this->load->view('publico/Registro_view');
  }

}


/* End of file Login_controller.php */
/* Location: ./application/controllers/Login_controller.php */
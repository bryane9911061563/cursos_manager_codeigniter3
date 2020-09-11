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
    $this->load->library('form_validation');
    $this->load->library('encrypt');
    $this->load->model('Login_model');
  }
//-------------Metodos para vistas------------------------------
  public function index()//Load vista Inicio de sesion
  {
    $this->load->view('publico/Login_view');
  }
  
  public function index_registro()//Load vista de registro
  {
    $this->load->view('publico/Registro_view');
  }
  //-------------Metodos funcionales------------------------------
  #Metodo para el registro desde el login
  public function generar_registro()
  {
    if($this->input->is_ajax_request())
    {
      $this->form_validation->set_rules('correo','Correo','required|valid_email');
      $this->form_validation->set_rules('contrasena1','Contraseña','required|min_length[6]');
      $this->form_validation->set_rules('contrasena2','Confirmacion de contraseña','required|matches[contrasena1]');
      $this->form_validation->set_rules('nombres','Nombres','required');
      $this->form_validation->set_rules('apellidos','Apellidos','required');

      $this->form_validation->set_message('required', 'El campo {field} es requerido');
      $this->form_validation->set_message('min_length', 'El campo {field} debe de tener un minimo de {param} carácteres');
      $this->form_validation->set_message('valid_email', 'El campo {field} debe ser un correo valido');
      $this->form_validation->set_message('matches', 'Las contraseñas no coinciden ');

      
      if($this->form_validation->run())
      {
        $array_userdata=array(
          'nombres'=>$_POST['nombres'],
          'apellidos'=>$_POST['apellidos'],
          'correo'=>$_POST['correo'],
          'contrasena'=>$this->encrypt->encode($_POST['contrasena1']),
          'id_perfil'=>1
        );
        if($this->Login_model->registro_nuevousuario($array_userdata))
        {
          $array=array(
            'error'=>false,
            'mensaje'=>'REGISTRO::COMPLETADO'
          );
          echo json_encode($array);
        }
      }else{
        $array=array(
          'error'=>true,
          'nombres_error'=>form_error('nombres'),
          'apellidos_error'=>form_error('apellidos'),
          'correo_error'=>form_error('correo'),
          'contrasena1_error'=>form_error('contrasena1'),
          'contrasena2_error'=>form_error('contrasena2')
        );
        echo json_encode($array);
      }
  
      
    }else{
      $array=array(
        'error'=>true,
        'mensaje'=>'Error::AJAX'
      );
      echo json_encode($array);
    }
    
  }
  #Metodo para el inicio de sesion
  public function iniciar_sesion()
  {
    if($this->input->is_ajax_request())
    {
      $this->form_validation->set_rules('correo','Correo','required|valid_email');
      $this->form_validation->set_rules('contrasena','Contraseña','required');

      if($this->form_validation->run()){
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $userdata_array=array(
          'correo'=>$correo,
          'contrasena'=>$this->encrypt->encode($contrasena)
        );        
       
        if($this->Login_model->validar_sesion($userdata_array)){
          redirect(base_url());
        }else{
          $array=array(
            'error'=>3,
            'mensaje'=>$this->session->userdata('nombres_session'),            
          );
          echo json_encode($array);
        }
      }else
      {
        $array=array(
          'error'=>2,
          'mensaje'=>'Datos incompletos',
          'correo_error'=>form_error('correo'),
          'contrasena_error'=>form_error('contrasena'),
        );
        echo json_encode($array);
      }
    }else{
      $array=array(
        'error'=>true,
        'mensaje'=>'ERROR::AJAX'
      );
      echo json_encode($array);
    }
  }
  #Metodo para el cierre de sesion
  public function cerrar_sesion()
  {
    $this->session->sess_destroy();
    redirect('login');
  }

}


/* End of file Login_controller.php */
/* Location: ./application/controllers/Login_controller.php */
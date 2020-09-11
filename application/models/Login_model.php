<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Login_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Login_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function registro_nuevousuario($array_userdata)
  {
    return $this->db->insert('personas',$array_userdata);
  }

  public function validar_sesion($array)
  {
    $correo="".$array['correo']."";
    $contrasena="".$array['contrasena']."";
    //$query = $this->db->query('SELECT * FROM personas WHERE correo="'.$correo.'" AND contrasena="'.$array['contrasena'].'"');
    $this->db->where('correo',$correo);
    $this->db->where('contrasena',$contrasena);
    $query=$this->db->get('personas');
    if($query->num_rows()>0){
      $row=$query->row();
      $array_userdata=array(//Datos para insertar en la sesion
        'estado_session'=>1,
        'nombres_session'=>$row->nombres(),
        'apellidos_session'=>$row->apellidos(),
        'correo_session'=>$row->correo(),
        'fecha_nacimiento_session'=>$row->fecha_nacimiento(),
        'profesion_session'=>$row->profesion(),
        'foto_session'=>$row->foto_perfil(),
        'perfil_session'=>$row->id_perfil()
      );
      $this->session->set_userdata($array_userdata);
      return true;
    }else{
      return false;
    }
    
  }


  // ------------------------------------------------------------------------

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */
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
    $this->db->where('correo',$array['correo']);
    $this->db->where('contrasena',$array['contrasena']);
    $this->db->select('*');
    $this->db->from('personas');
    $query = $this->db->get();
    if($query->num_rows()>0){
      $row=$query->row();
      $array_userdata=array(
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
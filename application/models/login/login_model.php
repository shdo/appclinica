<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Login_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        
        public function login_user($usuario, $contrasenia){
            $this->db->where('usuario', $usuario);
            $this->db->where('contrasenia', $contrasenia);
            $query = $this->db->get('tb_usuario');
            if($query->num_rows() == 1){
                return $query->row();
            }else{
                return false;
            }
        }
    }
?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Informe_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        
        public function subir($informe){
            $this->db->insert('tb_informe',$informe);
        }

        public function get($historia){
            $this->db->where('historiaclinicaid',$historia);
            $query=$this->db->get('tb_informe');
            return $query->result();
        }
    }
?>
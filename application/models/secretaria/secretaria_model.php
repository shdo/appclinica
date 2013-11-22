<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Secretaria_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
		
		function getAll(){
			$this->db->select('*');
			$this->db->from('tb_secretaria');
			$this->db->join('tb_persona','tb_secretaria.personaid=tb_persona.personaid');
			$query = $this->db->get();
			return $query->result();
		}
		function get($secretariaid){
			
		}
		function add($secretaria){
			if($this->db->insert('tb_secretaria',$secretaria)){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		function delete($secretariaid, $personaid){
				
			$this->db->where('secretariaid',$secretariaid);
			$this->db->delete('tb_secretaria');
			
			$this->db->where('personaid',$personaid);
			$this->db->delete('tb_persona');
		}
		function update($secretaria){
			
		}
    }
?>
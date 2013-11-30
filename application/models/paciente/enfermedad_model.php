<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Enfermedad_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
		
		function getAll($historiaclinicaid){
			$this->db->where('historiaclinicaid',$historiaclinicaid);
			$query = $this->db->get('tb_diagnostico');
			return $query->result();
		}
		
		function get($diagnosticoid){
			$this->db->where('diagnosticoid',$diagnosticoid);
			$query = $this->db->get('tb_diagnostico');
			return $query->row();
		}
		
		function add($diagnostico){
			if($this->db->insert('tb_diagnostico',$diagnostico)){
				return $this->db->insert_id();
			}
			else {
				return FALSE;
			}
		}
		/*function delete($pacienteid){
				
			$this->db->where('pacienteid',$pacienteid);
			$this->db->delete('tb_paciente');
		}*/
		
		function update($diagnosticoid, $diagnostico){
			$this->db->where('diagnosticoid',$diagnosticoid);
			if($this->db->update('tb_diagnostico',$diagnostico)){
				return $diagnosticoid;
			}
			else{
				return FALSE;
			}
		}
    }
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Paciente_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
		
		function getAll(){
			$query = $this->db->get('tb_paciente');
			return $query->result();
		}
		function get($pacienteid){
			$this->db->where('pacienteid',$pacienteid);
			$query = $this->db->get('tb_paciente');
			return $query->row();
		}
		function add($paciente){
			if($this->db->insert('tb_paciente',$paciente)){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		function delete($pacienteid){
				
			$this->db->where('pacienteid',$pacienteid);
			$this->db->delete('tb_paciente');
		}
		
		function update($pacienteid, $paciente){
			$this->db->where('pacienteid',$pacienteid);
			if($this->db->update('tb_paciente',$paciente)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
    }
?>
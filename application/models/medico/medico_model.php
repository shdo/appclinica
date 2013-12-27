<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Medico_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
		
		function getAll(){
			$this->db->select('*');
			$this->db->from('tb_medico');
			$this->db->join('tb_persona','tb_medico.personaid=tb_persona.personaid');
			$query = $this->db->get();
			return $query->result();
		}

		function getLike($letra){
			$this->db->select('*');
			$this->db->from('tb_medico');
			$this->db->join('tb_persona','tb_medico.personaid=tb_persona.personaid');
			$this->db->like('nombcompleto',$letra);
			$query = $this->db->get();
			return $query->result();
		}

		function get($medicoId){
			$this->db->select('*');
			$this->db->from('tb_medico');
			$this->db->join('tb_persona','tb_medico.personaid=tb_persona.personaid');
			$this->db->where('medicoid',$medicoId);
			$query = $this->db->get();
			return $query->row();
		}

		function getByEspecialidad($especialidad){
			$this->db->select('*');
			$this->db->from('tb_medico');
			$this->db->join('tb_persona','tb_medico.personaid=tb_persona.personaid');
			$this->db->where('especialidad', $especialidad);
			$query = $this->db->get();
			return $query->result();
		}

		function getEspecialidad(){
			$this->db->select('especialidad');
			$this->db->group_by('especialidad');
			$query = $this->db->get('tb_medico');
			return $query->result();
		}

		function add($medico){
			if($this->db->insert('tb_medico',$medico)){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		function delete($medicoid, $personaid){
				
			$this->db->where('medicoid',$medicoid);
			$this->db->delete('tb_medico');
			
			$this->db->where('personaid',$personaid);
			$this->db->delete('tb_persona');
		}
		function update($medico){
			
		}
    }
?>
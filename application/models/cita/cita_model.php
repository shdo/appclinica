<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Cita_model extends CI_Model{
        function __construct() {
            parent::__construct();
        }
		
		function getAll($campo, $valor){
			$this->db->select('*');	
			$this->db->from('tb_cita');
			$this->db->join('tb_paciente','tb_cita.pacienteid=tb_paciente.pacienteid');
			$this->db->join('tb_medico','tb_medico.medicoid=tb_cita.medicoid');
			$this->db->join('tb_persona','tb_persona.personaid=tb_medico.personaid');	
			if($campo!='null'){
				$this->db->where($campo, $valor);
			}
			$query = $this->db->get();
			return $query->result();
		}
		function get(){
			
		}
		function add($cita){
			if($this->db->insert('tb_cita',$cita)){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		
		function get_like($letra,$campo){
			$this->db->select('*');
			$this->db->from('tb_cita');
			$this->db->join('tb_medico','tb_medico.medicoid=tb_cita.medicoid');
			$this->db->join('tb_persona','tb_persona.personaid=tb_medico.personaid');
			$this->db->like($campo,$letra);
			$this->db->group_by($campo);
			$query = $this->db->get('');
			return $query->result();
		}
		
		function move($id, $dias, $tiempo){
			$this->db->set('fecha',"fecha+($dias)",FALSE);
			$this->db->set('horainicio',"SEC_TO_TIME(time_to_sec(horainicio)+$tiempo)",FALSE);
			$this->db->set('horafin',"SEC_TO_TIME(time_to_sec(horafin)+$tiempo)",FALSE);			
			$this->db->where('citaid',$id);
			$this->db->update('tb_cita');
		}
		
		
		
		function resizable($id,$tiempo){
			$this->db->set('horafin',"SEC_TO_TIME(time_to_sec(horafin)+$tiempo)",FALSE);
			$this->db->where('citaid',$id);
			$this->db->update('tb_cita');
		}
		
		function delete(){
				
		}
		
		function update(){
			
		}
    }
?>
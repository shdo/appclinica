<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Enfermedad extends CI_Controller {
    		
    	function __construct(){
    		parent::__construct();
			$this->load->model('paciente/paciente_model');
			$this->load->model('paciente/enfermedad_model');
    	}
		
		function addOrUpdate(){
			$enfermedades = json_decode($_POST['enfermedad']);
			$diagnostico;
			foreach ($enfermedades as $enfermedad) {
				$diagnostico = array(
							'diagnosticoid'=>$enfermedad->diagnosticoid,
							'fecha'=>$enfermedad->fecha,
							'tiemenferm'=>$enfermedad->tiemenferm,
							'sp'=>$enfermedad->sp,
							'relato'=>$enfermedad->relato,
							'fc'=>$enfermedad->fc,
							'pa'=>$enfermedad->pa,
							'fr'=>$enfermedad->fr,
							'temperatura'=>$enfermedad->temperatura,
							'peso'=>$enfermedad->peso,
							'cabeza'=>$enfermedad->cabeza,
							'cuello'=>$enfermedad->cuello,
							'toraxpulmones'=>$enfermedad->toraxpulmones,
							'cardiovascular'=>$enfermedad->cardiovascular,
							'abdomen'=>$enfermedad->abdomen,
							'genitourinario'=>$enfermedad->genitourinario,
							'locomotor'=>$enfermedad->locomotor,
							'neurologico'=>$enfermedad->neurologico,
							'dx1'=>$enfermedad->dx1,
							'dx2'=>$enfermedad->dx2,
							'dx3'=>$enfermedad->dx3,
							'dx4'=>$enfermedad->dx4,
							'tratamiento1'=>$enfermedad->tratamiento1,
							'tratamiento2'=>$enfermedad->tratamiento2,
							'tratamiento3'=>$enfermedad->tratamiento3,
							'tratamiento4'=>$enfermedad->tratamiento4,
							'exauxiliares'=>$enfermedad->exauxiliares,
							'historiaclinicaid'=>$enfermedad->historiaclinicaid);
			}
			
			if($diagnostico['diagnosticoid']==NULL){
				$id = $this->enfermedad_model->add($diagnostico);
				$rpta = array('id'=>$id);
				echo json_encode($rpta);
			}
			else{
				$id=$this->enfermedad_model->update($diagnostico['diagnosticoid'],$diagnostico);
				$rpta = array('success'=>true,
							  'id'=>$id);
				echo json_encode($rpta);
			}
			
		}
		
		function getAll(){
			
		}
		
		function get(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$diagnosticoid = $this->uri->segment(4);
			$data=$this->enfermedad_model->get($diagnosticoid);
			echo json_encode($data);
		}
    }
?>
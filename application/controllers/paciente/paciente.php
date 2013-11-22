<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Paciente extends CI_Controller {
    		
    	function __construct(){
    		parent::__construct();
			$this->load->model('paciente/paciente_model');
    	}
		
		function report(){
			$this->html2pdf->folder('./files/pdfs/paciente/');
			$this->html2pdf->filename('historia_clinica.pdf');
			$this->html2pdf->paper('legal','portrait');
			$pacienteid = $this->uri->segment(4);
			$paciente['paciente'] = $this->paciente_model->get($pacienteid);
			$this->html2pdf->html(utf8_decode($this->load->view('paciente/paciente_view_report',$paciente,TRUE)));
			
			if($this->html2pdf->create('save')){
				if(is_dir("./files/pdfs/paciente"))
        		{
            		$filename = "historia_clinica.pdf"; 
            		$route = base_url("files/pdfs/paciente/historia_clinica.pdf"); 
            		if(file_exists("./files/pdfs/paciente/".$filename))
            		{
                		header('Content-type: application/pdf'); 
                		readfile($route);
            		}	
        		}
			}
		}
		
		function addOrUpdate(){
			if($this->input->post('hdnpacienteid')==NULL){
				$paciente = array(
							'nombre'=>$this->input->post('txtnombre'),
							'apepaterno'=>$this->input->post('txtapePaterno'),
							'apematerno'=>$this->input->post('txtapeMaterno'),
							'estadcivil'=>$this->input->post('list_estado'),
							'edad'=>$this->input->post('txtedad'),
							'ocupacion'=>$this->input->post('txtocupacion'),
							'lugarnac'=>$this->input->post('txtLugarNac'),
							'lugarproc'=>$this->input->post('txtLugaProc'),
							'domicilio'=>$this->input->post('txtdomicilio'),
							'telefono'=>$this->input->post('txttelefono'),
							'estado'=>'A');
				$this->paciente_model->add($paciente);
				$this->session->set_flashdata('mensaje','Se guardo satisfactoriamente');
				redirect(base_url().'home/agregar_paciente','refresh');
			}
			else{
				$pacienteid = $this->input->post('hdnpacienteid');
				$paciente = array(
							'nombre'=>$this->input->post('txtnombre'),
							'apepaterno'=>$this->input->post('txtapePaterno'),
							'apematerno'=>$this->input->post('txtapeMaterno'),
							'estadcivil'=>$this->input->post('list_estado'),
							'edad'=>$this->input->post('txtedad'),
							'ocupacion'=>$this->input->post('txtocupacion'),
							'lugarnac'=>$this->input->post('txtLugarNac'),
							'lugarproc'=>$this->input->post('txtLugaProc'),
							'domicilio'=>$this->input->post('txtdomicilio'),
							'telefono'=>$this->input->post('txttelefono'));
				$this->paciente_model->update($pacienteid,$paciente);
				$this->session->set_flashdata('mensaje','Se actualizo satisfactoriamente');
				redirect(base_url().'home/listar_paciente','refresh');
			}
			
		}
		
		function delete(){
			$pacienteid = $this->uri->segment(3);
			$paciente = array('estado'=>'D');
			$this->paciente_model->delete($pacienteid,$paciente);
			$this->session->set_flashdata('mensaje','Se elimino satisfactoriamente');
			redirect(base_url().'home/listar_paciente','refresh');
		}
		
		function getAll(){
			
		}
		
		function get(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$pacienteid = $this->uri->segment(3);
			$datos = array('paciente'=>$this->paciente_model->get($pacienteid),
						   'estadocivil'=>array('S'=>'Soltero','C'=>'Casado','D'=>'Divorciado','V'=>'Viudo'));
		     $tab = array('anamnesis'=>$this->load->view('paciente/paciente_view_anamnesis',$datos,TRUE),
						 'enfermedad'=>$this->load->view('paciente/paciente_view_enfermedad','',TRUE),
						 'informe'=>$this->load->view('paciente/paciente_view_informe','',TRUE));
			$data=array('titulo'=>'Actualizar Paciente',
                        'contenido'=>$this->load->view('paciente/paciente_view',$tab,TRUE));
			$this->load->view('home/home_view',$data);
		}
    }
?>
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Paciente extends CI_Controller {
    		
    	function __construct(){
    		parent::__construct();
			$this->load->model('paciente/paciente_model');
			$this->load->model('paciente/historia_clinica_model');
			$this->load->model('paciente/enfermedad_model');
    	}
		
		function report(){
			$this->html2pdf->folder('./files/pdfs/paciente/');
			$this->html2pdf->filename('historia_clinica.pdf');
			$this->html2pdf->paper('legal','portrait');
			$pacienteid = $this->uri->segment(4);
			$histo = $this->historia_clinica_model->get($pacienteid);
			$paciente['paciente'] = $this->paciente_model->get($pacienteid);
			$paciente['historia'] = $this->historia_clinica_model->get($pacienteid);
			$paciente['enfermedad'] = $this->enfermedad_model->getAll($histo->historiaclinicaid);
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
				$pacienteid=$this->paciente_model->add($paciente);
				$historiaclinica = array('medicos'=>$this->input->post('txtmedicos'),
										 'quirurgicos'=>$this->input->post('txtquirurgicos'),
										 'alergicos'=>$this->input->post('txtalergicos'),
										 'fur'=>$this->input->post('txtfur'),
										 'menarquia'=>$this->input->post('txtmenarquia'),
										 'rs'=>$this->input->post('txtrs'),
										 'rc'=>$this->input->post('txtrc'),
										 'g'=>$this->input->post('txtg'),
										 'p'=>$this->input->post('txtp'),
										 'ma'=>$this->input->post('txtma'),
										 'hospitalizacion'=>$this->input->post('txthospitalizacion'),
										 'habitosnocivos'=>$this->input->post('txthnocivos'),
										 'pacienteid'=>$pacienteid);
				$this->historia_clinica_model->add($historiaclinica);
				$this->session->set_flashdata('mensaje','Se guardo satisfactoriamente');
				redirect(base_url().'home/agregar_paciente','refresh');
			}
			else{
				$pacienteid = $this->input->post('hdnpacienteid');
				$historiaclinicaid = $this->input->post('hdnhistoriaid');
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
				$historiaclinica = array('medicos'=>$this->input->post('txtmedicos'),
										 'quirurgicos'=>$this->input->post('txtquirurgicos'),
										 'alergicos'=>$this->input->post('txtalergicos'),
										 'fur'=>$this->input->post('txtfur'),
										 'menarquia'=>$this->input->post('txtmenarquia'),
										 'rs'=>$this->input->post('txtrs'),
										 'rc'=>$this->input->post('txtrc'),
										 'g'=>$this->input->post('txtg'),
										 'p'=>$this->input->post('txtp'),
										 'ma'=>$this->input->post('txtma'),
										 'hospitalizacion'=>$this->input->post('txthospitalizacion'),
										 'habitosnocivos'=>$this->input->post('txthnocivos'),
										 'pacienteid'=>$pacienteid);
				$this->historia_clinica_model->update($historiaclinicaid,$historiaclinica);
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
			$historia = $this->historia_clinica_model->get($pacienteid);
			$datos = array('paciente'=>$this->paciente_model->get($pacienteid),
						   'historia'=>$this->historia_clinica_model->get($pacienteid),
						   'diagnostico'=>$this->enfermedad_model->getAll($historia->historiaclinicaid),
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
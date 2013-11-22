<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Medico extends CI_Controller {
    		
    	function __construct(){
    		parent::__construct();
			$this->load->model('medico/medico_model');
			$this->load->model('persona/persona_model');
    	}
		
		function report(){
			$this->html2pdf->folder('./files/pdfs/medico/');
			$this->html2pdf->filename('medicos.pdf');
			$this->html2pdf->paper('a4','portrait');
			$medico['medicos'] = $this->medico_model->getAll();
			$this->html2pdf->html(utf8_decode($this->load->view('doctor/medico_view_report',$medico,TRUE)));
			
			if($this->html2pdf->create('save')){
				if(is_dir("./files/pdfs/medico"))
        		{
            		$filename = "medicos.pdf"; 
            		$route = base_url("files/pdfs/medico/medicos.pdf"); 
            		if(file_exists("./files/pdfs/medico/".$filename))
            		{
                		header('Content-type: application/pdf'); 
                		readfile($route);
            		}	
        		}
			}
		}
		
		function addOrUpdate(){
			if($this->input->post('hdnpersonaid')==NULL){
				$persona = array(
							'nombres'=>$this->input->post('txtnombre'),
							'apepaterno'=>$this->input->post('txtapepaterno'),
							'apematerno'=>$this->input->post('txtapematerno'),
							'nombcompleto'=>$this->input->post('txtnombre').' '.$this->input->post('txtapepaterno'),
							'fechnacimiento'=>$this->input->post('txtfecha'),
							'domicilio'=>$this->input->post('txtdireccion'),
							'telefono'=>$this->input->post('txttelefono'),
							'dni'=>$this->input->post('txtdni'),
							'distritoid'=>1,
							'estadocivilid'=>$this->input->post('list_estado'));
				$personaid = $this->persona_model->add($persona);
				$medico =array('personaid'=>$personaid);
				$this->medico_model->add($medico);
				$this->session->set_flashdata('mensaje','Se guardo satisfactoriamente');
				redirect(base_url().'home/agregar_doctor','refresh');
			}
			else{
				$personaid = $this->input->post('hdnpersonaid');
				$persona = array(
							'nombres'=>$this->input->post('txtnombre'),
							'apepaterno'=>$this->input->post('txtapepaterno'),
							'apematerno'=>$this->input->post('txtapematerno'),
							'nombcompleto'=>$this->input->post('txtnombre').' '.$this->input->post('txtapepaterno'),
							'fechnacimiento'=>$this->input->post('txtfecha'),
							'domicilio'=>$this->input->post('txtdireccion'),
							'telefono'=>$this->input->post('txttelefono'),
							'dni'=>$this->input->post('txtdni'),
							'distritoid'=>1,
							'estadocivilid'=>$this->input->post('list_estado'));
				$this->persona_model->update($personaid,$persona);
				$this->session->set_flashdata('mensaje','Se actualizo satisfactoriamente');
				redirect(base_url().'home/listado_doctor','refresh');
			}
			
		}
		
		function delete(){
			$medicoid = $this->uri->segment(3);
			$personaid = $this->uri->segment(4);
			$this->medico_model->delete($medicoid,$personaid);
			$this->session->set_flashdata('mensaje','Se elimino satisfactoriamente');
			redirect(base_url().'home/listado_doctor','refresh');
		}
		
		function getAll(){
			
		}
		
		function get(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$personaid = $this->uri->segment(3);
			$datos = array('estadocivil'=>array('1'=>'Soltero','2'=>'Casado','3'=>'Viudo','4'=>'Divorciado'),
						   'medico'=>$this->persona_model->get($personaid));
			$data=array('titulo'=>'Actualizar Doctor',
                        'contenido'=>$this->load->view('doctor/doctor_view',$datos,TRUE));
			$this->load->view('home/home_view',$data);
		}
    }
?>
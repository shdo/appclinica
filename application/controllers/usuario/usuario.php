<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Usuario extends CI_Controller {
    		
    	function __construct(){
    		parent::__construct();
			$this->load->model('medico/medico_model');
			$this->load->model('usuario/usuario_model');
			$this->load->model('persona/persona_model');
    	}
		
		function report(){
			$this->html2pdf->folder('./files/pdfs/usuario/');
			$this->html2pdf->filename('usuarios.pdf');
			$this->html2pdf->paper('a4','portrait');
			$usuario['usuarios'] = $this->usuario_model->getAll();
			$this->html2pdf->html(utf8_decode($this->load->view('usuario/usuario_view_report',$usuario,TRUE)));
			
			if($this->html2pdf->create('save')){
				if(is_dir("./files/pdfs/usuario"))
        		{
            		$filename = "usuarios.pdf"; 
            		$route = base_url("files/pdfs/usuario/usuarios.pdf"); 
            		if(file_exists("./files/pdfs/usuario/".$filename))
            		{
                		header('Content-type: application/pdf'); 
                		readfile($route);
            		}	
        		}
			}
		}
		
		function addOrUpdate(){
			if($this->input->post('hdnusuarioid')==NULL){
				$usuario = array(
							'usuario'=>$this->input->post('txtusuario'),
							'contrasenia'=>$this->input->post('txtcontrasenia'),
							'tipousuario'=>$this->input->post('list_tipousuario'),
							'personaid'=>$this->input->post('list_persona'),);
				$this->usuario_model->add($usuario);
				$this->session->set_flashdata('mensaje','Se guardo satisfactoriamente');
				redirect(base_url().'home/agregar_usuario','refresh');
			}
			else{
				$usuarioid = $this->input->post('hdnusuarioid');
				$usuario = array(
							'usuario'=>$this->input->post('txtusuario'),
							'contrasenia'=>$this->input->post('txtcontrasenia'),
							'tipousuario'=>$this->input->post('list_tipousuario'),
							'personaid'=>$this->input->post('list_persona'),);
				$this->usuario_model->update($usuarioid,$usuario);
				$this->session->set_flashdata('mensaje','Se actualizo satisfactoriamente');
				redirect(base_url().'home/listado_usuario','refresh');
			}
			
		}
		
		function delete(){
			$usuarioid = $this->uri->segment(3);
			$this->usuario_model->delete($usuarioid);
			$this->session->set_flashdata('mensaje','Se elimino satisfactoriamente');
			redirect(base_url().'home/listado_usuario','refresh');
		}
		
		function getAll(){
			
		}
		
		function get(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$usuarioid = $this->uri->segment(3);
			$datos = array('usuario'=>$this->usuario_model->get($usuarioid),'personas'=>$this->persona_model->getAll());
			$data=array('titulo'=>'Agregar Doctor',
                        'contenido'=>$this->load->view('usuario/usuario_view',$datos,TRUE));
			$this->load->view('home/home_view',$data);
		}
    }
?>
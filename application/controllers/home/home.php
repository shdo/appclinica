<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Home extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('url');
        }
        
        function index(){
            if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
            $data['titulo']='Home';
            $this->load->view('home/home_view', $data);
        }
        
        function formPaciente(){
            if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
            $estado_civil['estadocivil']=array('S'=>'Soltero','C'=>'Casado','D'=>'Divorciado','V'=>'Viudo');
            $tab = array('anamnesis'=>$this->load->view('paciente/paciente_view_anamnesis',$estado_civil,TRUE),
						 'enfermedad'=>$this->load->view('paciente/paciente_view_enfermedad','',TRUE),
						 'informe'=>$this->load->view('paciente/paciente_view_informe','',TRUE));
            $data=array('titulo'=>'Agregar Paciente',
                        'contenido'=>$this->load->view('paciente/paciente_view',$tab,TRUE));
            $this->load->view('home/home_view',$data);
        }
        function formListarPaciente(){
            if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
            $data=array('titulo'=>'Listar Paciente',
                        'contenido'=>$this->load->view('paciente/paciente_view_listar','',TRUE));
            $this->load->view('home/home_view',$data);
        }
		
		function formUsuario(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$data=array('titulo'=>'Agregar Usuario',
                        'contenido'=>$this->load->view('usuario/usuario_view','',TRUE));
			$this->load->view('home/home_view',$data);
		}
		
		function formListarUsuario(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$data=array('titulo'=>'Listado de Usuarios',
                        'contenido'=>$this->load->view('usuario/usuario_view_listar','',TRUE));
			$this->load->view('home/home_view',$data);
		}
		
		function formDoctor(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$data=array('titulo'=>'Agregar Doctor',
                        'contenido'=>$this->load->view('doctor/doctor_view','',TRUE));
			$this->load->view('home/home_view',$data);
		}
		
		function formListarDoctor(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$data=array('titulo'=>'Listado de Doctores',
                        'contenido'=>$this->load->view('doctor/doctor_view_list','',TRUE));
			$this->load->view('home/home_view',$data);
		}
		
		function formSecretaria(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$data=array('titulo'=>'Agregar Secretaria',
                        'contenido'=>$this->load->view('secretaria/secretaria_view','',TRUE));
			$this->load->view('home/home_view',$data);
		}
		
		function formListarSecretaria(){
			if($this->session->userdata['is_logued_in']==FALSE){
                redirect(base_url().'login');
            }
			$data=array('titulo'=>'Listado de Doctores',
                        'contenido'=>$this->load->view('secretaria/secretaria_view_list','',TRUE));
			$this->load->view('home/home_view',$data);
		}
    }
?>

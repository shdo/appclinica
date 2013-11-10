<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');    
    class Login extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->load->model('login/login_model');
            $this->load->library('session');
            $this->load->helper(array('url','form'));
            $this->load->database();
        }
        
        function index(){
            if(@$this->session->userdata['is_logued_in']){
                redirect(base_url().'home');
            }else{
                $this->load->view('login/login_form');
            }
        }
        
        function log_in(){
            $usuario = $this->input->post('usuario_txt');
            $contrasenia = $this->input->post('password_txt');
            $check_user = $this->login_model->login_user($usuario, $contrasenia);
            
            if($check_user==TRUE){
                $data = array(
                    'is_logued_in'=>TRUE,
                    'usuarioid'=>$check_user->usuarioid,
                    'usuario'=>$check_user->usuario,
                );
                $this->session->set_userdata($data);
                $this->index();
            }else{
            	$this->session->set_flashdata('mensaje','Usuario o contraseña incorrecta');
				redirect(base_url().'login','refresh');
            }
        }
        
        function log_out(){
            $this->session->sess_destroy();
            redirect(base_url().'login');
        }
    }
?>
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cita extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('cita/cita_model');
    }

    function index() {
        if ($this->session->userdata['is_logued_in'] == FALSE) {
            redirect(base_url() . 'login');
        }
        $data['titulo'] = 'Home';
        $this->load->view('home/home_view', $data);
    }
	
	function cambiar($hora){
		switch ($hora) {
			case '1':
				return $hora = 13;
			case '2':
				return $hora = 14;
			case '3':
				return $hora = 15;
			case '4':
				return $hora = 16;
			case '5':
				return $hora = 17;
			case '6':
				return $hora = 18;
			case '7':
				return $hora = 19;
			case '8':
				return $hora = 20;
			case '9':
				return $hora = 21;
			case '10':
				return $hora = 22;
			case '11':
				return $hora = 23;
			case '12':
				return $hora = 24;
		}
	}
	
	function autocomplete(){
		$letra = $this->input->post('dato');
		$campo = $this->input->post('campo');
		$row = $this->cita_model->get_like($letra,$campo);
		echo json_encode($row);
	}
	
	function addOrUpdate(){
		$hora_i = $this->input->post('list_horas_i');	
		$hora_f = $this->input->post('list_horas_f');
		$fecha=$this->input->post('hdnfecha_actual');
		if($this->input->post('list_meridiano_i')=='pm'||$this->input->post('list_meridiano_f')=='pm'){
			$hora_i = $this->cambiar($hora_i);
			$hora_f = $this->cambiar($hora_f);
		}
		$cita = array('especialidad'=>$this->input->post('list_especialidad'),
					  'tipocita'=>'P',
					  'fecha'=>$fecha,
					  'horainicio'=>$hora_i.':'.$this->input->post('list_minutos_i'),
					  'horafin'=>$hora_f.':'.$this->input->post('list_minutos_f'),
					  'secretariaid'=>2,
					  'pacienteid'=>$this->input->post('hdnpacienteid'),
					  'medicoid'=>$this->input->post('list_medico'));
		$this->cita_model->add($cita);
		redirect(base_url().'home/cita_medica');
	}
	
	function getAll(){
		$citas = $this->cita_model->getAll($this->uri->segment(3), str_replace('%20',' ',$this->uri->segment(4)));
		$cita_json = array();
		foreach ($citas as $cita) {
			$cita_json[] = array('id'=>$cita->citaid,
							   'title'=>$cita->nomcompleto,
							   'start'=>$cita->fecha.' '.$cita->horainicio,
							   'end'=>$cita->fecha.' '.$cita->horafin,
							   'allDay'=>FALSE);
		}
		echo json_encode($cita_json);
	}
	
	function move(){
		$tiempo = $this->uri->segment(5);
		$this->cita_model->move($this->uri->segment(3), $this->uri->segment(4),$tiempo*60);
	}
	
	function resize(){
		$tiempo = $this->uri->segment(4);
		$this->cita_model->resizable($this->uri->segment(3), $tiempo*60);
	}
}
?>
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

    function report(){
		$this->html2pdf->folder('./files/pdfs/cita/');
		$this->html2pdf->filename('citas.pdf');
		$this->html2pdf->paper('a4','portrait');
		$cita['citas'] = $this->cita_model->cita_asignada($this->uri->segment(4),$this->uri->segment(5));
		$this->html2pdf->html(utf8_decode($this->load->view('cita/cita_view_report',$cita,TRUE)));
			
		if($this->html2pdf->create('save')){
			if(is_dir("./files/pdfs/cita"))
        	{
            	$filename = "citas.pdf"; 
            	$route = base_url("files/pdfs/cita/citas.pdf"); 
            	if(file_exists("./files/pdfs/cita/".$filename))
            	{
                	header('Content-type: application/pdf'); 
                	readfile($route);
            	}	
        	}
		}
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
		if($campo==='especialidad'){$campo='tb_cita.especialidad';}
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
		$campo=$this->uri->segment(3);
		if($campo==='especialidad'){$campo='tb_cita.especialidad';}
		$citas = $this->cita_model->getAll($campo, str_replace('%20',' ',$this->uri->segment(4)));
		$cita_json = array();
		$today = date('Y-m-d');
		$color = '#3a87ad';
		$bColor = '#3a87ad';
		foreach ($citas as $cita) {
			if($cita->fecha<$today){$color='#ed3e3e';$bColor='#ed3e3e';}
			$cita_json[] = array('id'=>$cita->citaid,
							     'title'=>$cita->nomcompleto,
							     'start'=>$cita->fecha.' '.$cita->horainicio,
							     'end'=>$cita->fecha.' '.$cita->horafin,
							     'allDay'=>FALSE,
							     'backgroundColor'=>$color,
							     'borderColor'=>$bColor);
			$color='#3a87ad';
			$bColor = '#3a87ad';
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
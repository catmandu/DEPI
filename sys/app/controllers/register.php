<?php
    class Register extends Controller{
        function __construct(){
            parent::Controller();
            $this->lang->load('header');
            $this->lang->load('menu');
            $this->lang->load('register');
            $this->lang->load('footer');
            $this->load->model('register_model');
   			$this->load->library('email');
   			$config['protocol'] = 'mail';
  			$config['mailtype'] = 'html';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;
			$this->email->initialize($config);
        }
        function index(){
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('register');
            $this->load->view('footer');
        }	
		
	function preregister(){
	    $this->index();
	    //$this->load->view('header');
            //$this->load->view('preregister');

        }
		
		
        function save(){
		    $reg['name']=$this->input->post('name');
		    $reg['lastname']=$this->input->post('lastname');
  		    $reg['institution']=$this->input->post('institution');
		    $reg['city']=$this->input->post('city');
		    $reg['country']=$this->input->post('country');
		    $reg['email']=$this->input->post('email');
		    $reg['category']=$this->input->post('category');
		    switch($this->register_model->register($reg)){
		    	case 0:
			    	$info = array('success'=>false,'msg'=>'<span class="fail">'.$this->lang->line('register.msg-fail').'</span>');
					echo json_encode($info);
			    	break;
		    	case 1:
		    		$info = array('success'=>true,'msg'=> '<span class="ok">'.$this->lang->line('register.msg-ok').'</span>');
		    		//funciona pero hay un error con ajax.
		    		$this->email->from('noreply@clcar.itcolima.edu.mx',$this->lang->line('register.email-clcar'));
					$this->email->to($reg['email']);
					$this->email->subject($this->lang->line('register.email-subject'));
					$this->email->message($this->load->view('email',$reg,true));
					$this->email->send();
					echo json_encode($info);
		    		break;
		    	case 2:
			    	$info = array('success'=>false,'msg'=>'<span class="fail">'.$this->lang->line('register.msg-bademail').'</span>');
					echo json_encode($info);
			    	break;
		    }
        }
    }
?>

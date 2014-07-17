<?php
    class Papers extends Controller{
        function __construct(){
            parent::Controller();
           	$this->lang->load('header');
        	$this->lang->load('menu');
        	$this->lang->load('footer');
        }
        function index(){ 
           	$this->lang->load('papers');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers');
            $this->load->view('footer');
        }
        function format(){
           	$this->lang->load('pformat');
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_format');
            $this->load->view('footer');
        }
        function submission(){
       		$this->lang->load('psubmission');
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_submission');
            $this->load->view('footer');
        }
        function accepted(){
        	$this->lang->load('paccepted');
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_accepted');
            $this->load->view('footer');
        }
        function topics(){
        	$this->lang->load('ptopics');
           	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_topics');
            $this->load->view('footer');	
        }
		function CallForPaper(){
        	$this->lang->load('CallForPaper');
           	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_CallForPaper');
            $this->load->view('footer');	
        }
    }
?>

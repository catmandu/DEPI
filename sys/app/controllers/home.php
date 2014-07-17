<?php
    class Home extends Controller{
        function __construct(){
            parent::controller();
                $this->lang->load('header');
        	$this->lang->load('menu');
        	$this->lang->load('home');
        	$this->lang->load('news');
        	$this->lang->load('footer');
			 
        }
        function index(){
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('home');
            $this->load->view('news');
            $this->load->view('footer');

	        }
    }
?>

<?php
	class Panels extends Controller{
		function __construct(){
			parent::Controller();
			$this->lang->load('header');
            $this->lang->load('menu');
            $this->lang->load('panels');
            $this->lang->load('footer');
		}
		function index(){
			$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('panels');
            $this->load->view('footer');
		}
	}
?>

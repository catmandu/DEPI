<?php
	class Dates extends Controller{
		function __construct(){
			parent::Controller();
			$this->lang->load('header');
            $this->lang->load('menu');
            $this->lang->load('dates');
            $this->lang->load('footer');
		}
		function index(){
			$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('dates');
            $this->load->view('footer');
		}
	}
?>

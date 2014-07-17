<?php
	class Speakers extends Controller{
		function __construct(){
			parent::Controller();
			$this->lang->load('committees');
			$this->lang->load('header');
            $this->lang->load('menu');
            $this->lang->load('speakers');
            $this->lang->load('footer');
		}
		function index(){
			$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('speakers');
            $this->load->view('footer');
		}
	}
?>

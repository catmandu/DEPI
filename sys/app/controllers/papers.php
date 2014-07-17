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
		
		function perfilEgreso(){
             $this->lang->load('pPerfilEgreso');
            $this->load->view('header');
            $this->load->view('menu');
			$this->load->view('perfilEgreso_format');
            $this->load->view('footer');
        }
		
		function oGeneral(){
             $this->lang->load('pOGeneral');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('oGeneral_format');
            $this->load->view('footer');
        }
		
		function oEspecificos(){
             $this->lang->load('pOEspecificos');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('oEspecificos_format');
            $this->load->view('footer');
        }
		
		function sPlanEstudios(){
             $this->lang->load('pSPlanEstudios');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('sPlanEstudios_format');
            $this->load->view('footer');
        }
         
		 function numeroEstudiantes(){
			 $this->lang->load('pNumeroEstudiantes');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('numeroEstudiantes_format');
            $this->load->view('footer');
        }
		
		 function tCompleto(){
			 $this->lang->load('pTCompleto');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('tCompleto_format');
            $this->load->view('footer');
        }
		function tParcial(){
			 $this->lang->load('pTParcial');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('tParcial_format');
            $this->load->view('footer');
        }
		
		function lineasGeneracion(){
             $this->lang->load('pLineasGeneracion');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('lineasGeneracion_format');
            $this->load->view('footer');
        }
		function tablaEsTut(){
             $this->lang->load('pTablaEsTut');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('tablaEsTut_format');
            $this->load->view('footer');
        }
		function prodAcademica(){
             $this->lang->load('pProdAcademica');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('prodAcademica_format');
            $this->load->view('footer');
        }
		
		function vinculacion(){
             $this->lang->load('pVinculacion');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('vinculacion_format');
            $this->load->view('footer');
        }
		function pAdministrativos(){
             $this->lang->load('pAdministrativos');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('pAdministrativos_format');
            $this->load->view('footer');
        }
		
		function pAspirantes(){
             $this->lang->load('pAspirantes');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('pAspirantes_format');
            $this->load->view('footer');
        }
		 function convocatoria(){
             $this->lang->load('pConvocatoria');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('convocatoria_format');
            $this->load->view('footer');
        }
		function construccion(){
             $this->lang->load('pConstruccion');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('construccion_format');
            $this->load->view('footer');
        }
		function ateneo(){
             $this->lang->load('pAteneo');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('ateneo_format');
            $this->load->view('footer');
        }
		
		 function lineasInvestigacion(){
             $this->lang->load('pLineasInvestigacion');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('lineasInvestigacion_format');
            $this->load->view('footer');
        }
		
		 function requisitos(){
            $this->lang->load('pRequisitos');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('requisitos_format');
            $this->load->view('footer');
        }
		
		function permanencia(){
             $this->lang->load('pPermanencia');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('permanencia_format');
            $this->load->view('footer');
        }
	function format2(){
           	$this->lang->load('pformat2');
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_format2');
            $this->load->view('footer');
        }




      function submission(){

        $this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
        
        $this->lang->load('psubmission');
        $this->load->view('header');
        $this->load->view('menu');
       
	$this->load->helper('form');
	//Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa. 
        if(!isset($_POST['txt_nombre'])){     
            $this->load->view('papers_submission');      // Por lo tanto le presentamos la pantalla del formulario de ingreso.
	     $this->load->view('footer');             
	
         } 
	else{  
            //Si el usuario ya pasó por la pantalla inicial y presionó el botón "guardar"
            $this->form_validation->set_rules('txt_nombre','Nombre','required');
	    $this->form_validation->set_rules('txt_apaterno','Apellido Paterno','required');
	    $this->form_validation->set_rules('txt_amaterno','Apellido Materno','required');
	    //$this->form_validation->set_rules('txt_curp','CURP','required');
	    $this->form_validation->set_rules('cmb_sexo','Sexo','required');
	    $this->form_validation->set_rules('txt_correo','Correo','required');
	    //$this->form_validation->set_rules('txt_ca','Calle','required');
	    //$this->form_validation->set_rules('txt_col','Colonia','required');
	    //$this->form_validation->set_rules('txt_muni','Municipio','required');
	    //$this->form_validation->set_rules('txt_esta','Estado','required');
            //$this->form_validation->set_rules('txt_telefono','Telefono','required');
            //$this->form_validation->set_rules('txt_carrera','Carrera','required');
            $this->form_validation->set_rules('txt_anio','Año','required');
            $this->form_validation->set_rules('txt_metodo','Titulacion','required');
            $this->form_validation->set_rules('txt_escuela','Escuela','required');
            $this->form_validation->set_rules('txt_prom','Promedio','required');
         

        if(($this->form_validation->run()==FALSE)){      //Verificamos si el usuario superó la validación
                $this->load->view('papers_submission');  //En caso que no, volvemos a presentar la pantalla de login
            }
	    else{ // Si los campos fueron correctamente rellenados por el usuario,
                $this->load->model('Register_model');
                 // Manda datos al registro 
		$this->Register_model->agregar_usuario($_POST['txt_nombre'],$_POST['txt_apaterno'],$_POST['txt_amaterno'],
 $_POST['txt_curp'],$_POST['cmb_sexo'],$_POST['txt_correo'], $_POST['txt_ca'],$_POST['txt_col'],$_POST['txt_muni'],
 $_POST['txt_esta'],$_POST['txt_telefono'], $_POST['txt_carrera'],$_POST['txt_anio'],$_POST['txt_metodo'], $_POST['txt_escuela'],
 $_POST['txt_prom']); 
                            
                          

                }
             
             }    
        

        }


      /**
         * Esta es la funcion que llama a la forma de preinscripcion
         * 
        
        function submission(){
       		$this->lang->load('psubmission');
        	$this->load->view('header');
                $this->load->view('menu');
                 
                $this->load->helper('form'); 
  		// Carga el modelo 
                $this->load->model('Register_model');
                // Esta es la vista que contiene la captura de datos
                $this->load->view('papers_submission');
                
                // Recuperar los datos desde la vista
                // $this->Register_model->agregar_usuario('b','b','a','a','a','a','a','a','a','a','a','a','a','a','a','a');

                $this->Register_model->agregar_usuario($_POST['txt_nombre'],$_POST['txt_apaterno'],$_POST['txt_amaterno'],
 $_POST['txt_curp'],$_POST['cmb_sexo'],$_POST['txt_correo'], $_POST['txt_ca'],$_POST['txt_col'],$_POST['txt_muni'],
 $_POST['txt_esta'],$_POST['txt_telefono'], $_POST['txt_carrera'],$_POST['txt_año'],$_POST['txt_metodo'], $_POST['txt_escuela'],
 $_POST['txt_prom']);  

                $this->load->view('footer');
        }

      */


      function submission2(){
       		$this->lang->load('psubmission2');
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_submission2');
            $this->load->view('footer');
        }
        function accepted(){
        	$this->lang->load('paccepted');
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_accepted');
            $this->load->view('footer');
        }
        function accepted2(){
        	$this->lang->load('paccepted2');
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_accepted2');
            $this->load->view('footer');
        }
		 function personal(){
        	$this->lang->load('pPersonal');
        	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('personal_format');
            $this->load->view('footer');
        }
        function proyectosTesis() {
            $this->lang->load('proyectostesis');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('proyectos_tesis');
            $this->load->view('footer');
        }
        function topics(){
        	$this->lang->load('ptopics');
           	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_topics');
            $this->load->view('footer');	
        }
	function topics2(){
        	$this->lang->load('ptopics2');
           	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_topics2');
            $this->load->view('footer');	
        }
		function CallForPaper(){
        	$this->lang->load('CallForPaper');
           	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_CallForPaper');
            $this->load->view('footer');	
        }
		
		function CallForPaper2(){
        	$this->lang->load('CallForPaper2');
           	$this->load->view('header');
            $this->load->view('menu');
            $this->load->view('papers_CallForPaper2');
            $this->load->view('footer');	
        }
        
        function aceptados2012(){
            $this->lang->load('aceptados2012');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('aceptados2012');
            $this->load->view('footer');	
        }
        
    }
?>

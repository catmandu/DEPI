<?php
	

 class Register_model extends Model{


      function __Construct()
	{
		parent::__Construct();
		$this->load->database('depi');
	}
 
		
 /**
  * Funcion que escribe los datos en la tabla usuario
  */
   function agregar_usuario($name,$ape_pat,$ape_mat,$curp,$sexo,$correo,$calle,$colonia,$municipio,$estado,$telefono,$carrera,$anio_titulacion,$metodo_titulacion, $escuela_proc,$promedio)
	{

		$data = array(
				'name'=>$name,
                                'ape_pat'=>$ape_pat,
     				'ape_mat'=>$ape_mat,
                                'curp'=>$curp,
				'sexo'=>$sexo,
				'correo'=>$correo,
				'calle'=>$calle,
				'colonia'=>$colonia,
				'municipio'=>$municipio,
				'estado'=>$estado,
				'telefono'=>$telefono,
				'carrera'=>$carrera,
				'anio_titulacion'=>$anio_titulacion,
				'metodo_titulacion'=>$metodo_titulacion,
				'escuela_proc'=>$escuela_proc,
				'promedio'=>$promedio, 				
		);
				
              $this->db->insert('usuario',$data);		
		return ($this->db->affected_rows() > 0)? true : false;


/*
$resultado = mysql_query('insert into usuario(name, ape_pat,ape_mat,curp,sexo,correo,calle,colonia,municipio,estado,telefono,carrera,anio_titulacion,metodo_titulacion,escuela_proc,promedio)
		values('".$_POST['txt_nombre']."',
		'".$_POST['txt_apaterno']."',
		'".$_POST['txt_amaterno']."',
		'".$_POST['txt_curp']."',
		'".$_POST['cmb_sexo']."',
		'".$_POST['txt_correo']."',
		'".$_POST['txt_ca']."',
		'".$_POST['txt_col']."',
		'".$_POST['txt_muni']."',
		'".$_POST['txt_esta']."',
		'".$_POST['txt_telefono']."',
		'".$_POST['txt_carrera']."',
		'".$_POST['txt_año']."',
		'".$_POST['txt_metodo']."',
		'".$_POST['txt_escuela']."',	
		'".$_POST['txt_prom']."')"', $conexion);

$mensaje = "REGISTRADO CON EXITO";
return $mensaje */


	}









	}
?>

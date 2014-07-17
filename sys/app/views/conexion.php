<script language="javascript">
function validar()
{
	with(document.form1)
	{
		if(txt_nombre.value=='' || txt_apaterno.value=='' || txt_amaterno.value=='' || txt_curp.value=='' || cmb_sexo.value== 0 || txt_correo.value=='' || txt_col.value=='' || txt_ca.value=='' || txt_muni.value=='' || txt_esta.value=='' || txt_telefono.value=='' || txt_carrera.value=='' || txt_año.value=='' || txt_metodo.value=='' || txt_escuela.value=='' || txt_prom.value=='')
		{
			alert('ES NECESARIO CAPTURAR TODOS LOS DATOS');
			open('conexion');
		}
		else
		{
			document.form1.submit();
		}
	}
}
</script>

<div id="content">
						<h2 align="center"><?=$this->lang->line('header.title')?></h2>
						<p><?=$this->lang->line('psubmission.p1')?></p>
						<p></p>
					</div>
<form id="form1" name="form1" method="post" action="">
	<table width="70%" border="0" align="center">
         <tr>
           <td><strong><center>PREINSCRIPCIÓN AL CICLO 2013</center></strong></td>
         </tr>
       </table>
      <table width="220" border="0" align="center">
        <tr>
          <td width="101">Fecha:
              <?=' '.date("d-m-y");?></td>
          <td width="73">Hora:
              <?=' '.date("h:i");?></td>
        </tr>
      </table>

      <table width="687" border="0" align="center">
        <tr>
          <td width="807" height="23" align="center"><p align="left"><p align="left"><strong>Datos Personales </strong></p></td>
        </tr>
      </table>

      <table width="84%" border="0" align="center">
        <tr>
          <td width="125" height="27" align="left" bgcolor="#FFFFFF">Nombre</td>
          <td width="176"><label>
            <input name="txt_nombre" type="text" id="txt_nombre" />
          </label></td>
          <td bgcolor="#FFFFFF">Colonia</td>
          <td bgcolor="#FFFFFF"><input name="txt_col" type="text" id="txt_col" /></td>
        </tr>
        <tr>
          <td align="left" bgcolor="#FFFFFF">Apellido Paterno </td>
          <td><label>
            <input name="txt_apaterno" type="text" id="txt_apaterno" />
          </label></td>
          <td width="67" bgcolor="#FFFFFF">Calle</td>
          <td width="235"><label>
            <input name="txt_ca" type="text" id="txt_ca" />
          </label></td>
        </tr>
        <tr>
          <td align="left" bgcolor="#FFFFFF">Apellido Materno</td>
          <td><label>
            <input name="txt_amaterno" type="text" id="txt_amaterno" />
          </label></td>
          <td bgcolor="#FFFFFF">Municipio</td>
          <td><label>
            <input name="txt_muni" type="text" id="txt_muni" />
          </label></td>
        </tr>
        <tr>
          <td align="left" bgcolor="#FFFFFF">Curp</td>
          <td><label>
            <input name="txt_curp" type="text" id="txt_curp" />
          </label></td>
          <td bgcolor="#FFFFFF">Estado</td>
          <td><label>
            <input name="txt_esta" type="text" id="txt_esta" />
          </label></td>
        </tr>
        <tr>
          <td align="left" bgcolor="#FFFFFF">Sexo</td>
          <td><label>
            <select name="cmb_sexo" id="cmb_sexo">
              <option value="0">Elige el Sexo</option>
              <option value="Femenino">Femenino</option>
              <option value="Masculino">Masculino</option>
            </select>
          </label></td>
          <td bgcolor="#FFFFFF">Tel&eacute;fono</td>
          <td><label>
            <input name="txt_telefono" type="text" id="txt_telefono" />
          </label></td>
        </tr>
        <tr>
          <td align="left" bgcolor="#FFFFFF">Correo Electr&oacute;nico </td>
          <td><input name="txt_correo" type="text" id="txt_correo" /></td>
          <td bgcolor="#FFFFFF">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>

      <table width="687" border="0" align="center">
        <tr>
          <td width="807" height="23" align="center"><p align="left"><strong> Datos Acad&eacute;micos </strong></p></td>
        </tr>
      </table>

      <table width="87%" border="0" align="center">
        <tr>
          <td width="29%" bgcolor="#FFFFFF"><p>Carrera</p></td>
          <td><label>
            <input name="txt_carrera" type="text" id="txt_carrera" />
          </label></td>
        </tr>
        <tr>
          <td height="24" bgcolor="#FFFFFF">A&ntilde;o de Titulaci&oacute;n </td>
          <td><label>
            <input name="txt_a&ntilde;o" type="text" id="txt_a&ntilde;o" />
          </label></td>
        </tr>
        <tr>
          <td height="24" bgcolor="#FFFFFF">M&eacute;todo de Titulaci&oacute;n</td>
          <td><label>
            <input name="txt_metodo" type="text" id="txt_metodo" />
          </label></td>
        </tr>
        <tr>
          <td height="26" bgcolor="#FFFFFF">Escuela de Procedencia </td>
          <td><label>
            <input name="txt_escuela" type="text" id="txt_escuela" />
          </label></td>
        </tr>
      </table>
      <table width="87%" border="0" align="center">
        <tr>
          <td width="29%" height="24" bgcolor="#FFFFFF">Promedio</td>
          <td width="71%"><label>
          <input name="txt_prom" type="text" id="txt_prom" />
          </label></td>
        </tr>
      </table>
      <table width="234" border="0" align="center">
        <tr>
          <td width="93" height="30"><label>
            <input type="button" name="Button" value="Guardar" onclick="validar();" />
          </label></td>
          <td width="66"><label>
            <input type="button" name="Submit2" value="Cancelar" onclick="javascript:parent.location='papers_submission'" />
          </label></td>
		   <!--td width="61"><label>
		   <input type="button" name="Submit22" value="Salir" onclick="javascript:parent.location='MaestriaDepi.php'" />
		   </label></td-->
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
     </form>
<?
$conexion = mysql_connect("localhost","root", "LakeTahoe2011") or die ("IMPOSIBLE CONECTAR CON EL SERVIDOR");

mysql_select_db("depi",$conexion) or  ("IMPOSIBLE CONECTAR CON LA BASE DE DATOS");

 /*if(isset($_GET['msg'])){?>
<script language="javascript">
	alert('<?=str_replace('%20',' ',trim($_GET['msg']));?>');
	open('preinscribirMaestria3.php','_self');
</script>
<?php } ?>
<?
}else{
$CadenaSQL2 = "insert into usuario(name, ape_pat,ape_mat,curp,sexo,correo,calle,colonia,municipio,estado,telefono,carrera,anio_titulacion,metodo_titulacion,escuela_proc,promedio)
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
		'".$_POST['txt_prom']."')";	
							
			
//	echo '<h1>'.$CadenaSQL2.'</h1>';
//	die();	
//	include_once('conexion.php');
	$Res = mysql_query($CadenaSQL2);
	
	if($Res > 0){
		header("Location:preinscribirMaestria3.php?msg=SE%20HA%20PREINSCRITO%20CON%20ÉXITO");
	}else{
		header("Location:preinscribirMaestria3.php?msg=OCURRIO%20UN%20ERROR,%20VERIFIQUE%20LOS%20DATOS.");
	}
}*/
?>
  

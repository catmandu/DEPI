 <div id="content">

  <script language="javascript">


function validar()
  {
   with(document.form1)
     {
	if(txt_nombre.value=='' /* || txt_apaterno.value=='' || txt_amaterno.value=='' || txt_curp.value=='' || cmb_sexo.value== 0 || txt_correo.value=='' || txt_col.value=='' || txt_ca.value=='' || txt_muni.value=='' || txt_esta.value=='' || txt_telefono.value=='' || txt_carrera.value=='' || txt_anio.value=='' || txt_metodo.value=='' || txt_escuela.value=='' || txt_prom.value=='' */)
	 {
	   alert('ES NECESARIO CAPTURAR TODOS LOS DATOS');
	 }
	else
	 {
	   //document.form1.action="<?php echo base_url();?>index.php?c=papers&m=submission";
	   //document.form1.submit();
	   //submit();
	 }
	}
}
</script>




 <h2 align="center"><?=$this->lang->line('header.title')?></h2>
 <p><?=$this->lang->line('psubmission.p1')?></p>
 <p></p>
	
	

<?php echo validation_errors(); ?>

<?php echo form_open('papers/submission'); ?>

	
<!-- form id="form1" name="form1" method="post" action="" -->

  <table width="70%" border="0" align="center">
     <tr>
        <td><strong><center>PREINSCRIPCIÓN AL CICLO 2013 - 2015</center></strong></td>
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
            <input name="txt_anio" type="text" id="txt_anio" />
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
            <input type="submit" name="Button" value="Guardar"  />
          </label></td>
      
          <td width="66"><label>
            <input type="reset" name="Submit2" value="Cancelar"/>
          </label></td>

          <!--td width="61"><label>
	  <input type="button" name="Submit22" value="Salir" onclick="javascript:parent.location='MaestriaDepi.php'" />
	 </label></td-->


        </tr>
      </table> 

      </form>   
 </tr>
</table>

</div>





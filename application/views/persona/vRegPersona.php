
<h1>Cargo Peronsa </h1>
	<form action="<?php echo base_url(); ?>cPersona/guardar" method="POST"> 
		<table>
			<tr>
			 	<td><label>DNI</label></td>
			 	<td><input type="tex" name="txtDNI" maxlength="10"></td>
			</tr>
			<tr>
			 	<td><label>Nombre</label></td>
			 	<td><input type="tex" name="txtNombre"></td>
			</tr>
			<tr>
			 	<td><label>ApPaterno</label></td>
			 	<td><input type="tex" name="txtApPaterno"></td>
			</tr>
			<tr>
			 	<td><label>ApMaterno</label></td>
			 	<td><input type="tex" name="txtApMaterno"></td>
			</tr>
			<tr>
			 	<td><label>Email</label></td>
			 	<td><input type="email" name="txtEmail"></td>
			</tr>
			<tr>
			 	<td><label>Fecha Nacimiento</label></td>
			 	<td><input type="date" name="datFechaNacimiento"></td>
			</tr>
			<tr>
			 	<td><label>Ciudad</label></td>
			 	<td>
			 		<select name="comboCiudad" id="comboCiudad" class="form-control select2">
			 			<option>::::::Elija una ciudad::::::::</option>
			 		</select>
			 	</td>
			</tr>
			<tr>
			 	<td colspan="2">USUARIO</td>
			</tr>
			<tr>
			 	<td><label>Usuario</label></td>
			 	<td><input type="text" name="txtUsuario"></td>
			</tr>
			<tr>
			 	<td><label>Clave</label></td>
			 	<td><input type="password" name="txtClave"></td>
			</tr>
			<tr>
			 	<td colspan="2"><input type="submit" value="Ingresar"></td>
			</tr>
		</table>
	</form>

	<a href="<?php echo base_url();?>cLogin">Loguearse</a>
	<br><br><br>

<div class="box box-info">
 <div class="box-header with-border">
	<button id="botonGetPersonas" type="submit" class="btn btn-primary"><i class="fa fa-search"></i>  Tabla</button>
	</div>
</div>

<div class="col-sm-5">
	<div class="box box-primary">
		 <table id="tablaPersonas" class="table table-bordered">
		                <tr>
		                  <th style="width: 10px">#</th>
		                  <th>Nombre</th>
		                  <th>Apellido Paterno</th>
		                  <th>Apellido Materno</th>
		                  <th>Cédula</th>
						  <th>Ciudad</th>
		                </tr>                
		</table>
	</div>
</div>

<script type="text/javascript">
	var baseurl = "<?php echo base_url();?>";
</script>

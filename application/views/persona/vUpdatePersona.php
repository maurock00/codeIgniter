
<div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Actualizar datos de Persona</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo base_url();?>cPersona/actualizar" method="POST">

            <div class="box-body">

            	<div class="form-group">
            		<div>
                 		<label for="inputNombre" class="col-sm-3 control-label"><?php echo $this->session->userdata['sessionDatosUsuario'];?></label>
                 	</div>	
           		</div>

                <div class="form-group">
                 	<label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
                	<div class="col-sm-10">
                   		 <input type="text" class="form-control" name="txtNombre" id="inputNombre" placeholder="Ingrese su nombre">
                	</div>
           		</div>
                
	            <div class="form-group">
	                <label for="inputApPaterno" class="col-sm-2 control-label">Apellido paterno</label>
					   <div class="col-sm-10">
	                    <input type="text" class="form-control" id="inputApPaterno" name="txtApPaterno" placeholder="Apellido paterno">
	                </div>
	            </div>

	            <div class="form-group">
	                <label for="inputApMaterno" class="col-sm-2 control-label">Apellido materno</label>
	                <div class="col-sm-10">
	                    <input type="text" class="form-control" id="inputApMaterno" name="txtApMaterno" placeholder="Apellido materno">
	                </div>
	            </div>

	            <div class="form-group">
	                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
	                    <input type="email" class="form-control" id="inputEmail" name="txtEmail" placeholder="Email">
	                </div>
	            </div>

				<div class="col-sm-11 pull-right">
	              <div class="box-footer">
	                <button type="submit"  class="btn btn-info">Actualizar</button>
	              </div>
	            </div>
	        </div>
        </form>
</div>

<div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Eliminar datos de persona por ID</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="<?php echo base_url();?>cPersona/eliminar " method="POST">

            <div class="box-body">
                <div class="form-group">
                 	<label for="inputIdPersona" class="col-sm-2 control-label">ID</label>
                	<div class="col-sm-10">
                   		 <input type="text" class="form-control" id="inputIdPersona" name="txtIdPersona" placeholder="ID de persona">
                	</div>
           		</div>

             	<div class="col-sm-11 pull-right">	
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Eliminar</button>
                </div>
              </div>
            </div>
        </form>
</div>



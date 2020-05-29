    <!DOCTYPE html>
    <html>
    <head>
    	<title>Cotizaciones por Clientes</title>

    	<?php require_once "scripts.php"; ?>
    </head>
    <body>
    	<br>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<div class="card">
    					<div class="card-header">
    						<h1>Cotizaciones por Clientes</h1>
    					</div>
    					<div class="card-body">
    						<div id="tabladatatable" style="width: 90%"></div>
    					</div>
    				</div>
    			</div>
    		</div>

    	</div>


    	<!-- Modal Editar Cotizaciones-->
    	<div class="modal fade bd-example-modal-lg" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    		<div class="modal-dialog modal-lg" role="document">
    			<div class="modal-content">
    				<div class="modal-header">
    					<h5 class="modal-title" id="exampleModalLabel">Editar Cotizacion</h5>
    					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
    					</button>
    				</div>
    				<div class="modal-body">
    					<div class="container">
    						<form id="frmeditar" name="frmeditar">
    							<div class="row">
    								<div class="form-group col-md-6">
    									<input type="text" hidden="true" id="id_cotizacion" name="id_cotizacion">
    									<label>Numero Cotizacion</label>
    									<input type="text" class="form-control" id="numero_cotizacion" name="numero_cotizacion">
    								</div>
    								<div class="form-group col-md-6">
    									<label>Atencion</label>
    									<input type="text" class="form-control" id="atencion" name="atencion">		
    								</div>
    							</div>
    							<div class="row">
    								<div class="form-group col-md-6">
    									<label>Correo</label>
    									<input type="tex" class="form-control" id="mail" name="mail">	    						
    								</div>
    								<div class="form-group col-md-6">
    									<label>Fecha</label>
    									<input type="date" class="form-control" id="fecha" name="fecha">
    								</div>
    							</div>
    							<div class="row">
    								<div class="form-group col-md-6">
    									<label>Telefono</label>
    									<input type="text" class="form-control" id="tel1" name="tel1">
    								</div>
    								<div class="form-group col-md-6">
    									<label>Empresa</label>
    									<input type="text" class="form-control" id="empresa" name="empresa">
    								</div>
    							</div>
    							<div class="row">
    								<div class="form-group col-md-6">
    									<label>Telefono de la Empresa</label>
    									<input type="text" class="form-control" id="tel2" name="tel2">
    								</div>
    								<div class="form-group col-md-6">
    									<label>Condiciones</label>
    									<select class="form-control" id="condiciones" name="condiciones">
    										<option value='Contado'>Contado</option>
    										<option value='Crédito 30 días'>2 partes (adicional 5$)</option>
    										<option value='Crédito 60 días'>3 partes (adicional 10$)</option>
    										<option value='Crédito 45 días'>Crédito 5 días (adicional 15$)</option>				
    									</select>
    								</div>
    							</div>
    							<div class="row">
    								<div class="form-group col-md-6">
    									<label>Validez de la Cotizacion</label>
    									<input type="text" class="form-control" id="validez" name="validez">
    								</div>
    								<div class="form-group col-md-6">
    									<label>Tiempo de Entrega</label>
    									<input type="text" class="form-control" id="entrega" name="entrega">
    								</div>
    							</div>
    							<div class="row">
    								<div class="form-group col-md-1">
    									<label>Activo</label>
    									<input type="checkbox" class="form-control" id="activo" name="activo" value="1">
    								</div>
    							</div>
    						</form>
    					</div>
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    					<button type="button" class="btn btn-warning" id="btnactualizar" name="btnactualizar">Actualizar</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Fin Modal Editar -->


    	<!-- Extra large modal Mostrar Cotizacion-->

    	<div class="modal fade bd-example-modal-lg" id="mostrarCotizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    		<div class="modal-dialog modal-lg" role="document">
    			<div class="modal-content">
    				<div class="modal-header">
    					<h5 class="modal-title font-weight-bold px-md-2" id="exampleModalLabel">Cotizacion Nro. <span id="numcotizacion"></span></h5>
    					<div style="margin-left: 20%"><span class="font-weight-bold px-md-1">Fecha de la Cotizacion:</span><span id="fechaV"></span></div>
    					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
    					</button>
    				</div>
    				<div class="modal-body">
    					<div class="container">
    						
    						<div class="row">
    							<div class="col-md-6">
    								<label class="font-weight-bold px-md-2">Atencion: </label><span id="atencionV"></span>
    							</div>
    							<div class="col-md-6">
    								<label class="font-weight-bold px-md-2">Correo: </label><span id="mailV"></span>
    							</div>
    							
    						</div>
    						<div class="row">
    							<div class="col-md-6">
    								<label class="font-weight-bold px-md-2">Telefono: </label><span id="tel1V"></span>
    							</div>
    							<div class="col-md-6">
    								<label class="font-weight-bold px-md-2">Empresa: </label><span id="empresaV"></span>   
    							</div> 						
    						</div>
    						<div class="row">
    							<div class="col-md-6">
    								<label class="font-weight-bold px-md-2">Telefono: </label><span id="tel2V"></span>
    							</div>
    							<div class="col-md-6">
    								<label class="font-weight-bold px-md-2">Validez: </label><span id="validezV"></span>
    							</div>
    						</div>
    						<div class="row">
    							<div class="col-md-6">
    								<label class="font-weight-bold px-md-2">Entrega: </label><span id="entreV"></span>
    							</div>
    							<div class="col-md-6">
    								<label class="font-weight-bold px-md-2">Condiciones: </label><span id="condiV"></span>
    							</div>
    						</div>
    						<hr>
    						<h5>Lista de Productos</h5>

    						<span id="ver" name="ver"></span>
    						
    					</div>
    					
    				</div>					

    			</div>
    		</div>
    	</div>
    	<!-- fin modal motrar cotizacion -->
    </body>
    </html>

    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#btnactualizar').click(function(){
    			datos = $('#frmeditar').serialize();
    			$.ajax({
    				type: "POST",
    				data: datos,
    				url: "procesos/actualizar.php",
    				success: function(r){
    					if (r==1) {
    						$('#tabladatatable').load('tabla.php');
    						alertify.success("Se Actualizo Correctamente la Cotizacion");
    					}else{
    						alertify.error("Error al Actualizar la Cotizacion");
    					}
    					$('#editarModal').modal('hide');
    				}
    			});

    		});

    	});
    </script>

    <!-- carga los datos en el datatable -->
    <script type="text/javascript">
    	$(document).ready(function(){
    		$('#tabladatatable').load('tabla.php');
    	});
    </script>

    <!-- funcion que carga los datos en el modal de actualizar -->
    <script type="text/javascript">
    	function frmactualizar(idcotizacion){
    		$.ajax({
    			type:"POST",
    			data: "idcotizacion=" + idcotizacion,
    			url: "procesos/obtenerdatos.php",
    			success: function(r){
    				datos=jQuery.parseJSON(r);

    				$('#id_cotizacion').val(datos['id_cotizacion']);
    				$('#numero_cotizacion').val(datos['numero_cotizacion']);
    				$('#atencion').val(datos['atencion']);
    				$('#mail').val(datos['email']);
    				$('#fecha').val(datos['fecha_cotizacion']);
    				$('#tel1').val(datos['tel1']);
    				$('#empresa').val(datos['empresa']);
    				$('#tel2').val(datos['tel2']);
    				$('#validez').val(datos['validez']);
    				$('#entrega').val(datos['entrega']);
    				if (datos['activo']==1) {
    					$('#activo').prop('checked',true);
    				}else {
    					$('#activo').prop('checked',false);
    				}
    				$("#condiciones option[value="+ datos['condiciones'] +"]").attr("selected",true);
    			}
    		});
    	}

    	function eliminardatos(idcotizacion){
    		alertify.confirm('Eliminar Cotizacion', 'Seguro de Eliminar esta Cotizacion?', function(){ 

    			$.ajax({
    				type:"POST",
    				data: "idcotizacion=" + idcotizacion,
    				url: "procesos/eliminar.php",
    				success: function(r){
    					if (r==1) {
    						$('#tabladatatable').load('tabla.php');
    						alertify.success('Cotizacion Eliminada con Exito!');
    					} else {
    						alertify.error('Error al Eliminar la Cotizaicon...');
    					}

    				}
    			}); 

    		}
    		, function(){ alertify.error('Cancelada la eliminacion')});

    	}

    	function mostrar(idcotizacion){
    		$.ajax({
    			type:"POST",
    			data: "idcotizacion=" + idcotizacion,
    			url: "procesos/obtenerdatos.php",
    			success: function(r){
    				datos=jQuery.parseJSON(r);

    				$('#numcotizacion').text(datos['numero_cotizacion']);
    				$('#ver').load('ver.php?dat='+datos['numero_cotizacion']);
    				$('#atencionV').text(datos['atencion']);
    				$('#mailV').text(datos['email']);
    				$('#fechaV').text(datos['fecha_cotizacion']);
    				$('#tel1V').text(datos['tel1']);
    				$('#empresaV').text(datos['empresa']);
    				$('#tel2V').text(datos['tel2']);
    				$('#validezV').text(datos['validez']);
    				$('#entreV').text(datos['entrega']);
    				$('#condiV').text(datos['condiciones']);


    			}
    		});
    	}

    </script>
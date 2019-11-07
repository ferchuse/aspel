<?php
	include('../../../conexi.php');
	$link = Conectarse();
	$consulta = "SELECT *
	FROM ventas
	WHERE id_tienda = 1
	";
	$result = mysqli_query($link, $consulta);
	
	while($fila = mysqli_fetch_assoc($result)){
		$fila_venta[] = $fila ;
	}
	
	
	
?>  


<!-- Modal Notas -->
<div class="modal d-print-none" id="modal_notas" style="max-height:500px;">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Administrador de notas</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body" >
				
				<ul>
					<li><a href="#home"><img src="../../img/busqueda_en_el_catalogo.png"></a></li>
					<li><a href="#news"><img src="../../img/filtrar_el_catalogo.png"></a></li>
					<li><a href="#news"><img src="../../img/cancelar.png"></a></li>
					<li><a href="#news"><img src="../../img/devolucion.png"></a></li>
					<li><a href="#news"><img src="../../img/exportar_consulta_a_excel.png"></a></li>
					<li>
						<form>
							<div class="form-group row ml-1 mt-1 mr-1">
								<label for="fecha_notas" class="col-2 col-form-label font-weight-bold">Fecha:</label>
								<div class="col-10">
									<input type="date" class="form-control" id="fecha_notas">
								</div>
							</div>
						</form>
					</li>
					<li >
						<form>
							<div class="form-group row mt-1 mr-1">
								<label for="select_estado" class="col-3 col-form-label font-weight-bold">Estado:</label>
								<div class="col-9 ">
									<select  class="form-control" id="select_estado">
										<option selected>Todos</option>
										<option >#</option>
										<option >#</option>
										<option >#</option>
									</select>
								</div>
							</div>
						</form>
					</li>
					
					<li><a href="#news"><img src="../../img/reimpresion.png"></a></li>
				</ul>
				
			</div>
			
			<table class="table mt-1">
				<thead>
					<tr>
						<th>Folio</th>
						<th>Estado</th>
						<th>Fecha</th>
						<th>Cliente</th>
						<th>Importe</th>
						<th>Cajero</th>
						<th>Reimprimir</th>
						
					</tr>
					<?php foreach($fila_venta AS $venta){?>
					
                    <tr class="">
						<td><?php echo $venta["id_venta"]?></td>
						<td><?php echo $venta["estatus_venta"];?></td>
						<td><?php echo date("d/m/Y", strtotime($venta["fecha_venta"]));?></td>
						<td><?php echo $venta["nombre_cliente"];?></td>
						<td><?php echo $venta["importe_venta"];?></td>
						<td><?php echo $venta["id_cajero"];?></td>
						<td>
						<button class="btn btn-primary imprimir" data-id_venta="<?php echo $venta["id_venta"]?>">
							<i class="fas fa-print"></i>
						</button>
						<button class="btn btn-danger cancelar" data-id_venta="<?php echo $venta["id_venta"]?>">
							Cancelar
						</button></td>
						</td>
					</tr>
					
                    <?php 
						}
						
					?>
				</thead>
				<tbody>
					
				</tbody>
			</table>
			
			
			<!-- Modal footer -->
			<!-- <div class="modal-footer">
				
				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
				
				<button type="button" class="btn btn-success" data-dismiss="modal"><i class="fas fa-check"></i> Aceptar</button>
				
			</div> -->
		</div>
	</div>
</div>









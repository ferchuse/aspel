<div class="modal d-print-none" id="modal_notas" style="max-height:500px;">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Administrador de notas</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<div class="modal-body" >
				<ul>
					<li><a href="#home"><img src="../assets/iconos/busqueda_en_el_catalogo.png"></a></li>
					<li><a href="#news"><img src="../assets/iconos/filtrar_el_catalogo.png"></a></li>
					<li><a href="#news"><img src="../assets/iconos/cancelar.png"></a></li>
					<li><a href="#news"><img src="../assets/iconos/devolucion.png"></a></li>
					<li><a href="#news"><img src="../assets/iconos/exportar_consulta_a_excel.png"></a></li>
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









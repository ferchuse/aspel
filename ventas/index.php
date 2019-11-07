<!DOCTYPE html>
<html lang="es_mx">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="../assets/bootstrap.min.css">
		<link rel="stylesheet" href="css/menu.css">
		<title>Nueva Nota</title>
	</head>
	
	<body id="page-top" class="container-fluid">
		
		<ul>
			<li><a href="#">	<img src="../assets/iconos/nuevo.png"></a></li>
			<li><a href="#"><img src="../assets/iconos/pagar.png"></a></li>
			<li><a href="#"><img src="../assets/iconos/cancelar.png"></a></li>
			<li><a href="../catalogos/inventarios.php"><img src="../assets/iconos/catalogos.png"></a></li>
			<li><a href="#modal_notas" data-toggle="modal" ><img src="../assets/iconos/adminnotas.png"></a></li>
			<li><a href="#"><img src="../assets/iconos/corte.png"></a></li>
			<li><a href="#"><img src="../assets/iconos/insertpart.png"></a></li>
			<li><a href="#"><img src="../assets/iconos/eliminarpart.png"></a></li>
			<li><a href="#"><img src="../assets/iconos/acumulado.png"></a></li>
			<li><a href="#"><img src="../assets/iconos/salir.png"></a></li>
		</ul>
		
		<div class="d-print-none">
			<form id="form_ventas">
				<div class="row">
					<div class="col-4">
						<div class="form-group row align-items-center">
							<label class="col-auto font-weight-bold" for="folio">Folio:</label>
							<input class="col-8" type="number" class="form-control" id="id_ventas" name="id_ventas">
						</div>
					</div>
					<div class="col-4">
						<div class="row form-group row align-items-center">
							<label class="col-auto font-weight-bold" for="nombre">Cliente:</label>
							<input class="col-6" type="text" class="form-control" id="nombre_cliente" name="nombre_cliente">
						</div>
					</div>
					<div class="col-4">
						<div class="row form-group row align-items-center">
							<label class="col-auto font-weight-bold" for="nombre">Nombre:</label>
							<input class="col-6" type="text" class="form-control" id="nombre_cliente" name="nombre_cliente"
							value="Mostrador">
						</div>
					</div>
				</div>
			</form>
			
			<div id="wrapper">
				<div id="content-wrapper">
					<div class="container-fluid">
						<table id="tabla_ventas" style="width: 100%" class="table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>Cantidad</th>
									<th>Clave</th>
									<th>Descripción</th>
									<th>Precio</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<form id="form_venta_productos">
									<tr>
										<td class="text-center">1</td>
										<td><input name="productos[][cantidad]" class="cantidad text-right"></td>
										<td><input name ="" class="articulo"></td>
										<td class="">
											<input class="descripcion" name="descripcion_productos[]" readonly>
										</td>
										<td><input class="precio" name="precio[]" readonly></td>
										<td><input class="importe" name="importe[]" readonly></td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td><input name="cantidad[]" class="cantidad text-right"></td>
										<td><input class="articulo "></td>
										<td class="">
											<input class="descripcion" name="descripcion_productos[]" readonly>
										</td>
										<td><input class="precio" name="precio[]" readonly></td>
										<td><input class="importe" name="importe[]" readonly></td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td><input name="cantidad[]" class="cantidad text-right"></td>
										<td><input class="articulo "></td>
										<td class="">
											<input class="descripcion" name="descripcion_productos[]" readonly>
										</td>
										<td><input class="precio" name="precio[]" readonly></td>
										<td><input class="importe" name="importe[]" readonly></td>
									</tr>
									<tr>
										<td class="text-center">2</td>
										<td><input name="cantidad[]" class="cantidad text-right"></td>
										<td><input class="articulo "></td>
										<td class="">
											<input class="descripcion" name="descripcion_productos[]" readonly>
										</td>
										<td><input class="precio" name="precio[]" readonly></td>
										<td><input class="importe" name="importe[]" readonly></td>
									</tr>
								</form>
							</tbody>
							<tfoot>
								<tr class="h4">
									<td class="text-right" colspan="5">Total: </td>
									<td>
										<input class="text-right form-control" readonly id="total" name="total" value="0"
										min="1" form="form_ventas">
									</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>
			<div id="ticket" class="d-print-block d-none">
			</div>
		</body>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="venta.js"></script>
		
	</html>		
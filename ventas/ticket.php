
<?php
	
	include('../../conexi.php');
    include('../../funciones/numero_a_letras.php');
    
	$link = Conectarse();
	$consulta = "SELECT * FROM ventas
    LEFT JOIN tiendas USING (id_tienda)
    LEFT JOIN venta_productos USING (id_venta)
    WHERE id_venta={$_GET["id_venta"]}";

	$result = mysqli_query($link, $consulta);
	
	while($fila = mysqli_fetch_assoc($result)){
		$fila_venta[] = $fila ;
	}
	
	
	
	?>  


<!DOCTYPE html>
<html lang="es_mx"> 
	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/ticket.css">
		<title>Ticket</title> 
	</head>
	
	<body>
		<section class="container ticket">
			<div class="row mt-5">
				<h5 class="col-12 text-center font-weight-bold">EL QUIJOTE</h1>
				<p class="font-11-5 col-12 text-center">
					Av. Insurgentes S/N Barrio San Juan,<br>
					Zumpango Estado de México C.P. 55600
				</p>
			</div>
			
			<div class="font-11-5 row mt-2 justify-content-start">
				
				<div class="pad-10 mar-0 col-12">
					<div class="mar-0 row justify-content-between">
						<span class="font col-5">Nota de Vta:</span>
						<div class="col-7 " class=""><?php echo $fila_venta[0]["id_venta"]?></div>
					</div>
					<div class="mar-0 row justify-content-between">
						<span class="font col-5">Fecha:</span>
						<div class="col-7 " class="" id="fecha" name="fecha">
							<?php echo date("d/m/Y", strtotime($fila_venta[0]["fecha_venta"]));?>
						</div>
					</div>
					<div class="mar-0 row justify-content-between">
						<span class="font- col-5">Hora:</span>
						<div class="col-7 " class="" id="hora" name="hora">
							<?php echo date("H:i", strtotime($fila_venta[0]["fecha_venta"]));?>
						</div>
					</div>
					<div class="mar-0 row justify-content-between">
						<span class="font- col-5">Cliente:</span>
						<div class="col-7 font-weight-bold" class="">
							<?php echo $fila_venta[0]["nombre_cliente"]?>
						</div>
					</div>
				</div>
				
			</div>
			
			<table class="table table-borderless mt-3 mb-3">
				
				
				<tr class=" font-11-5 ">
					<td class="text-center font-weight-bold"></td>
					<td class="text-left font-weight-bold " colspan="3">DESCRIPCIÓN DEL PRODUCTO</td>
				</tr>
				<tr class=" font-13 b-bot-1">
					<td class="text-center font-weight-bold c-wid-50">Cant.</td>
					<td class="text-center c-wid-5"></td>
					<td class="text-left font-weight-bold">Precio Unit.</td>
					<td class="text-right font-weight-bold">Importe</td>
				</tr>
				
				
				<tbody class="font-11 ">

					<?php foreach($fila_venta AS $i=>$producto){?>
					
                    <tr class="mar-0 pad-0">
						<td class="text-center"><?php echo $producto["cantidad"];?></td>
                        <td class="" colspan="2"><?php echo $producto["descripcion_productos"];?></td>
                        <td></td>
                        <td></td>
                        
                    </tr>		
                    <tr class="line">
                        <td></td>
                        <td></td>
                        <td><?php echo $producto["precio"];?></td>
						<td class="text-right"><?php echo $producto["importe"];?></td>
                    </tr>

                    <?php 
						}
					?>
					
					
				</tbody>
				
				
                    <tr class="b-top-1">
                        <td class="font-12 font-weight-bold text-right" colspan="3">TOTAL:</td>
                        <td class="font-12 font-weight-bold text-right"><?php echo $producto["importe_venta"]?></td>
                    </tr>
                
				
			</table> 
			
			<p class="font-13 text-center"><?php echo NumeroALetras::convertir($producto["importe_venta"], "pesos", "centavos")?> </p>
			
			<p class="font-12 font-weight-bold">Anotaciones:</p>
			<br><br><br><br>
			
			
			<p class="font-weight-bold text-center mb-4">GRACIAS POR SU COMPRA</p>
			
			
			
			
			
			
		</section>
		
	</body>	
</html>	
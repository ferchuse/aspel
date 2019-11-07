///Variables globales
var $input_activo, producto_elegido;




function disableFunctionKeys(e) {
	var functionKeys = new Array(112, 113, 114, 115, 117, 118, 119, 120, 121);
	if (functionKeys.indexOf(e.keyCode) > -1 || functionKeys.indexOf(e.which) > -1) {
		e.preventDefault();
	}
	// $input_activo = $(this);
};

function buscar_producto() {
	// Declare variables 
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("buscar_producto");
	filter = input.value.toUpperCase();
	table = document.getElementById("tabla_productos");
	tr = table.getElementsByTagName("tr");
	
	// Loop through all table rows, and hide those who don't match the search query
	for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[0];
		if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
				} else {
				tr[i].style.display = "none";
			}
		} 
	}
	var $rows = $("#tabla_productos > tbody tr:visible").keynavigator({
		cycle : false,
		activeClass : "bg-info",
		
		keys:{
			
			'enter': agregarProducto
		}
	});
	
}

function agregarProducto($el, cellIndex, e){
	
	// console.log('agregarProducto()'); 
	// console.log('$input_activo', $input_activo); 
	// console.log('pressed "enter"', arguments); 
	// console.log('$el"', $el);
	// console.log('id_productos"', $el.data("id_productos"));
	// console.table($el.data);
	$("#modal_productos").modal("hide");
	$input_activo.val($el.data("id_productos")).focus();
	$input_activo.data("descripcion_productos", $el.data("descripcion_productos") );
	$input_activo.data("precio", $el.data("precio") );
	
	resetProductos();
}


function sumar_importes(){
	console.log("sumar_importes()");
	var total = 0;
	$(".cantidad").each(function(index, elemento){
		
		var cantidad = $(elemento).val();
		var precio = $(elemento).closest("tr").find(".precio").val();
		
		var importe = cantidad * precio;
		
		if(importe != 0){
			$(elemento).closest("tr").find(".importe").val(importe);
			total+= importe;
		}
		
		
		
	});
	
	$("#total").val(total);
	$("#importe").val(total);
	
}



$(document).ready(function () {
	
	$(document).on('keydown', disableFunctionKeys);
	
	$("#modal_productos").on('hidden.bs.modal', function(){
		console.log("quita modal_productos ");
		$input_activo.focus();
	});
	
	
	$(".cantidad:first").val("1").focus();
	
	$("#modal_productos").on("shown.bs.modal", function(){
		
		$("#buscar_producto").focus();
	});
	
	
	$("#modal_pago").on("shown.bs.modal", function(){
		
		$("#importe").focus();
	});
	
	
	$(".cantidad").focus(function(){ 
		if($(this).val() == ''){$(this).val(1);}
	});
	
	$("#buscar_producto").keyup(function(event){
		if (event.which==13){
			buscar_producto();
			// $rows.keynavigator.reBuild();
			$('#tabla_productos > tbody tr:visible:first').click();
		} 
	});
	
	
	// $("table > tbody tr").keynavigator();
	$("input").focus(function(){
		$(this).select();
		
	});
	$(".articulo").focus(function(){
		
	});
	
	
	// $('#tabla_ventas').formNavigation();
	
	$('.articulo').bind('keyup', 'f2', function mostrarModalProductos(){
		console.log("F2");
		$input_activo = $(this);
		console.log("#modal_productos", $input_activo);
		$("#modal_productos").modal("show");
		
		$("#buscar_producto").val("");
		
		
	});
	
	$('.articulo, .cantidad').bind('keyup', 'f3', function(){
		console.log("f3")
		$("#modal_pago").modal("show");
	});
	
	
	
	
	///Flechas arriba y abajo
	$('.articulo').bind('keyup', 'up', function(){
		console.log("down");
		$(this).closest("tr").prev().find(".articulo").focus();
	});
	
	$('.articulo').bind('keyup', 'down', function(){
		console.log("down");
		if($(this).val() != ''){
			
			$(this).closest("tr").next().find(".articulo").focus();
		}
	});
	
	
	
	$('.cantidad').bind('keyup', 'down', function(){
		console.log("down");
		if($(this).closest("tr").next().find(".cantidad").val() != ''){
			
			$(this).closest("tr").next().find(".cantidad").focus();
			sumar_importes();
		}
	});
	$('.cantidad').bind('keyup', 'up', function(){
		console.log("up");
		$(this).closest("tr").prev().find(".cantidad").focus();
		sumar_importes();
	});
	
	
	$('.articulo, .cantidad').bind('keyup', 'return', siguienteCelda);
	
	
	
	
	// $(".descripcion").autocomplete({
	// serviceUrl: "Consultas/cotizador_autocomplete.php",
	// lookup: countries,
	// onSearchStart: function (query) {
	// $(this).addClass("buscando"); 
	// },
	// onSearchComplete: function (query, suggestions) {
	// $(this).removeClass("buscando");
	// },
	// onSelect: function (eleccion){
	// console.log("Elegiste",eleccion );
	
	// poner cantidad 1
	
	// $(this).closest(".row").find(".cantidad").val(1);
	
	// $(this).closest(".row").find(".precio").val(eleccion.data.precio_compra);
	// $(this).closest(".row").find(".id_producto").val(eleccion.data.id_producto);
	// $(this).val(eleccion.data.descripcion);
	// calcularTotal(); 
	// console.log("id_producto",eleccion.data.id_producto);
	
	// }
	// });
});

function resetProductos(){
	console.log("resetProductos")
	$("#tabla_productos > tbody tr").css("display", "");
	
	var $rows = $("#tabla_productos > tbody tr:visible").keynavigator({
		cycle : false,
			activeClass : "bg-info",
			
			keys:{
				'enter': agregarProducto
			}
		});
	
}


function siguienteCelda(){
		
	console.log("siguienteCelda()");
	
	
	if($(this).val() != ''){
		if($(this).hasClass("cantidad")){
			console.log("ir a articulo");
			$(this).closest("tr").find(".articulo").focus();
			
		}
		else{
			console.log("siguiente fila");
			
			
			$(this).closest("tr").find(".descripcion").val($(this).data("descripcion_productos"));
			$(this).closest("tr").find(".precio").val($(this).data("precio"));
			$(this).closest("tr").next().find(".cantidad").focus();
			
		
		}
	}
	
	sumar_importes();
}




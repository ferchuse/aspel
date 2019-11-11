$('.articulo, .cantidad, .descripcion, .precio, .total').keyup(function (e) {
	switch (e.key) {
		case 'ArrowUp':
			$(this).closest("tr").prev().find(`.${e.target.className.split(" ")[0]}`).focus();
			break;
		case 'ArrowDown':
			$(this).closest("tr").next().find(`.${e.target.className.split(" ")[0]}`).focus();
			break;
		case 'ArrowLeft':
			break;
		case 'ArrowRight':
			console.log("HAS")
			break;
		case 'F2':
			$('#modal_notas').modal('show');
			break;
	}
})

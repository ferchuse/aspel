$('.articulo, .cantidad').keyup(function (e) {
	switch (e.key) {
		case 'ArrowUp':
			console.log("Arriba", e.target.className.split(" ")[0]);
			$(this).closest("tr").prev().find(`.${e.target.className.split(" ")[0]}`).focus();
			break;
		case 'ArrowDown':
			console.log("Abajo");
			$(this).closest("tr").next().find(`.${e.target.className.split(" ")[0]}`).focus();
			break;
		case 'ArrowLeft':
			console.log("Izq");
			break;
		case 'ArrowRight':
			console.log("Derecha");
			break;
	}
})

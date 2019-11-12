

$('document').ready(function () {
  $('#tabla_ventas tbody').append(appendRow);
  $('.articulo').keyup(addNewRow);
  $('.articulo, .cantidad, .descripcion, .precio, .total').keyup(move_cursor);
});

function addNewRow(e) {
  switch (e.key) {
    case 'Enter':
      if ($(this).val() === '' || $(this).val() === null) {
        console.log("Tienes que llenarlo");
      } else {
        $('#tabla_ventas tbody').append(appendRow);
        $('.articulo, .cantidad, .descripcion, .precio, .total').keyup(move_cursor);
        $(this).closest("tr").next().find(`.${e.target.className.split(" ")[0]}`).focus();
        $('.articulo').keyup(addNewRow);
      }
      break;
    case 'F2':
      $('#modal_catalogo').modal('show');
      break;
  }
}

function appendRow(index) {
  var row_template = `<tr>
    <td class="text-center">${$('#tabla_ventas tbody tr').length + 1}</td>
    <td><input name="productos[][cantidad]" class="cantidad text-right form-control"></td>
    <td><input name ="" class="articulo form-control"></td>
    <td><input class="descripcion form-control" name="descripcion_productos[]" size="35"></td>
    <td><input class="precio form-control" name="precio[]" readonly></td>
    <td><input class="importe form-control" name="importe[]" readonly></td>
  </tr>`;

  return row_template;
}

function move_cursor(e) {
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
  }
}

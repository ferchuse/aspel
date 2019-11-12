var num_rows = 1;
var row_template = `<tr>
    <td class="text-center">${num_rows}</td>
    <td><input name="productos[][cantidad]" class="cantidad text-right form-control"></td>
    <td><input name ="" class="articulo form-control"></td>
    <td><input class="descripcion form-control" name="descripcion_productos[]" size="35"></td>
    <td><input class="precio form-control" name="precio[]" readonly></td>
    <td><input class="importe form-control" name="importe[]" readonly></td>
  </tr>`;

$('document').ready(function () {
  $('#tabla_ventas tbody').append(row_template);
  $('.articulo').keyup(addNewRow);
  $('.articulo, .cantidad, .descripcion, .precio, .total').keyup(move_cursor);
});

function addNewRow(e) {
  switch (e.key) {
    case 'Enter':
      num_rows += 1;
      if ($(this).val() === '' || $(this).val() === null) {
        console.log("Tienes que llenarlo");
      } else {
        console.log(num_rows)
        $('#tabla_ventas tbody').append(row_template);
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

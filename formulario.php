<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="codigo">Código del paquete:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="id_paqYrec">id_paqYrec:</label>
		<input class="form-control" name="id_paqYrec" required type="number" id="id_paqYrec" placeholder="Escribe el id_paqYrec">

		<label for="paquetes_y_recargas">paquetes_y_recargas:</label>
		<input class="form-control" required type="text" id="paquetes_y_recargas" name="paquetes_y_recargas" placeholder="Escribe las paquetes_y_recargas">

		<label for="id_chip">id_chip:</label>
		<input class="form-control" name="id_chip" required type="number" id="id_chip" placeholder="Escribe el id_chip">

		<label for="chip">chip:</label>
		<input class="form-control" required type="text" id="chip" name="chip" placeholder="Escribe el chip">

		<label for="id_accesorios">id_accesorios:</label>
		<input class="form-control" name="id_accesorios" required type="text" id="id_accesorios" placeholder="Escribe el id_accesorios">

		<label for="accesorios">accesorio:</label>
		<input class="form-control" required type="text" id="accesorios" name="accesorios" placeholder="Escribe el accesorio">

		<label for="id_tel">id_tel:</label>
		<input class="form-control" name="id_tel" required type="text" id="id_tel" placeholder="Escribe el id_tel">

		<label for="telefonos">telefonos:</label>
		<input class="form-control" required type="text" id="telefonos" name="telefonos" placeholder="Escribe el telefono">

		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

		<label for="precioCompra">Precio de compra:</label>
		<input class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>
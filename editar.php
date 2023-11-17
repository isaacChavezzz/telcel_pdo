<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM tbl_productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="codigo">Código del paquete:</label>
			<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

			<label for="id_paqYrec">id_paqYrec:</label>
			<input value="<?php echo $producto->id_paqYrec ?>" class="form-control" name="id_paqYrec" required type="number" id="id_paqYrec" placeholder="Escribe el id_paqYrec">

			<label for="paquetes_y_recargas">paquetes y recargas:</label>
			<input value="<?php echo $producto->paquetes_y_recargas ?>" id="paquetes_y_recargas" name="paquetes_y_recargas" class="form-control" required type="text" placeholder="Escribe el paquete y recarga">

			<label for="id_chip">id_chip:</label>
			<input value="<?php echo $producto->id_chip ?>" class="form-control" name="id_chip" required type="number" id="id_chip" placeholder="Escribe el id_chip">

			<label for="chip">chip:</label>
			<input value="<?php echo $producto->chip ?>" id="chip" name="chip" class="form-control" required type="text" placeholder="Escribe el chip">

			<label for="id_accesorios">id_accesorios:</label>
			<input value="<?php echo $producto->id_accesorios ?>" class="form-control" name="id_accesorios" required type="number" id="id_accesorios" placeholder="Escribe el id_accesorio">

			<label for="accesorios">accesorios:</label>
			<input value="<?php echo $producto->accesorios ?>" id="accesorios" name="accesorios" class="form-control" required type="text" placeholder="Escribe el accesorio">

			<label for="id_tel">id_tel:</label>
			<input value="<?php echo $producto->id_tel ?>" class="form-control" name="id_tel" required type="number" id="id_tel" placeholder="Escribe el id_tel">

			<label for="telefonos">telefonos:</label>
			<input value="<?php echo $producto->telefonos ?>" id="telefonos" name="telefonos" class="form-control" required type="text" placeholder="Escribe el telefonos">

			<label for="precioVenta">Precio de venta:</label>
			<input value="<?php echo $producto->precioVenta ?>" class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

			<label for="precioCompra">Precio de compra:</label>
			<input value="<?php echo $producto->precioCompra ?>" class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>

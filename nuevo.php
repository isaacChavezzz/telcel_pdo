<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["codigo"]) || !isset($_POST["id_paqYrec"]) || !isset($_POST["paquetes_y_recargas"]) || !isset($_POST["id_chip"]) || !isset($_POST["chip"]) || !isset($_POST["id_accesorios"]) || !isset($_POST["accesorios"]) || !isset($_POST["id_tel"]) || !isset($_POST["telefonos"]) || !isset($_POST["precioVenta"]) || !isset($_POST["precioCompra"]) || !isset($_POST["existencia"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$codigo = $_POST["codigo"];
$id_paqYrec = $_POST["id_paqYrec"];
$paquetes_y_recargas = $_POST["paquetes_y_recargas"];
$id_chip = $_POST["id_chip"];
$chip = $_POST["chip"];
$id_accesorios = $_POST["id_accesorios"];
$accesorios = $_POST["accesorios"];
$id_tel = $_POST["id_tel"];
$telefonos = $_POST["telefonos"];
$precioVenta = $_POST["precioVenta"];
$precioCompra = $_POST["precioCompra"];
$existencia = $_POST["existencia"];

$sentencia = $base_de_datos->prepare("INSERT INTO tbl_productos(codigo, id_paqYrec, paquetes_y_recargas, id_chip, chip, id_accesorios, accesorios, id_tel, telefonos, precioVenta, precioCompra, existencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?);");
$resultado = $sentencia->execute([$codigo, $id_paqYrec, $paquetes_y_recargas, $id_chip, $chip, $id_accesorios, $accesorios, $id_tel, $telefonos, $precioVenta, $precioCompra, $existencia]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>
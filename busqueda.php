<?php
require("./php/cabecero2.php");
?>
<!-- contenido principal de la pagina -->
<!--Contenido principal de la pagina-->
<br>
<div class="col" style=" position: relative; height: 30px; border-color: white; background-color: white;">
<h6>Busqueda Avanzada: <h6>
<form action="busqueda.php" method="get">
<input type="text" name="busqueda">
<button type="submit">Buscar</button>
</form>
</div>
<br>
<br>

<div class="row">
<?php
include('./php/conexioncarrito.php');
$res=$_GET['busqueda'];
$resultado= $conexion -> query("select * from productos where id='$res' or nombre like '%".$_GET['busqueda']."%' ") or die($conexion -> error);
// "select * from productos where nombre like '%".$_GET['busqueda']."%'"
while($fila = mysqli_fetch_array($resultado)){
?>

<div class="col-3" style="display:block">
<a href="formactulizar.php?id=<?php echo $fila['id']?>">	
<div align="center"><img src="./img/productos/<?php echo $fila['imagen'];?>" alt="" width="180" height="250"></div>
<p style="font-size: 20px; text-align: center; color: black;"><br><?php echo $fila['nombre']; ?><br>$<?php echo $fila ['precio']?></p></a>
</div>
<?php } ?>
</div>	

<?php
require("./php/footer.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- se incluye la libreria de jquery -->
<script >
	$(document)

</script>
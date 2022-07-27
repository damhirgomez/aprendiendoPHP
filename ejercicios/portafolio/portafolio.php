<?php include("cabecera.php")?>
<?php include("conexion.php")?>
<?php
$ObjConexion = new conexion();
if ($_POST) {
    print_r($_POST);

    $nombre = $_POST['nombreProyecto'];
    $fecha = new DateTime();
    $archivo = $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    $archivo_tmp = $_FILES['archivo']['tmp_name'];
    move_uploaded_file($archivo_tmp, "imagenes/" . $archivo);
    $descripcion = $_POST['descripcion'];
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$archivo', '$descripcion')";
    $id=$ObjConexion->insertar($sql);
    header("Location: portafolio.php");

}


if ($_GET) {
    $id = $_GET['borrar'];
    $imagen =  $ObjConexion->consultar("SELECT imagen FROM `proyectos` WHERE id =" .$id);
    $eliminar = "DELETE FROM proyectos WHERE `proyectos`.`id` =" . $id;
    $ObjConexion->insertar($eliminar);
    unlink("imagenes/" . $imagen[0]['imagen']);
    header("Location: portafolio.php");
}
$metodo = "SELECT * FROM `proyectos`";
$proyectos = $ObjConexion->consultar($metodo);

?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="card">
        <div class="card-header">
            Datos del proyecto
        </div>
        <div class="card-body">
            <form action="portafolio.php" method="post" enctype="multipart/form-data">
                <label for="nombreProyecto">Nombre del proyecto: </label>
                <input class="form-control" type="text" name="nombreProyecto">
                <br>
                <label for="archivo">Imagen del proyecto: </label>
                <input class="form-control" type="file" name="archivo" id="">
                <br>
                <div class="mb-3">
                    <br>
                  <label for="descripcion" class="form-label">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="" rows="3"></textarea>
                </div>
                <br>
                <input class="btn btn-success" type="submit" value="Enviar archivo">
                <br>
            </form>
        </div>
        </div>
        </div>
        <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyectos as $proyecto) { ?>
                    <tr>
                        <td><?php echo $proyecto['id'] ?></td>
                        <td><?php echo $proyecto['nombre'] ?></td>
                        <td><img src="imagenes/<?php echo $proyecto['imagen'] ?>" width="100"></td>
                        <td><?php echo $proyecto['imagen'] ?></td>
                        <td><?php echo $proyecto['descripcion'] ?></td>
                        <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'] ?>">Eliminar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        
    </div>
</div>
    

    


<?php include("pie.php")?>
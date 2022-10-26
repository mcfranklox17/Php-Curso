<?php include("header.php") ?>
<?php include("conexion.php") ?>
<?php 
    if($_POST) {

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        $fecha = new DateTime();

        $imagen = $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
        $img_temporal = $_FILES['archivo']['tmp_name'];
        move_uploaded_file($img_temporal, "imagenes/".$imagen);

        $objConexion = new Conexion();
        $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
        $objConexion->Ejecutar($sql);
    }  

    if($_GET) {
        //"DELETE FROM proyectos WHERE `proyectos`.`id` = 2"
        $id = $_GET['borrar'];
        
        $objConexion = new Conexion();

        $imagen = $objConexion->Consultar("SELECT imagen FROM `proyectos` WHERE id =".$id);

        unlink("imagenes/".$imagen[0]['imagen']);

        $sql = "DELETE FROM proyectos WHERE `proyectos`.`id` = ".$id;
        $objConexion->Ejecutar($sql);
    }

    $objConexion = new Conexion();
    $result = $objConexion->Consultar("SELECT * FROM `proyectos`");


?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">
                        Datos de Proyecto
                    </div>
                    <div class="card-body">
                        <form action="portafolio.php" method="post" enctype="multipart/form-data">
                            Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
                            <br>
                            Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
                            <br>
                            Descripción: <textarea class="form-control" name="descripcion" id=""></textarea>
                            <br>
                            <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($result as $p) {                             
                            ?>
                            <tr class="">
                                <td scope="row"><?php echo $p['id'];?></td>
                                <td><?php echo $p['nombre'];?></td>
                                <td>
                                    <img width="100px" src="imagenes/<?php echo $p['imagen'];?>" alt="img">
                                    
                                </td>
                                <td><?php echo $p['descripcion'];?></td>
                                <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $p['id']; ?>" role="button">Eliminar</a></td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


<?php include("footer.php") ?>
<?php
    include "conexion.php";
?>

<?php
    mysqli_select_db($conexion,"librosbd");

    $identificador = $_POST["identificador"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    $directorioSubida = "imagenes/";
    $max_file_size = "5120000";
    $extensionesValidas = array("jpg","jpeg","png","gif");

    if(isset($_FILES["imagen"])) {
        echo "dentro";
        $errores = 0;
        $nombreArchivo = $_FILES["imagen"]["name"];
        $filesize = $_FILES["imagen"]["size"];
        $directorioTemporal = $_FILES["imagen"]["tmp_name"];
        $tipoArchivo = $_FILES["imagen"]["type"];
        $arrayArchivo = pathinfo($nombreArchivo);
        $extension = $arrayArchivo["extension"];

        if(!in_array($extension,$extensionesValidas)) {
            echo "La extensión no es válida";
            $errores = 1;
        }

        if($filesize > $max_file_size) {
            echo "La imagen debe tener un tamaño inferior";
            $errores = 1;
        }

        if($errores == 0) {
            echo $nombreArchivo;
            $nombreCompleto = $directorioSubida . $nombreArchivo;
            move_uploaded_file($directorioTemporal, $nombreCompleto);
        }
    }

    $insertar = "INSERT libro (id_libro, nombre, descripcion, precio, fotografia) VALUES ('$identificador', '$nombre', '$precio', '$nombreArchivo')";

    mysqli_query($conexion, $insertar);
    header("Location: alta_realizada.php");
?>

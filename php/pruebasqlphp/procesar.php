<?php  
include 'conexion.php';

// INSERTAR 
if (isset($_POST['Insertar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $sql = "INSERT INTO persona (nombre, apellido) VALUES ($1, $2)";
        $query = pg_query_params($conexion, $sql, array($nombre, $apellido));

        if ($query) {
            echo "La inserción de datos fue exitosa";
        } else {
            echo "Error en la inserción: " . pg_last_error($conexion);
        }
    } else {
        echo "Debes completar todos los campos";
    }
    echo '<meta http-equiv="refresh" content="2; url=index.php">';
}

//  MODIFICAR
if (isset($_POST['Modificar'])) {
    if (!empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['apellido'])) {
        $id       = $_POST['id'];
        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $sql = "UPDATE persona SET nombre=$1, apellido=$2 WHERE id=$3";
        $query = pg_query_params($conexion, $sql, array($nombre, $apellido, $id));

        if ($query) {
            echo "Registro modificado correctamente";
        } else {
            echo "Error al modificar: " . pg_last_error($conexion);
        }
    } else {
        echo "Todos los campos son obligatorios para modificar";
    }
    echo '<meta http-equiv="refresh" content="2; url=index.php">';
}

// ELIMINAR 
if (isset($_POST['Eliminar'])) {
    if (!empty($_POST['id_eliminar'])) {
        $id = $_POST['id_eliminar'];

        $sql = "DELETE FROM persona WHERE id=$1";
        $query = pg_query_params($conexion, $sql, array($id));

        if ($query) {
            echo "Registro eliminado correctamente";
        } else {
            echo "Error al eliminar: " . pg_last_error($conexion);
        }
    } else {
        echo "No se proporcionó un ID para eliminar";
    }
    echo '<meta http-equiv="refresh" content="2; url=index.php">';
}
?>

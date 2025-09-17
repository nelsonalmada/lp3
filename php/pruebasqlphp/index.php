<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Personas</title>
</head>
<body>
    <h1>Formulario para Insertar Persona</h1>

    <!-- Formulario de Inserción -->
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" required><br><br>
        <input type="submit" name="Insertar" value="Insertar">
    </form>

    <h2>Lista de Personas</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <?php
        $result = pg_query($conexion, "SELECT * FROM persona ORDER BY id");
        if ($result) {
            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['nombre']."</td>
                        <td>".$row['apellido']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay registros</td></tr>";
        }
        ?>
    </table>

    <!--EDITAR -->
    <h2>Editar Persona por ID</h2>
    <form action="" method="get">
        <label for="buscar_id">Ingrese ID a Editar:</label>
        <input type="number" id="buscar_id" name="id_buscar" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET['id_buscar'])) {
        $id_buscar = $_GET['id_buscar'];
        $result = pg_query_params($conexion, "SELECT * FROM persona WHERE id=$1", array($id_buscar));
        if ($row = pg_fetch_assoc($result)) {
            ?>
            <h3>Modificar Datos</h3>
            <form action="procesar.php" method="post">
                <label for="id">ID:</label><br>
                <input type="text" id="id" name="id" value="<?php echo $row['id']; ?>" readonly><br>

                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>

                <label for="apellido">Apellido:</label><br>
                <input type="text" id="apellido" name="apellido" value="<?php echo $row['apellido']; ?>" required><br><br>

                <input type="submit" name="Modificar" value="Modificar">
            </form>
            <?php
        } else {
            echo "<p>No se encontró ningún registro con ID $id_buscar</p>";
        }
    }
    ?>

    <!-- ELIMINAR -->
<h2>Eliminar Persona por ID</h2>
<form action="" method="get">
    <label for="buscar_eliminar">Ingrese ID a Eliminar:</label>
    <input type="number" id="buscar_eliminar" name="id_eliminar_buscar" required>
    <input type="submit" value="Enviar">
</form>

<?php
if (isset($_GET['id_eliminar_buscar'])) {
    $id_eliminar = $_GET['id_eliminar_buscar'];
    $result = pg_query_params($conexion, "SELECT * FROM persona WHERE id=$1", array($id_eliminar));
    if ($row = pg_fetch_assoc($result)) {
        ?>
        <h3>Eliminar Registro</h3>
        <p><strong>ID:</strong> <?php echo $row['id']; ?></p>
        <p><strong>Nombre:</strong> <?php echo $row['nombre']; ?></p>
        <p><strong>Apellido:</strong> <?php echo $row['apellido']; ?></p>

        <form action="procesar.php" method="post">
            <input type="hidden" name="id_eliminar" value="<?php echo $row['id']; ?>">
            <input type="submit" name="Eliminar" value="Eliminar" onclick="return confirm('¿Seguro que quieres eliminar este registro?')">
        </form>
        <?php
    } else {
        echo "<p>No se encontró ningún registro con ID $id_eliminar</p>";
    }
}
?>

<?php
$conexion = mysqli_connect("localhost", "u536062790_formusuario	", "Formusu123+", "u536062790_formusuario");

if (!$conexion) {
die("No se pudo conectar a la base de datos: " . mysqli_connect_error());
}

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];
$correo = $_POST["correo"];
$comentarios = $_POST["comentarios"];

$query = "INSERT INTO usuario (Cedula, Nombre, Contrasena, Correo, Comentarios) VALUES ('$cedula', '$nombre', '$contrasena', '$correo', '$comentarios')";

mysqli_query($conexion, $query);

if (mysqli_affected_rows($conexion) > 0) {
echo "¡Usuario registrado correctamente!";
} else {
echo "Ocurrió un error al registrar el usuario.";
}

mysqli_close($conexion);

?>

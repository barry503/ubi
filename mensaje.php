<?php 

include 'conexion.php';
//Recibir los datos y almacenarlos en variables

       $nombre = $_POST['nombre'];
       $email = $_POST['email'];
       $asunto = $_POST['asunto'];
       $mensaje = $_POST['mensaje'];
     
    

	
// Consulta para insertar en tabla comentario
// clave primaria = id        
//nombre 
//email
//asunto
//mensaje      
$insertar = "INSERT INTO comentario(nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM comentario WHERE id = 'id'");
if (mysqli_num_rows($verificar_usuario) > 0){
    echo 'el usuario ya envio su comentario..';
    exit;
}
//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
    echo 'Error al enviar el comentario';

}else {
    echo'mensaje enviado....';
}
//Cerrar conexion
mysqli_close($conexion);

 ?>

   <script type="text/javascript">
  alert("Tu comentario fue enviado correctamente!!");
  window.location.href='ubicacion.php';
</script>
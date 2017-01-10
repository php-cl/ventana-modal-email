<?php
// Insertar articulo
if($_POST)
{
  if (isset($_POST['nombre']))
  {
    $nombre  = $_POST['nombre'];
    $mail  = $_POST['mail'];
    $telefono  = $_POST['telefono'];
    $fecha= date("d-m-Y H:i:s");
  

    class MyDB2 extends SQLite3
   {
      function __construct()
      {
         $this->open('crm.db');
      }
   }
   $db = new MyDB2();
   if(!$db){
      echo $db->lastErrorMsg();
   } 

   $sql =<<<EOF
      INSERT INTO crm (nombre,mail,telefono,fecha) VALUES ('$nombre', '$mail', '$telefono', '$fecha');
EOF;

   $ret = $db->exec($sql);

   if(!$ret){
      echo $db->lastErrorMsg();
   } 
   else {
    
    // Agrego una seccion
    session_start();
    $_SESSION['nombre'] = $nombre;
    header("Location: index.php");

    // Mando un Mail
    mailk($nombre,$mail,$telefono);


   }
   $db->close();
  }
 
}



function mailk($nombre,$email,$telefono){
// Guardar los datos recibidos en variables:

// Definir el correo de destino:
$dest = "mfalcon@123sap.cl"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "CRM 123SAP";
$cuerpo .= "CRM www.123sap.cl"."<br>";
$fecha = date("d-m-Y");
$cuerpo .= "Enviado: ".$fecha."<br>";
$cuerpo .= "Nombre: ".$nombre."<br>";
$cuerpo .= "Email: ".$email."<br>";
$cuerpo .= "Telefono: ".$telefono."<br>";
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
    mail($dest,utf8_decode($asunto),utf8_decode($cuerpo),utf8_decode($headers)); //ENVIAR!
}

?>
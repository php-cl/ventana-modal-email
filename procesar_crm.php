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
    
    session_start();
    
    $_SESSION['nombre'] = $nombre;

    header("Location: index.php");

   }
   $db->close();
  }
 
}

?>
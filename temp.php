<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset ="UTF8">
  <title>Ejemplo Boostrap</title>
  <meta name="viewport" content="width = device-width">
  <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
 <body>
  

<?php

session_start();
if(empty($_SESSION['nombre'])) { 

echo "
<!-- Modal -->
<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <h4 class='modal-title' id='myModalLabel'>Registrarse</h4>
      </div>
      <div class='modal-body'>
        

<form class='form-horizontal' method='post' enctype='plain' action='procesar_crm.php' method='POST'>

  <div class='form-group'>
    <div class='col-sm-4'>
      <img src='marlon.jpg' alt='' class='my-image-mfh'>
    </div>
    <div class='col-sm-8'>
      <p>Gracias por visitar mi blog www.ejemplo.cl, si te interesado en cursos de SAP dejame tus datos para informarte de los nuevos cursos que impartiré.</p>
      <p>Feliz 2017</p>
      <strong><p>Marlon Falcón Hernández</p></strong>
      <p>mfalcon@123sap.cl</p>
    </div>
  </div>



  <div class='form-group'>
    <div class='col-sm-12'>
      <input type='text' class='form-control' id='inputEmail3' placeholder='Nombre' required name='nombre'>
    </div>
  </div>



  <div class='form-group'>
    <div class='col-sm-12'>
      <input type='email' class='form-control' id='inputEmail3' placeholder='Email' required name='mail'>
    </div>
  </div>


  <div class='form-group'>
    <div class='col-sm-12'>
      <input type='text' class='form-control' id='inputEmail3' placeholder='Teléfono' required name='telefono'>
    </div>
  </div>

      <div class='modal-footer'>
        <button type='submit' class='btn btn-primary' >Enviar</button>
      </div>
</form>



      </div>
    </div>
  </div>
</div>

 ";
        
    }
?>







  <script type="text/javascript">
  $(document).ready(function(){
        $('#myModal').modal('show');
  })


  </script>
  


 <style>
    .my-image-mfh{
      width: 100%;
      height: auto;
    }
 </style>

 </body>
</html>
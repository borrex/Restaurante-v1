<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/estilos.login.css">
	<title>Login Sistema Restaurante v1</title>
</head>

<body>

<div class="row">
	<div class="col-md-12">
    <div class="conta">
       <h1>Mariscos&nbsp;&nbsp;&nbsp;<i class="fa fa-cutlery"></i> Barra de Navidad</h1>
		<form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<hr>
	  <div class="form-group">
		 <i class="fa fa-user"></i> <label for="nombreusuario"><b> Nombre del Usuario</b></label>	    
		<input type="text" name="nombreusuario" class="form-control" placeholder="Nombre Usuario ">
	  </div>
	  <div class="form-group">
	      <i class="fa fa-unlock-alt"></i> <label for="password"><b> Contraseña del  Usuario</b></label> 
		<input type="password" name="password" class="form-control" placeholder="Contraseña Usuario">
	  </div><br>


       <?php  if(!isset($_SESSION['nombreusuario'])){
                 require 'btn.php'; }?>
             <?php if (!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?> 
            <?php endif; ?>
            <br>
            <?php if(!empty($error)): ?>
            	<br>
                <div class="error">                
                     <?php echo $error ?>
               </div>
            <?php endif; ?>
		</form>
    </div>
	</div>
</div>
</body>
</html>
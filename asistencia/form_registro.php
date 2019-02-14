<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registrar Usuario</title>
 <meta charset = "utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Materialize files-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
</head>


<script>

    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>

<body>
 <header>
 <h2 style="text-align:center">Registro </h2>
  </header>
<div class="row" style="margin-top:50px">
<div class="col s6 offset-s3">



<form action="submit_registro.php" method="post">

 <hr />

 <!--Nombre-->
 <div class="form-group">
 <label for="nombre">Nombre Completo:</label><br>
 <input type="text" name="nombre" maxlength="255"  required>
 <br/><br/>
 </div>
 <!-- Direcion -->
<div class="form-group">
<label for="direcion">Direccion:</label><br>
<input type="text" name="direccion" maxlength="255" required>
<br/><br/>
</div>
<!-- Telefono -->
<div class="form-group">
<label for="telefono">Telefono:</label><br>
<input type="text" onkeypress="return valida(event) "name="telefono" maxlength="15" required>
<br/><br/>
</div>
<!-- Email -->
<div class="form-group">
<label for="correo">Email:</label><br>
<input type="email" name="correo" maxlength="35" required>
<br/><br/>
</div>
<!--Nombre_usuario-->
<div class="form-group">
<label for="nombre">Nombre Usuario:</label><br>
<input type="text" name="nombre_usuario" maxlength="255"  required>
<br/><br/>
</div>
<!--Password-->
<div class="form-group">
<label for="pass">Password:</label><br>
<input type="password" name="password" maxlength="8" required>
</div>
 <br/><br/>
 <input type="submit" name="submit" class="btn btn-primary" value="Registrarme">
 <input type="reset" name="clear" class="btn btn-primary" value="Borrar">
 <button type="button" class="btn" style="background-color:black"> <a href="./login.php" ><font color="white">Login</font></a></button>

<select>
     
</select>     

 </form>
 </div>
 </div>
 <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
 

<hr /><br />

<footer>
 &copy;2018 <a href="http://www.aragon.unam.mx/aragon/index.html">www.aragon.unam.mx</a>
</footer>

 </body>
</html>

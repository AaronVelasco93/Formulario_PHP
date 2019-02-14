<?php
    session_start();
    if($_SESSION['u_usuario'] = ''){

    }else {
        //header('location: ./dashboard.php');
       // echo'continua a el menu de administracion';
    }
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="120x120" href="./img/logos/unam.png">
    <!--Materialize files-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
    
   
    <title>Index</title>
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
<p align="center" style="color:red;">El usuario o la contraseña son incorrectos</p>

  <form action="validar_login.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Usuario</label>
    <input type="text"  placeholder="Nombre del Usuario" name="nombre_usuario" require class="form-control" id="exampleInputEmail1" >
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" placeholder="Contraseña" name="password" require class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
   <button type="submit" class="btn btn-primary" style="background-color:black;color:white">Iniciar Sesion</button>
   <button type="button" class="btn" style="background-color:black"> <a href="./form_registro.php" ><font color="white">Registrar</font></a></button>
  </form>
<!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
 
</body>
</html>
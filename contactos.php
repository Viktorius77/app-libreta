<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Libreta | Contactos</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- purecss -->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

        <!-- Estilo personificado -->
        <link href="css/style.css" rel="stylesheet">

        <!-- font awesone(iconos) -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        
         <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Javascript para los efectos de bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modal.js"></script>
    </head>
    <body>

        <nav class="container-fluid navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">HOME</a><p class="navbar-text">Estas en la pagina principal</p> 
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">

                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="¿Que buscas?">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp; Buscar</button>
                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                        <li><a href="descargas.html"><span class="fa fa-download"></span>&nbsp; Descargas</a></li>
                        <li class="active"><a href="contactos.php"><span class="fa fa-envelope-o"></span>&nbsp; Contacto</a></li>
                        <li><a href="info.html"><span class="fa fa-info"></span>&nbsp; Acerca de</a></li>
                        <li><button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Entrar</button></li>
                    </ul>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Entrar en nuestro servicio</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <form class="pure-form pure-form-stacked">
                                                <fieldset>
                                                    <legend>Inicio de Sesión</legend>

                                                    <label for="email">Email</label>
                                                    <input id="email" type="email" placeholder="Email" required="required">

                                                    <label for="password">Password</label>
                                                    <input id="password" type="password" placeholder="Password" required="required">

                                                    <label for="remember" class="pure-checkbox">
                                                        <input id="remember" type="checkbox"> Recordar
                                                    </label>

                                                    <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="col-xs-6">
                                            <form class="pure-form pure-form-stacked">
                                                <fieldset>
                                                    <legend>Registrarse</legend>


                                                    <label for="nombre-reg">Nombre</label>
                                                    <input id="nombre-reg" type="text" placeholder="Nombre" required>

                                                    <label for="email-reg">Email</label>
                                                    <input id="email-reg" type="email" placeholder="Email" required>

                                                    <label for="email-rep">Repita el Email</label>
                                                    <input id="email-rep" type="email" placeholder="Repita el Email" required>


                                                    <label for="password-reg">Password</label>
                                                    <input id="password-reg" type="password" placeholder="Password" required>


                                                    <label for="password-rep" >Repita la Password</label>
                                                    <input id="password-rep" class="margen-inf-20" type="password" placeholder="Repita la Password" required>
                                                    <br/>
                                                    <button type="submit" class="btn btn-primary">Registrarse</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="text-info">Proximamente podras entrar usando tu cuenta de facebook, twitter u otra red social.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
        </nav>
        <div class="container"> 
            <div class="jumbotron izq">
                <form class="pure-form pure-form-stacked" action="op_contactos.php" method="post">
                    <fieldset>
                        <legend>Añadir Nuevo Contacto</legend>

                        <label for="nombre-reg">Nombre</label>
                        <input id="nombre-reg" type="text" placeholder="Ingrese nombre" required>

                        <label for="nombre-reg">Apellido</label>
                        <input id="nombre-reg" type="text" placeholder="Ingrese apellido" required>

                        <label for="nombre-reg">Teléfono</label>
                        <input id="nombre-reg" type="text" placeholder="Ingrese número teléfono" required>

                        <label for="email-reg">Email</label>
                        <input id="email-reg" type="email" placeholder="Ingrese email" required>

                        <label for="nombre-reg">Dirección</label>
                        <input id="nombre-reg" type="text" placeholder="Ingrese dirección" required>
                        </br>
                        <button type="submit" class="btn btn-primary" name="agregar" value="agregar">Agregar Contacto</button>
                    </fieldset>
                </form>
            </div>
            <div class="jumbotron der">
                <form class="pure-form pure-form-stacked">
                    <fieldset>
                        <legend>Mi Lista De Contactos</legend>
                        <?php
                        include('conexion.php');
                        $link = Conectarse();

                        $sql = " select * from personas";
                        $datos = mysql_query($sql, $link);
                        while ($row = mysql_fetch_array($datos)) { //Bucle para ver todos los registros
                            $nombre = $row['nombre'];
                            $apellido = $row['apellido'];
                            $telefono = $row['telefono'];
                            $email = $row['email'];
                            $direccion = $row['direccion'];
                            echo"<table border=2 width=700px><tr><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Email</td><td>Direccion</td></tr>";
                            echo "<tr><td>$nombre</td><td>$apellido</td><td>$telefono</td><td>$email</td><td>$direccion</td>"; //visualizar datos
                            echo"</tr></table>";
                        }
                        mysql_close($link); //cerrar conexion
                        ?>
                    </fieldset>
                </form>
            </div>
        </div>


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Javascript para los efectos de bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modal.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html>
	<head>
	    <title>Megamenú con carrusel de imágenes</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CDN Jquery-->
	    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	    <!-- CDN Bootstrap-->
	    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
	    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	    <!-- Autor -->
	    <link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mimenu">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<a class="navbar-brand" href="#">Academia</a>
				</div>
				<div class="collapse navbar-collapse" id="mimenu">
				<ul class="nav navbar-nav">
					<li><a href="#">Inicio</a></li>
				    <li><a href="#">Nosotros</a></li>
            <li class="dropdown mega-dropdown">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cursos <span class="caret"></span></a>
            	<ul class="dropdown-menu mega-dropdown-menu row navbar-nav">
            		<li class="col-sm-3">
            			<ul>
            				<li class="dropdown-header">Nuevos cursos</li> 
            				<!--Insertamos aquí nuestro carrusel -->                           
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="item">
                              <a href="#"><img src="http://placehold.it/254x150/563d7c/f5f5f5/&text=Bootstrap" class="img-responsive" alt="curso bootstrap"></a>
                              <h4><small>Aprende Bootstrap 3.</small></h4>                                        
                              <button class="btn btn-primary" type="button">10,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-book"></span> Acceder al curso</button>       
                          </div>
                          <div class="item">
                              <a href="#"><img src="http://placehold.it/254x150/ffd940/f5f5f5/&text=JS+Ajax" class="img-responsive" alt="javascript ajax"></a>
                              <h4><small>Aprende Javascript + Ajax.</small></h4>                                        
                              <button class="btn btn-primary" type="button">29,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-book"></span> Acceder al curso</button>       
                          </div>
                          <div class="item">
                              <a href="#"><img src="http://placehold.it/254x150/8892BF/f5f5f5/&text=PHP" class="img-responsive" alt="product 2"></a>
                              <h4><small>Aprende PHP.</small></h4>                                        
                              <button class="btn btn-primary" type="button">24,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-book"></span> Acceder al curso</button>        
                          </div>
                          <div class="item active">
                              <a href="#"><img src="http://placehold.it/254x150/0769AD/f5f5f5/&text=jQuery" class="img-responsive" alt="product 3"></a>
                              <h4><small>Aprende jQuery.</small></h4>                                        
                              <button class="btn btn-primary" type="button">13,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-book"></span> Acceder al curso</button>      
                          </div>                               
                        </div>
                      </div>
                    <!-- Fin carrusel -->
            			</ul>
            		</li>
            		<li class="col-sm-3">
            			<ul>
            				<li class="dropdown-header">Javascript</li>
            				<li><a href="#">Introducción</a></li>
            				<li><a href="#">Programación básica</a></li>
                    <li><a href="#">Programación avanzada</a></li>
            				<li><a href="#">DOM (Document Object Model)</a></li>
            				<li><a href="#">Eventos</a></li>
                    <li><a href="#">Formularios</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Ajax</li>
                    <li><a href="#">Utilidades</a></li>
                    <li><a href="#">Seguridad</a></li>
                    <li><a href="#">Autocompletar</a></li>
            			</ul>
            		</li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header">Bootstrap 3</li>
                    <li><a href="#">Sistema de rejillas</a></li>
                    <li><a href="#">Tipografía</a></li>
                    <li><a href="#">Elementos CSS</a></li>
                    <li><a href="#">Formularios</a></li>
                    <li><a href="#">Componentes</a></li>
                    <li><a href="#">Plugins de Javascript</a></li>
                    <li><a href="#">Diseño responsivo</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Jquery</li>
                    <li><a href="#">Funciones y métodos básicos</a></li>
                    <li><a href="#">Funciones para eventos</a></li>
                    <li><a href="#">Funciones para efectos visuales</a></li>
                    <li><a href="#">Funciones para Ajax</a></li>
                    <li><a href="#">Funciones para CSS</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header">PHP 5</li>
                    <li><a href="#">Variables</a></li>
                    <li><a href="#">Tipos de dato</a></li>
                    <li><a href="#">Cadenas</a></li>
                    <li><a href="#">Operadores</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Inicia sesión</li>
                    <form class="form" role="form">
                      <div class="form-group">
                        <label class="sr-only" for="user">Usuario o email</label>
                        <input type="text" class="form-control" id="user" placeholder="Usuario o email">
                        <label class="sr-only" for="pass">Contraseña</label>
                        <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                      </div>
                      <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form> 
                  </ul>
                </li>
            	</ul>
            </li>
				    <li><a href="#">Servicios</a></li>
				    <li><a href="#">Contacto</a></li>
				</ul>
				</div>
			</nav>
		</div>
	</body>
</html>
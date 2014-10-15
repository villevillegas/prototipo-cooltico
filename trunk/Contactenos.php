<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>COOLTICO.COM</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="js/library/jquery.min.js"></script>
        <script type="text/javascript" src="js/library/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/library/scripts.js"></script>
        
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <!--script src="/js/inicio.js"></script-->
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/contactenos.css" rel="stylesheet">
        
    </head>
    <body>
        <div style="background-color: black">
        <div class="container"  style="background-color: #ffffff" >
        <div class="row clearfix">
       
                <div class="col-md-12 column">
                    
                    <div class="row clearfix" style="background-color: #ffffff">
                                <div class="col-md-12 column img-responsive" id="header">
                                  
                                   <!-- 
                                    <form id="busqueda">
                                <input type="text" placeholder="Buscar..." required>
                                <input type="button" value="Buscar">
                                    </form>
                                   -->
                                </div>
                        <hr></hr>
                        </div>
                       <div class="row clearfix">
                                <div class="col-md-12 column">
                                        <ul class="nav nav-tabs">
                                                <li>
                                                    <a href="index.php">Inicio</a>
                                                </li>
                                                 <li class="active">
                                                        <a href="#">Contáctenos</a>
                                                </li>
                                                
                                                <form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Buscar</button>
					</form>
                                             
                                                <li class="dropdown pull-right">
                                                         <a href="#" data-toggle="dropdown" class="dropdown-toggle">Sesión<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Iniciar Sesión</a>
								</li>
								<li>
                                                                    <a href="formularioRegistro.php">Registrarse</a>
								</li>
							
							</ul>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
        <div class="row clearfix">
                <div class="col-md-12 column" id="centro">
                
                    <h1>Espacio para sugerencias o preguntas</h1>
                    <h2>Información de contacto</h2><h6 class="required">*Información obligatoria</h6>  
                    
                    <div id="info_contact">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre"  size="50" value="" id="nombre" class="input">
                    <span class="required">*</span>
                    </div>
                    
                    <div id="info_contact">
                    <label for="email">Email:</label>
                    <input type="text" name="email" size="50" value="" id="email" class="input">
                    <span class="required">*</span>
                    (cuenta@dominio.com)
                    </div>
                    
                    <div id="info_contact">
                    <label for="numero">Teléfono:</label>
                    <input type="text" name="telefono"  size="50" value="" id="telefono" class="input">
                    (1234-5678)
                    </div>
                    
                   
                    <div id="info_contact">
                    <label for="comentarios">Comentarios:</label>
                    <textarea name="comentarios" cols="52" rows="8" id="comentarios" class="input"></textarea>
                    <span class="required">*</span>
                    </div>
                    
                    <div >
                        <input type="button" name="enviar"  value="Enviar" id="enviar" class="input">
                    </div>
                  
                </div>
            
        </div>
        <div class="row clearfix">
                <div class="col-md-12 column">
                        
                        
                </div>
        </div>
        <div class="row clearfix" style="background-color: black">
         <hr></hr>      
            <div class="col-md-12 column" style="background-color: black">
                        
                        <div class="row clearfix">
                            
                                <div class="col-md-4 column">
                                    <h4>Compañia</h4>
                                    <h5><a href="AcercaNosotros.php">Acerca de Nosotros</a></h5>
                                    <h5><a href="#">Terminos y Condiciones</a></h5>
                                    <h4>Ayuda</h4>
                                    <h5><a href="#">Preguntas frecuentes</a></h5>
                                   
                                </div>
                            
                                <div class="col-md-4 column">
                                     <h4>Teléfono</h4>
                                        <h5>7257-1374</h5>
                                    
                                     <h4>Email</h4>
                                        <h5>compras@cooltico.com</h5>
                                     
                                </div>
                            
                              
                              
                            <div class="col-md-4 column buttons">
                                    <h4>Redes Sociales</h4>
                                    <div class="buttons">
                                    <a class="facebook" href="https://www.facebook.com/Coolticocom?fref=ts"  target="_blank"><img src="images/facebook.png" /></a>
                                
                                    </div>
                            </div>
                        </div>
                </div>
          <hr></hr>
            
            </div>
        </div>
</div>
            
      
    </body>
</html>

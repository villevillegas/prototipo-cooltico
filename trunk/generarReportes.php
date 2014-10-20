<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>COOLTICO.COM | Reportes de Ventas</title>
        
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
        <link href="css/generarReportes-style.css" rel="stylesheet">
        
    </head>
    <body>
        <div style="background-color: black">
        <div class="container"  style="background-color: #ffffff" >
        <div class="row clearfix">
       
                <div class="col-md-12 column">
                    
                    <div class="row clearfix" style="background-color: #ffffff">
                                <div class="col-md-12 column img-responsive" id="header">
                                  
      
                                </div>
                        <hr></hr>
                        </div>
                    
                        <!--HEADER Y MENU-->
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
            
            
        <!--CONTENIDO-->
        <div class="row clearfix">
                <div class="col-md-12 column" id="centro">
                  <img src="images/reporte.png" alt="image" style="width:80px;height:80px">
                    <h2>Reportes de Ventas</h2>
                    
                <div id="datos">
                    <table>
                        <tr>
                            <td>
                                <div id="info_Reporte">
                                <label for="nombre">Generar Reporte por:</label>
                                <select name="periodo">
                                    <option value="dia">D&iacute;a</option>
                                    <option value="semana">Semana</option>
                                    <option value="mes">Mes</option>
                                    <option value="annio">A&ntilde;o</option>
                                 </select>
                                </div>
                            </td>
                        </tr>
                        
                      <tr>
                            <td>
                                <label for="nombre">Desde:</label>
                                <input type="date">
                                <label for="nombre">Hasta:</label>
                                <input type="date">
                                <input type="button" size="50" value="Generar Reporte" id="email" class="input">
                            </td>
                        </tr>
                    </table>
                </div>   
                    
                </div> 
            
        </div> <!--Fin-->
        
        
        <div class="row clearfix">
                <div class="col-md-12 column">
                        
                        
                </div>
        </div>
            
            
        <!--FOOTER-->    
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



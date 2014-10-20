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
        
        <script type="text/javascript" src="../js/library/jquery.min.js"></script>
	<script type="text/javascript" src="../js/library/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/library/scripts.js"></script>
        
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script src="/js/inicio.js"></script>
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
       
        <link rel="stylesheet" type="text/css" href="../css/contactenos.css" />
        <link rel="stylesheet" type="text/css" href="../css/InsertProduct.css" />
    </head>
    <body>
       
        
        <div class="container">
	<div class="row clearfix">
            
            <div class="row clearfix">
				<div class="col-md-12 column">
					<ul class="nav nav-tabs">
                                            <li>
                                            </div> <button onClick="parent.location='admin.php'" type="submit" class="btn btn-default">Regresar</button>
                                            </li>
                                            </ul>
				</div>
			</div>
		<!--<div class="col-md-12 column">
			<div class="row clearfix" style="background-color: black">
				<div class="col-md-12 column img-responsive" id="header">
                           
                                   
                                </div>
			</div>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<ul class="nav nav-tabs">
						<li>
                                                    <a href="index.php">Inicio</a>
						</li>
						<li>
                                                    <a href="Contactenos.php">Contáctenos</a>
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
		</div>-->
	</div>
   

                <div id="izquierdo">
                    <img src="../images/add.png" alt="image" style="width:70px;height:70px">
                     <strong><u> Insertar Producto </u></strong>
                    <table>
                        <tr >
                            <td><label >Nombre:</label></td>
                            <td><input name="nombre" type="text" maxlength="35" size="25"></td>
                        </tr>
                        <tr>
                            <td><label>Código:</label></td>
                            <td><input name="códigoo" type="text" maxlength="35" size="25"></td>
                        </tr>
                     
                        <tr>
                            <td><label>Cantidad del producto:</label></td>
                            <td><input name="cantProducto" type="text" maxlength="35" size="25"></td>
                                    
                        </tr>
                      
                        <tr>
                            <td><label>Descripción:</label></td>
                           <td> <textarea name="descripción" cols="45" rows="7" id="descripción" ></textarea></td>
                        </tr>
                       
                        
                    </table>
                </div>
            
                <div id="derecho">
                    <table>
                        <tr>
                            <td><label>Precio mayorista <u>SIN</u> IVA:</label></td>
                            <td><input name="mayorista_siniva" type="text" maxlength="35" size="25"></td>
                        </tr>
                        <tr>
                            <td><label>Precio de venta <u>SIN</u> IVA:</label></td>
                            <td><input name="pv_siniva" type="text" maxlength="35" size="25"></td>
                            </td>
                        </tr>
                        <tr>
                             <td><label>Precio de venta <u>CON</u> IVA:</label></td>
                            <td><input name=#pv_coniva" type="text" maxlength="35" size="25"></td>
                           
                        </tr>
                        
                        <tr>
                             <td><label>Precio unitario <u>CON</u> IVA:</label></td>
                            <td><input name="p_unitario" type="text" maxlength="35" size="25"></td>
                           
                        </tr>
                    </table>
                    
                    <div >
                      <td>  <input type="button" name="crearProd"  value="Crear" id="crearProd" class="input"></td>
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
                                    <a class="facebook" href="https://www.facebook.com/Coolticocom?fref=ts"  target="_blank"><img src="../images/facebook.png" /></a>
                                
                                    </div>
                            </div>
                        </div>
                </div>
          <hr></hr>
            
            </div>
        </div>
        
       
    </body>
</html>

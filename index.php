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
        <script src="/js/inicio.js"></script>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
        <link href="css/contactenos.css" rel="stylesheet">
        
    </head>
    <body>
        
        
        <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
		
                        <div class="row clearfix" style="background-color: #ffffff">
                                <div class="col-md-12 column" id="header">
                                </div>
                        <hr></hr>
                        
                        </div>
                    
                        <div class="row clearfix">
                            
                                <div class="col-md-5 column">
                                </div>
                                <div class="col-md-5 column">


                                <script  language="javascript">
                                function myFunction() {
                                    document.getElementById("ventana_flotante1").style.visibility= "visible";

                                }
                                </script>


                                <!--la parte de login-->
                                <div id="ventana_flotante1" class="ventana_flotante">
                                    <label for="correo" >Correo:</label>
                                    <input type="text" name="correoLogin"  size="15" value="" id="correoLogin" class="input"><br><br>
                                    <label for="contraseña">Contraseña:</label>
                                    <input type="password" name="contraseñaLogin"  size="10" value="" id="contraseñaLogin" class="input"><br><br>

                                    <div>
                                        <input onclick="myFunction1()" type="button" name="login"  value="Entrar" id="login" class="input"><br/><br/>
                                        <script  language="javascript">
                                        function myFunction1() {
                                            document.getElementById("ventana_flotante1").style.visibility= "hidden";

                                        }
                                        </script>
                                    </div>
                                    <div>
                                        <input onClick="window.location.href='formularioRegistro.php'" type="button" name="registro"  value="Registrarse" id="registro" class="input"><br/><br/>
                                    </div>
                                     <div >
                                        <input onclick="myFunction1()" type="button" name="login"  value="cancelar" id="cancelar" class="input"><br/><br/>
                                     </div>
                                </div>
                                </div>
                                <div class="col-md-5 column">
                               </div>
                        </div>
                    
                    
                    
                    
			<div class="row clearfix">
				<div class="col-md-12 column">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#">Inicio</a>
						</li>
						<li>
                                                    <a href="Contactenos.php">Contáctenos</a>
						</li>
<!--						<li class="active">
							<a href="#">No se que mas</a>
						</li>-->
                                                 <form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> <button type="submit" class="btn btn-default">Buscar</button>
                                                </form>

                        <div class="ec-stars-wrapper">

                               <a href="#" data-value="1" title="Calificar con 1 estrellas">&#9733;</a>
                               <a href="#" data-value="2" title="Calificar con 2 estrellas">&#9733;</a>
                               <a href="#" data-value="3" title="Calificar con 3 estrellas">&#9733;</a>
                               <a href="#" data-value="4" title="Calificar con 4 estrellas">&#9733;</a>
                               <a href="#" data-value="5" title="Calificar con 5 estrellas">&#9733;</a>
                       </div>

                       <noscript>Necesitas tener habilitado javascript para poder votar</noscript>

						<li class="dropdown pull-right">
							
							<ul class="nav nav-tabs">
                                                            
                                                            
                                                                <li class="iniciar">
									<a onclick="myFunction()">Iniciar sesión/Registrarse</a>   
                                                                 </li>
                                                                        </li>
<!--								<li>
                                                                        <a href="#">Something else here</a>
                                                                </li>-->
<!--								<li class="divider">
                                                                </li>
                                                                <li>
                                                                        <a href="#">Separated link</a>
                                                                </li>-->
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
            
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="carousel slide" id="carousel-727762" style="width: 100%; margin: 0 auto">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-727762">
					</li>
					<li data-slide-to="1" data-target="#carousel-727762" class="active">
					</li>
					<li data-slide-to="2" data-target="#carousel-727762">
					</li>
                                        
				</ol>
				<div class="carousel-inner">
					<div class="item peopleCarouselImg" style="max-height:100%">
                                            <img alt="" src="upload/coolGift.jpg" style="max-width:100%; max-height:100%;">
						<div class="carousel-caption">
							<h4>
								First Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item active peopleCarouselImg" style="max-height:100%">
                                            <img alt="" src="upload/diaMadre.jpg" style="max-width:100%; max-height:100%;">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
                                    	<div class="item peopleCarouselImg" style="max-height:100%">
                                            <img alt="" src="upload/diaPadre.jpg" style="max-width:100%; max-height:100%;">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					
				</div> <a class="left carousel-control" href="#carousel-727762" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-727762" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
	</div><hr></hr>
        
        
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-4 column">
                                    <a href="joyerias.php"><img alt="140x140" src="upload/aretes2.jpg" style="max-height:300px "></a>
                                    <h3>Joyería</h3>
				</div>
				<div class="col-md-4 column">
                                    <a href="productos_electronicos.php"><img alt="140x140" src="upload/baseCelular3.jpg" style="max-height:300px"></a>
                                    <h3>Productos Electrónicos</h3>
                                </div>
				<div class="col-md-4 column">
                                    <a href="para_el_hogar.php"><img alt="140x140" src="upload/tenni2.jpg" style="max-height:300px"></a>
                                     <h3>Deportivo</h3>
                                </div>
			</div><hr></hr>
			<div class="row clearfix">
				<div class="col-md-4 column">
                                    <a href="ropa.php"><img alt="140x140" src="upload/tenni1.jpg" style="max-height:300px"></a>
                                    <h3>Ropa</h3>
                                </div>
				<div class="col-md-4 column">
                                    <a href="anteojos.php"><img alt="140x140" src="upload/anteojos.jpeg" style="max-height:300px"></a>
                                     <h3>Anteojos</h3>
                                </div>
				<div class="col-md-4 column">
                                    <a href="otros.php"><img alt="140x140" src="upload/estucheCelBici.jpg" style="max-height:300px"></a>
                                     <h3>Otros</h3>
                                </div>
			</div>
                         <!--
                        <hr></hr>
                        
			<div class="row clearfix">
				<div class="col-md-4 column">
					<a href="producto.php"><img alt="140x140" src="http://lorempixel.com/140/140/"></a>
				</div>
				<div class="col-md-4 column">
					<a href="producto.php"><img alt="140x140" src="http://lorempixel.com/140/140/"></a>
				</div>
				<div class="col-md-4 column">
					<a href="producto.php"><img alt="140x140" src="http://lorempixel.com/140/140/"></a>
				</div>
			</div>
                        -->
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
                                
				</div>
				<div class="col-md-6 column">
				</div>
				<div class="col-md-4 column">
				</div>
			</div>
		</div>
	</div><hr></hr>
        
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
    </body>
</html>

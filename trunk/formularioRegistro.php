<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Nuevo Usuario|COOLTICO.COM</title>
        
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
        
        <link rel="stylesheet" type="text/css" href="css/formularioRegistro-style.css" />
        <link rel="stylesheet" type="text/css" href="css/contactenos.css" />
    </head>
    <body>
       
        
        <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix" style="background-color: black">
				<div class="col-md-12 column img-responsive" id="header">
                                    
                                    <form id="busqueda">
                                <input type="text" placeholder="Buscar..." required>
                                <input type="button" value="Buscar">
                                    </form>
                                   
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
						<li class="active">
							<a href="#">Registro</a>
						</li>
						<li class="dropdown pull-right">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">Sesión<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Iniciar Sesión</a>
								</li>
								<li>
                                                                    <a href="formularioRegistro.php">Registrarse</a>
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
            
        
            
        <form action="procesar.php" name="Formulario" method="post" onSubmit="return validar();">

            <div id="envoltura">
                <div id="columnaizq">
                    <p>Informaci&oacute;n de perfil</p>
                    <table>
                        <tr>
                            <td><label id="Nombre">Titulo</label></td>
                            <td>
                                <select name="titulo" onChange="cambiaGenero();">
                                    <option value="sr" selected="selected">Sr.</option>
                                    <option value="sra">Sra.</option>
                                    <option value="srta">Srta.</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label id="nombre">Nombre</label></td>
                            <td><input name="nombre" type="text" maxlength="30" size="20"></td>
                        </tr>
                        <tr>
                            <td><label>Apellido(s)</label></td>
                            <td><input name="apellido" type="text" maxlength="30" size="25"></td>
                        </tr>
                      
                        <tr>
                            <td><label>Sexo</label></td>
	
                            <td>
                                <input id="sexo_m" name="sexo" type="radio" value="m" checked="true"><label>Masculino</label>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <input id="sexo_f" name="sexo" type="radio" value="f"><label>Femenino</label>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Fecha de nacimiento</label></td>
                            <td>
                                <select name="dia">
                                    <option value="0" selected="selected">D&iacute;a</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="mes">
                                    <option value="0" selected="selected">Mes</option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label>A&ntilde;o&nbsp;</label></td>
                            <td>
                                <input name="anno" type="text" size="4" maxlength="4">(p. ej., 1978)</td>

                        </tr>
                    </table>
                </div>

                <div id="central">
                    <p>Informaci&oacute;n de la cuenta</p>
                    <table>
                        <tr>
                            <td><label>Correo electr&oacutenico</label></td>
                            <td><input name="sesion" type="text"></td>
                            <td style="background-color:#CCCCCC">(p. ej., cuenta@dominio)</td>
                        </tr>
                        <tr>
                            <td><label>Contrase&ntilde;a</label></td>
                            <td><input name="pass" type="password"></td>
                            <td style="background-color:#CCCCCC">
                                Debe tener <strong>al menos ocho (8) caracteres de longitud</strong>,<br>
                                puede contener n&uacute;meros (0-9) y letras may&uacute;sculas y<br>
                                min&uacute;sculas (A-Z, a-z), pero no puede incluir <strong>ning&uacute;n<br>
                                espacio</strong>. Aseg&uacute;rese de que sea dif&iacute;cil que otros la<br>
                                adivinen.
                            </td>
                        </tr>
                        <tr>
                            <td><label>Confirmaci&oacute;n contrase&ntilde;a</label></td>
                            <td><input name="repass" type="password"></td>
                            <td style="background-color:#CCCCCC">Confirme su Contrase&ntilde;a</td>
                        </tr>
                    </table>
                </div>

<!--                <div id="columnader">
                    <p>Intereses</p>
                    <table>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="per_pag_ama" type="checkbox" value="pag_ama"><label>Joyer&iacute;a</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="per_pag_ama" type="checkbox" value="pag_ama"><label>Calzado</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="per_internet" type="checkbox" value="internet"><label>Tecnolog&iacute;a</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="per_guia" type="checkbox" value="guia_tur"><label>Ropa</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="per_guia" type="checkbox" value="guia_tur"><label>Hogar</label></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="per_cd" type="checkbox" value="cd"><label>Accesorios</label></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td></td>
                            <td><input name="per_tod_nin" type="radio" onClick="seleccionarTodos();"><label>Todos</label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input name="per_tod_nin" type="radio" onClick="seleccionarNinguno();"><label>Ninguno</label></td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td colspan="3" style="text-align:center;height:50px;"><input class="boton" name="registrarse" type="submit" value="Registrarse"></td>
                            <td colspan="2" style="text-align:center;height:50px;"><input class="boton" name="reset" type="reset" value="Limpiar" onClick="limpiar();"></td>
                        </tr>
                    </table>
                </div>-->
            </div>
	

        </form>
            
        </div>
        <div class="row clearfix" style="background-color: black">
         <div class="col-md-12 column" style="background-color: black">
             
         </div>
         </div>
        <div class="row clearfix" style="background-color: black">
	 <hr></hr>	
            <div class="col-md-12 column" style="background-color: black">
			
                        <div class="row clearfix">
                            
                                <div class="col-md-4 column">
                                    <h4>Compañia</h4>
                                        <h5>Acerca de Nosotros</h5>
                                        <h5>Terminos y Condiciones</h5>
				</div>
                            
                                <div class="col-md-4 column">
                                     <h4>Ayuda</h4>
                                        <h5>Preguntas frecuentes</h5>
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
    </body>
</html>

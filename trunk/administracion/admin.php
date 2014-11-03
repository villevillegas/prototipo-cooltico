

<!DOCTYPE html>
<?PHP
require('./adm-php/tablaProducto.php');
?>

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

        <script type="text/javascript" src="adm-js/init.js"></script>
        <script type="text/javascript" src="adm-js/eventos.js"></script>
        <script type="text/javascript" src="adm-js/Tabbed_Panel.js"></script>
        <script type="text/javascript" src="adm-js/divCategorias.js"></script>
        <script type="text/javascript" src="adm-js/divProductos.js"></script>
        <script type="text/javascript" src="adm-js/divReportes.js"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/contactenos.css" />
        <link rel="stylesheet" type="text/css" href="../css/InsertProduct.css" />
    </head>
    <body>

<!--        <div class="modal fade" id="modal-login-admin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="max-width: 1000px">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Agregar Role</h4>
                    </div>
                    <div class="modal-body" style="max-width: 1000px">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>-->


        <div id="contenedor" class="container">
            <div id="head" class="row"></div>
            <div id="contenido" class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div id="tabbed_section" class="col-md-12">
                            <div id="menu">
                                <ul id="ul_tabs" class="nav nav-tabs" role="tablist">
                                    <li class="lh active" role="tab" data-toggle="tab" id="t1" class="encabezado" onClick="change('tab1')">
                                        <a href="#">Productos</a>
                                    </li>
                                    <li class="lh" id="t2" role="tab" data-toggle="tab" class="encabezado" onClick="change('tab2')">
                                        <a href="#">Categorias</a>
                                    </li>
                                    <li class="lh" id="t3" role="tab" data-toggle="tab" class="encabezado" onClick="change('tab3')">
                                        <a href="#">Reportes</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div id="Display_content" class="col-md-12 tab-content" onload="change('h1')">

                            <div id="divProductos" class="pestana row tab-pane">  
                                <div class="col-md-12">
                                    <div class="divScroll"> 
                                        <h1>PRODUCTOS</h1>
                                        <div class="row">

                                            <a href="InsertarProducto.php"><button id="btn-agregar-producto"  class="col-md-2 btn btn-sm btn-info">Agregar Producto <span class="glyphicon glyphicon-plus"></span></button></a>

                                        </div>
                                        <div class="row">
                                            <?php
                                            $url = "adm-js/productos.json";

                                            $contador = 0;
                                            $encabezado = Array("#", "Nombre", "Codigo", "Precio", "Marca", "Cantidad", "Descripción");
                                            $filas = Array();
                                            $json = json_decode(file_get_contents($url), true);
                                            $tbls = $json["productos"];
//$tbls = procedure_call("ROLESSISTEMA");
//tablas($tbls);
                                            foreach ($tbls as $t) {

                                                array_push($filas, ++$contador);
                                                array_push($filas, "<a href='editarProducto.php'><button data-toggle='tooltip' data-placement='left' title='Editar' id = '" . $t["nombre"] . "' name='" . $t["nombre"] . "' class='btn-editar-role btn-xs btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></button></a>   " . $t["nombre"]);
                                                array_push($filas, $t["codigo"]);
                                                array_push($filas, $t["precio"]);
                                                array_push($filas, $t["marca"]);
                                                array_push($filas, $t["cantidad"]);
                                                array_push($filas, $t["descripcion"]);
                                            }

                                            $accion = 'alert("Hola")';
                                            echo TablaProductos($encabezado, $filas, "", "tablaProductos");
                                            ?>

                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div id="divCategorias" class="pestana row tab-pane">
                                <div class="row row-pestana-categorias">
                                    <div class="col-md-12 divScroll">

                                        <h1>CATEGORIAS</h1>
                                        <div class="row">
                                            <a href="InsertarCategoria.php"><button class="col-md-2 btn btn-sm btn-info">Agregar Categoría<span class="glyphicon glyphicon-plus"></span></button></a>

                                        </div>
                                        <div class="row">
                                            <?php
                                            $url = "adm-js/categorias.json";

                                            $contador = 0;
                                            $encabezado = Array("#", "Categoria");
                                            $filas = Array();
                                            $json = json_decode(file_get_contents($url), true);
                                            $tbls = $json["categorias"];

                                            foreach ($tbls as $t) {

                                                array_push($filas, ++$contador);
                                                array_push($filas, "<button data-toggle='tooltip' data-placement='left' title='Editar' id = '" . $t["nombre"] . "' name='" . $t["nombre"] . "' class='btn-editar-role btn-xs btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></button>   " . $t["nombre"]);
                                            }

                                            $accion = 'alert("Hola")';
                                            echo TablaProductos($encabezado, $filas, "", "tablaProductos");
                                            ?>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div id="divReportes" class="pestana row tab-pane">
                                <div class="row row-pestana-reportes">
                                    <div class="col-md-12 divScroll">
                                        <h1>REPORTES</h1>
                                        <div class="row clearfix">
                                            <div class="col-md-12 column" id="centro">
                                                <img src="../images/reporte.png" alt="image" style="width:80px;height:80px">
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

                                    </div>


                                </div>


                            </div>

                        </div> <!--Display_content-->
                    </div>
                </div>

            </div>




            <div id="footer" class="row">
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
            </div>
        </div>
    </body>
</html>



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
        <div id="contenedor" class="container">
            <div id="head" class="row">sss</div>
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
                                            <button class="col-md-2 btn btn-sm btn-info">Agregar Producto <span class="glyphicon glyphicon-plus"></span></button>
                                            
                                        </div>
                                        <div class="row">
                                             <?php
                                             $url ="adm-js/productos.json";
                                             
                                $contador = 0;
                                $encabezado = Array("#", "Nombre", "Codigo", "Precio", "Marca", "Descripción");
                                $filas = Array();
                                $json = json_decode(file_get_contents($url), true);
                                $tbls = $json["productos"];
//$tbls = procedure_call("ROLESSISTEMA");
//tablas($tbls);
                                foreach ($tbls as $t) {

                                    array_push($filas, ++$contador);
                                    array_push($filas, "<button data-toggle='tooltip' data-placement='left' title='Editar' id = '" . $t["nombre"] . "' name='" . $t["nombre"] . "' class='btn-editar-role btn-xs btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></button>   " . $t["nombre"]);
                                    array_push($filas, $t["codigo"]);
                                    array_push($filas, $t["precio"]);
                                    array_push($filas, $t["marca"]);
                                    array_push($filas, $t["descripcion"]);
                                }

                                $accion = 'alert("Hola")';
                                echo TablaProductos($encabezado, $filas, "", "tablaUser");
                                
                                ?>
                                            
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div id="divCategorias" class="pestana row tab-pane">
                                <div class="row row-pestana-categorias">
                                    <div class="col-md-12 divScroll">

                                        <h1>CATEGORIAS</h1>
                                    </div>

                                   
                                </div>
                            </div>
                            <div id="divReportes" class="pestana row tab-pane">
                                <div class="row row-pestana-reportes">
                                    <div class="col-md-12 divScroll">
                                        <h1>REPORTES</h1>
                                        
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

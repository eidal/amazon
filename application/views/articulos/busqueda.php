<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	$this->load->view('inc/cab.php'); 
    $this->load->view('inc/menu2.php'); 
?>
<div class="container">

        <div class="row">

            <div class="col-md-3">
            </br>
                <p class="lead">Categorías Destacadas</p>
                <div class="list-group">
                <?php
                    $ruta=base_url();
                    foreach($categdestacadas as $categoria){
                    echo("<a href=".$ruta."articulos/categoria/".$categoria->idcategoria." class=\"list-group-item\">".$categoria->nombre."</a>");
                    } ?>
                </div>
            </div>
            <div class="col-md-9">
                <h3>Resultado de la búsqueda </h3>
                <div class="row">
                <?php
                    $ruta=base_url();
                    foreach($articulos as $articulo){
                        echo("<div class=\"col-sm-4 col-lg-4 col-md-4\">");
                            echo("<div class=\"thumbnail\">");
                                echo("<img src=\"".$ruta."\imagenes\\".$articulo->imagen."\" alt=\"".$articulo->desart."\">");
                                    echo("<div class=\"caption\">");
                            echo("<h4 class=\"pull-right\">".$articulo->precios."€</h4>");
                            echo("<h4><a href=\"".$ruta."articulos/id/".$articulo->codart."\">".$articulo->desart."</a></h4>");
                                echo("<p>".$articulo->desampliada."</p>");
                            echo("</div>");
                            echo("<div class=\"ratings\">");
                                echo("<p class=\"pull-right\">".$articulo->num_opinion." reviews</p>");
                                echo("<p>");
                                for ($i = 0; $i < $articulo->opinion; $i++) {
                                    echo("<span class=\"glyphicon glyphicon-star\"></span>");
                                }
                                for ($i = 0; $i < (5-$articulo->opinion); $i++) {
                                    echo("<span class=\"glyphicon glyphicon-star-empty\"></span>");
                                }
                                echo("</p>");
                            echo("</div>");
                        echo("</div>");
                    echo("</div>");
            }
            ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
<?php 
	$this->load->view('inc/pie.php'); 
?>


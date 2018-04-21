<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	$this->load->view('inc/cab.php'); 
    $this->load->view('inc/menu2.php'); 
?>
<div class="container-fluid">

        <div class="row">

            <div class="col-md-3">
                </br>
                <p class="lead">Categorías Destacadas</p>
                <div class="list-group">
                <?php
                    $ruta=base_url();
                    foreach($categdestacadas as $categorias){
                    echo("<a href=".$ruta."articulos/categoria/".$categorias->idcategoria." class=\"list-group-item\">".$categorias->nombre."</a>");
                    }
                echo("</div>");
            echo("</div>");


echo("<div class=\"col-md-9\">");

    echo("<div class=\"row\">");
    echo("</br");
    echo("</br");
    echo("</br");


$ruta=base_url();
            echo("<div class=\"col-sm-4 col-lg-4 col-md-4\">");
                echo("<div class=\"thumbnail\">");
                    echo("<img src=\"".$ruta."\imagenes\\".$articulo->imagen."\" alt=\"".$articulo->desart."\">");
                        echo("<div class=\"caption\">");
                            echo("<h4 class=\"pull-right\">".$articulo->precios."€</h4>");
                            echo("<h4>Referencia ".$articulo->codart."</h4>");
                            echo("<h4>".$articulo->desart."</h4>");
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
             
             
             echo("<a href=\"".$ruta."cesta/comprar/".$articulo->codart."\" class=\"btn btn-success\" role=\"button\">Añadir al carrito</a>");
            ?>
    

        </div>

    </div>
    <!-- /.container -->
<?php 
	$this->load->view('inc/pie.php'); 
?>


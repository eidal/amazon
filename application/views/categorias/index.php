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
                    } 
                echo("</div>");
            echo("</div>");
            echo("<div class=\"col-md-9\">");
                echo("</br");
                echo("<font color=\"transparent\">");
                echo("<h1>Todos los departamentos</h1>");
                echo("</font>");
                echo("<div class=\"row\">");

                foreach($categoriasp as $padre){
                    echo("<a href=".$ruta."articulos/categoria/".$padre->idcategoria." class=\"list-group-item list-group-item-action list-group-item-info active\">".$padre->nombre."</a>");
                    foreach($categoriash as $hijo){
                        echo("<a href=".$ruta."articulos/categoria/".$hijo->idcategoria." class=\"list-group-item list-group-item-action\">".$hijo->nombre."</a>");
                    }
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


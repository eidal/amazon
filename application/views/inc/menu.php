<?php
if($this->session->userdata('logueado')){
?>

<!-- Menu logueado -->
 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>home/">Amazonia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= base_url() ?>categorias/"><br>Categorias</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>articulos/ofertas"><br>Ofertas</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>clientes/"><br>Mi Cuenta <?= $this->session->userdata('nombre')?></a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>cesta/"><br>Cesta</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>login/salir"><br>Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<?php
}
else
{
?>
<!-- Menu no logueado -->
 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() ?>home/">Amazonia</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= base_url() ?>categorias/"><br>Categorias</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>articulos/ofertas"><br>Ofertas</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>registrarse/"><br>Registrarse</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>login/"><br>Login</a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>cesta/"><br>Cesta</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php
}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	$this->load->view('inc/cab.php'); 
?>
<div class="container"> 
    <div class="row">
        
            <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Iniciar sesión</div>
                </div> 
                <form action="<?= base_url() ?>login/loguearse/" method="post"> 
                <div class="panel-body" >
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Email" style="margin-bottom: 10px" type="email" required="required"/>
                            </div>     
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Contraseña<span class="asteriskField"></span> </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_password1" name="password" placeholder="Contraseña" style="margin-bottom: 10px" type="password" required="required"/>
                            </div>
                        </div>
                        <div id="div_id_resto" class="form-group required">
                            <a href="pass.html">¿Ha olvidado la contraseña?</a>
                            </div>
                         <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" class="btn btn-default btn active" role="button" value="Iniciar sesión">
                       
                            </div>
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                            
                                <div class="a-divider a-divider-break"><h5>¿Eres nuevo por aquí?<a href="<?= base_url() ?>registrarse/">Regístrate</a> </h5></div>

                            </div>
                        </div>
                </div>
                </form>
                </div>
            </div> 
    </div>
     
     <?php
        if(isset($mensaje)){
    ?>
        <div class="presentation-container">
            <div class="container">
                <div class="row">
                    <h1><span class="violet"><?= $mensaje ?></span></h1>
                </div>
            </div>
        </div>

    <?php
        }
    ?> 
</div>



<?php 
	$this->load->view('inc/pie.php'); 
?>


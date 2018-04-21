<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	$this->load->view('inc/cab.php'); 
?>
<div class="container"> 
    <div class="row">
            <div id="titulo" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <p> Regístrese para poder realizar compras en nuestra Web</p>
            <h6> ¿Dispone ya de cuenta?,<a href="<?= base_url() ?>login/">Inicie sesión</a></h6> 
            </div>
            <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Registro</div>
                </div>  
                <form class="form-horizontal" action="<?= base_url() ?>registrarse/registrar/" method="post"> 
                <div class="panel-body" >
                                        
                        <div id="div_id_name" class="form-group required">
                            <h6>Todos los campos son obligatorios</h6>
                            <label for="id_name" class="control-label col-md-4  requiredField">Nombre<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_name" maxlength="30" name="nombre" placeholder="Indique su nombre" style="margin-bottom: 10px" type="text" required="required"/>
                            </div>
                        </div>
                        <div id="div_id_surname" class="form-group required">
                            <label for="id_surname" class="control-label col-md-4  requiredField">Apellidos<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_surname" maxlength="30" name="apellidos" placeholder="indique sus apellidos" style="margin-bottom: 10px" type="text" required="required"/>
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Introduzca su email" style="margin-bottom: 10px" type="email" required="required"/>
                            </div>     
                        </div>
                        <div id="div_id_password1" class="form-group required">
                            <label for="id_password1" class="control-label col-md-4  requiredField">Contraseña<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="id_password1" name="password" placeholder="Indique una contraseña" style="margin-bottom: 10px" type="password" required="required"/>
                            </div>
                        </div>
                        <div id="div_id_cif" class="form-group required">
                        <div class="form-group">
                            <div class="controls col-md-offset-4 col-md-8 ">
                                <div id="div_id_terms" class="checkbox required">
                                    <label for="id_terms" class=" requiredField">
                                         <input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" required="required" />
                                         He leído y acepto <a href="<?= base_url() ?>registrarse/condiciones">las condiciones de uso.</a>
                                    </label>
                                </div> 
                                    
                            </div>
                        </div> 
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit"  class="btn btn-default btn active" role="button" value="Registrar">
                                
                            </div>
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


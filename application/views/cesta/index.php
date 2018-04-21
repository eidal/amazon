<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	$this->load->view('inc/cab.php');
?>
<div class="container">

            <div class="col-md-9">
                <h3>Información del carrito de compras</h3>
                <?php echo form_open('cesta/update');?>
                <div class="table-responsive">
                    <?php
                    $ruta=base_url();
                    echo("<a href=\"".$ruta."home/index\" class=\"btn btn-info\" role=\"button\"> << Seguir comprando </a>");
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Opción</th>
                            <th>Cant.</th>
                            <th>Descrip. Artículo</th>
                            <th style="text-align:right">Prec. Unitario</th>
                            <th style="text-align:right">Tot. Línea</th>
                        </tr>

                        <?php $i = 1; ?>

                        <?php foreach ($this->cart->contents() as $items): ?>

                        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

                        <tr>
                        <td><?php
                            $ruta=base_url();
                            echo("<a href=\"".$ruta."cesta/eliminar/".$items['rowid']."\" class=\"btn btn-danger\" role=\"button\"> Eliminar </a>");
                        ?></td>
                        <td><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                        <td>
                            <?php echo $items['name']; ?>

                            <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                            <p>
                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                    <?php endforeach; ?>
                                </p>

                             <?php endif; ?>

                        </td>
                        <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                        <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                        </tr>

                        <?php $i++; ?>

                        <?php endforeach; ?>

                        <tr>
                            <td colspan="3"> </td>
                            <td class="right"><strong>Total</strong></td>
                            <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
                        </tr>

                    </table>

                <input type="submit"  class="btn btn-default btn active" role="button" value="Actualice carrito">
                <?php
                echo("<a href=\"".$ruta."cesta/vaciar_carrito\" class=\"btn btn-danger\" role=\"button\"> < Vaciar carrito > </a>");
                echo("<a href=\"".$ruta."cesta/paypal\" class=\"btn btn-success\" role=\"button\"> < Pagar con Paypal > </a>");
                ?>
                <?php form_close(); ?>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
<?php 
	$this->load->view('inc/pie.php'); 
?>


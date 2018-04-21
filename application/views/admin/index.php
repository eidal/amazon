<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<?php 
	$this->load->view('inc/cabm.php'); 
?>

<main>
<div>
		<?php echo $output; ?>
</div>
</main>
<?php 
	$this->load->view('inc/pie.php'); 
?>


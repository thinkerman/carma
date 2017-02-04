<?

require_once('includes/admin-db.php');
$dbClass =  new admin_db_op();
$dbClass->testfunction();
 ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<form action="<?php $_SERVER['PHP_SELF']; ?>"  method="POST" name="carma-form" enctype="multipart/form-data">
	
	<label>Select a <code>.txt</code> file containing RIR delegate file</label>
	<br>
	<br>
	<input type="file" name="fileUploaded" id="file" size="1" value="Select .txt file to upload" accept="text/plain" />
	<br>
	<br>
	<input type="submit" name="calculate" value="Calculate">
	<?php wp_nonce_field( 'submit_form', 'carma_upload' ); ?>
</form>

<?php 

		
	//$cidrClass -> getcidr();
	//$cidrClass -> networkID("2.112.0.0");
	




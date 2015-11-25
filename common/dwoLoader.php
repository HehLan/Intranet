<?php
	// Include autoloader
	require '../lib/Dwoo/Autoloader.php';

	// Register Dwoo namespace and register autoloader
	$autoloader = new Dwoo\Autoloader();
	$autoloader->add('Dwoo', '../lib/Dwoo');
	$autoloader->register(true);

	// Create the controller, it is reusable and can render multiple templates
	$dwoo = new Dwoo\Core();

	// Create some data
	$data = array('a'=>5, 'b'=>6);

	// Output the result directly ... 
	$dwoo->output('path/to/index.tpl', $data);
?>
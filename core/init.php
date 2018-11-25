<?php 


	$require_path = dirname(__dir__)."\\vendor\autoload.php";

	

	if(file_exists($require_path)) {

		require_once $require_path;
	} else {

		echo "autoloading not working!";

		exist();
	}



 ?>
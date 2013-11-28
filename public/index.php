<?php
// Controler

    if ($_SERVER['REQUEST_URI']== '/'){
	echo file_get_contents ("../templates/index.html");
	//Homepage
	} else{
	//Not Homepage
}

?>

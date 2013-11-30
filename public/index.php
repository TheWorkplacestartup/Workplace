<?php
// Controler
session_start();
$_SESSION['loggedin'] = 0;
if ($_SESSION ['loggedin'] == 1) {
    // logged in
    echo "You are logged in ";
} else {
    // Not logged  in 
    echo 'You are Not logged in ' ;
    echo file_get_contents ("../templates/signinform.html");
    
}
    if ($_SERVER['REQUEST_URI']== '/'){
	
	//Homepage
	} else{

	//Not Homepage
}

?>

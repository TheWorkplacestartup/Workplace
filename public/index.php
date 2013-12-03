<?php
// Controler



require_once('../classes/classes_Authentication.php');
require_once('../classes/classes_Session.php');
$Session        = new TSession(); 
$Authentication = new TAuthentication();

$Controlervar['loggedin'] =0;

if ($Authentication->isAuthorized()){

echo "you are logged in";
$Controlervar['loggedin'] =1;


} else{                    
	//Not logged in
	 	if ($_POST['submit'] == 'Submit'){
		// they submitted the log in form
		if ($Authentication->checkUserPass()){

			// They are now logged in
			$Authentication->successfullogin();
			$Controlervar['loggedin'] =1;
			

		} else {

				// The log in failed
				$Authentication->failedLogin();
				$Controlervar['loggedin'] =0;

		}
		

} 

	
	echo "Login status is:".$Controlervar['loggedin'];

	// default state

	if ($Controlervar['loggedin'] == 0){
		echo file_get_contents("../templates/signinform.html");}




	}
	





















?>

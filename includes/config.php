<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','sql8.pcextreme.nl');
define('DBUSER','60051gm');
define('DBPASS','Awdp28gg');
define('DBNAME','60051gm');

//application address
define('DIR','http://castlestreams.limey.nl/');
define('SITEEMAIL','GlobalMaffia');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";port=;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>

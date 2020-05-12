<?php 


global $conn;

function open_db()
{
	//include 'config.php';
	
	$dbhost = "localhost";	//$DB_HOST;
	$dbuser = "root";		//$DB_USER;   //khud24_tarbiyat  //id13211016_rongsok
	$dbpass = "";			//$DB_PASS;   //"huf7Zzi6gr"  //khu@@4ml4p@R4n //pK^]>M2Vp7YFAF#O
	$db = "rongsoknew"; //$DB_NAME;  khu@@4ml4p@R4n //id13211016_rongsoknew
	
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

	return $conn;
}
 
function close_db($conn)
{
	$conn -> close();
}

?>
<?php


//$hash = password_hash($password, PASSWORD_DEFAULT);

//echo "Password : ".$password."</br>";
//echo "Hash : ".$hash."</br>";

$password = 'Yarobbi1';
$hash = '$2y$10$usnHmXdupIK2JY8q4Qku5eoXcdBMrEVdnEvWtc.E2E.Lq1LHj0e.m';
$value = password_verify($password, $hash);

echo $value;

?>
<?php



//$hash = password_hash($password, PASSWORD_DEFAULT);

//echo "Password : ".$password."</br>";
//echo "Hash : ".$hash."</br>";

$password = 'rahasia';
$hash = '$2y$10$KoxijKh4aoJcDIEZc8BdeLMYDXTqQhsvw62F3jlP1dZ/3o650nVm';

$value = password_verify($password, $hash);

echo $value;

?>
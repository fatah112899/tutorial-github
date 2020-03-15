<?php
$A = 123 ;//variable global
function Test() {
	$A = "Test";//variable local
	echo"NIlai A dalam fungsi = $A \n";
}
Test();
echo"NIlai A luar fungsi = $A \n";
?>
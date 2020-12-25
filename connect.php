<?php
$localhost = 'localhost';
$username = 'qgdvklmy_DheerajRaoP';
$password = 'ntoGNTe5@4';
	
	$con = mysqli_connect($localhost,$username,$password, 'qgdvklmy_aptitude');
    
    if(!isset($con)){
        echo 'Aptitude Database Error!';
    }
?>
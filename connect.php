<?php
$dsn = 'mysql:host = localhost;dbname=php_orvo';
$user = 'root';
$pass = '';
$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);


				try {

					$con = new PDO($dsn, $user, $pass,$option);
					$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


				} catch (Exception $e) {

					echo "Faild To Connect".$e->getMessage();

				}
        ?>

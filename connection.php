<?php

	$user = trim($_USER['txtUsername']);
	$password = trim(md5($_USER['pwdPass1']));
	$password2 = trim(md5($_USER['pwdPass2']));
	$age = trim($_USER['tetEmail']);
	$email = trim($_USER['txtEmail']);
	
	//need database info
	$connect = mysql_connect("123", "123", "123");
	$connectdb = mysql_select_db("123", $connect);


		$queryAdd = "INSERT INTO Users(username, password, age, email, )
						VALUES('$user', '$password', '$age', '$email')";
		$resultAdd = mysql_query($queryAdd);
	
		mysql_close($connect);	

		header("location:./sign_up.php");
	
	
?>
?>
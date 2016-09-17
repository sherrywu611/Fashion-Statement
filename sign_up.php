<head>

</head>

<body>
	<div id = "container">
		<div id="header">
			<?php
    			include'../sign_up/header.php';
			?>
			<!--add later-->
		</div>
		
		<div id="main">
			<h1>Sign Up</h1>
			<form onsubmit="return validate();" method="signup" action="connection.php">
				<fieldset class = "signup filed"> 
					<table id="sign_up">
						<tr>
							<td>Username</td>
							<td><input type="text" id="txtUsername" name="txtUsername" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" id="pwdPass1" name="pwdPass1" /></td>
						</tr>
						<tr>
							<td>Re-password</td>
							<td><input type="password" id="pwdPass2" name="pwdPass2" /></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><input type="radio" name="rdoGender" value="male"/>Male</td>    
							<td><input type="radio"name="rdoGender"value="female" /> Female</td>
						</tr>
						<tr>
							<td>Age</td>
							<td><input type="number" max="100" min="0"/></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="txtEmail" /></td>
						</tr>
					</table>
					<br />
					<input type="reset" name="reset" value="Reset" />
					<input type="submit"name="subSign"value="Sign Up" />
				</fieldset>
			</form>
		</div>	
		
		<div id="footer">
		<!--set a footer at the bottom-->
		<?php
			include'../sign_up/footer.php';
		?>
		</div>
	</div>
	
	
</body>
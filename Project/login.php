<?php
    $email="";
	$err_email="";
    $password="";
	$err_password="";
	
	
	$hasError=false;


	if(isset($_POST["submit"])){ 
	
		if(empty($_POST["email"])){  //Email
			$hasError = true;
			$err_email = "Email Required";
		}
		else{
			$email = htmlspecialchars($_POST["email"]);
		}
        if(empty($_POST["password"])){  //password
			$hasError = true;
			$err_password = "Password Required";
		}
		else{
			$password =htmlspecialchars ($_POST["password"]);
		}
        
		if(!$hasError){
			
			echo "<h1>Form submitted</h1>";
            echo $_POST["email"]."<br>";
			echo $_POST["password"]."<br>";
           
			}
		}
	
?>
<html>
	<head></head>
	<title>Login</title>
	<body>
    <img height= "500px" width= "1865px" src="log.jpg">
		<form action="" method="post">
		<fieldset>
		<tr>
		<td><h1>Login</h1></td>
		</td>
			<table>
					<td>Email</td>
					<td>: <input type="text" name="email" placeholder="Email">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
                <td colspan="2" align="right"><input type="submit" name="submit" value="Login"></td>
				<tr>
       
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
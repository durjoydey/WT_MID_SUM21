<?php
	$fname="";
	$err_fname="";
	$lname="";
	$err_lname="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
    $conpassword="";
	$err_conpassword="";
    $email="";
	$err_email="";
	$gender="";
	$err_gender="";
	$birthday="";
	$err_birthday="";
	$birthmonth="";
	$err_birthmonth="";
	$birthyear="";
	$err_birthyear="";
	$preaddress="";
	$err_preaddress="";
	$permaaddress="";
	$err_permaaddress="";
    $number="";
    $err_number="";
	$agree="";
	$err_agree="";
	
	$hasError=false;

	$array1= array("January","February","March","April","May","June","July","August","September","October","November","December");

	if(isset($_POST["submit"])){ 
		if(empty($_POST["fname"])) //First name
        {
			$hasError = true;
			$err_fname="First Name Required";
		}
		
		
		else
        {
			$fname = $_POST["fname"];
		} 
        if(empty($_POST["lname"])) //Last name
        {
			$hasError = true;
			$err_lname="Last Name Required";
		}
		
		
		else
        {
			$lname = $_POST["lname"];
		} 
       
		if(!isset($_POST["gender"])){ //gender
			$hasError = true;
			$err_gender="Gender Required";
		}
       
		else{
			$gender =htmlspecialchars($_POST["gender"]);
        }
		
		if (!isset($_POST["birthday"])){   //birthday
			$hasError = true;
			$err_birthday="This Field is Required";
		}
		else{
			$birthday =htmlspecialchars($_POST["birthday"]);
		}
		if (!isset($_POST["birthmonth"])){   //birthmonth
			$hasError = true;
			$err_birthmonth="This Field is Required";
		}
		else{
			$birthmonth =htmlspecialchars($_POST["birthmonth"]);
		}
		if (!isset($_POST["birthyear"])){   //birthyear
			$hasError = true;
			$err_birthyear="This Field is Required";
		}
		else{
			$birthyear =htmlspecialchars($_POST["birthyear"]);
		}
		if(empty($_POST["preaddress"])){   //Present Address
			$hasError = true;
			$err_preaddress = "Present Address Required";
		}
		else{
			$preaddress =htmlspecialchars ($_POST["preaddress"]);
		}
		if(empty($_POST["permaaddress"])){   //Permanent Address
			$hasError = true;
			$err_permaaddress = "Permanent Address Required";
		}
		else{
			$permaaddress =htmlspecialchars ($_POST["permaaddress"]);
		}
		if(empty($_POST["email"])){  //Email
			$hasError = true;
			$err_email = "Email Required";
		}
		else if(!strpos($_POST["email"],"@") ) //@
		{
			$hasError = true;
			$err_email="Email should contain @";
		}
		else if(!strpos($_POST["email"],".")) //.
		{
			$hasError = true;
			$err_email="Email should contain .";
		}
		else{
			$email = htmlspecialchars($_POST["email"]);
		}
		
        if(empty($_POST["username"])){  //username
			$hasError = true;
			$err_username = "Username Required";
		}
		else if(strlen($_POST["username"]) <= 6){
			$hasError = true;
			$err_username="Username must contain at least 6 character";
		} 
		else{
			$username =htmlspecialchars( $_POST["username"]);
		}
        if(empty($_POST["number"])){  //phone
			$hasError = true;
			$err_number = "Phone Number Required";
		}
		else if(!is_numeric( $_POST["number"])) //Numeric
		{
			$hasError = true;
			$err_number = "Number should be numeric"; 
		}
		else{
			$number = htmlspecialchars($_POST["number"]);
		}
        if(empty($_POST["password"])){  //password
			$hasError = true;
			$err_password = "Password Required";
		}
		/*else if(ctype_upper($_POST["password"]) and (ctype_lower($_POST["password"]))){  //upper and lower password
			$hasError = true;
			$err_password = " Upper and Lower case character Required";
		}*/
		else if(strlen($_POST["password"]) <= 8){ //count pass
			$hasError = true;
			$err_password="Password must contain at least 8 character";
		} 
		else if(!strpos($_POST["password"],"#") and !strpos($_POST["password"],"?"))
		{
			$hasError = true;
			$err_password="Password should contain # or ?";
		}
		else if(!strpos($_POST["password"],"0")and !strpos($_POST["password"],"1") and !strpos($_POST["password"],"2") and !strpos($_POST["password"],"3") and !strpos($_POST["password"],"4")
		and !strpos($_POST["password"],"5")and !strpos($_POST["password"],"6")and !strpos($_POST["password"],"7")and !strpos($_POST["password"],"8")and !strpos($_POST["password"],"9")) 
		{
			$hasError = true;
			$err_password = "Password must contain 1 numeric number";	
		}
		else{
			$password =htmlspecialchars ($_POST["password"]);
		}
        if(empty($_POST["conpassword"])){  //confirm password
			$hasError = true;
			$err_conpassword = "Confirm Password Required";
		}
		else if($_POST["password"] != $_POST["conpassword"]){
            $hasError = true;
			$err_conpassword ="Password Dosen't Match";

        }
		else{
			$conpassword =htmlspecialchars ($_POST["conpassword"]);
		}
		if(empty($_POST["agree"])){  //agree
			$hasError = true;
			$err_agree = "You must fill this!";
		}
		else{
			$agree =$_POST["agree"];
		}
		if(!$hasError){
			
			echo "<h1>Form submitted</h1>";
			echo $_POST["fname"]."<br>";
			echo $_POST["lname"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
            echo $_POST["conpassword"]."<br>";
            echo $_POST["email"]."<br>";
			echo $_POST["number"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["preaddress"]."<br>";
			echo $_POST["permaaddress"]."<br>";
			echo $_POST["birthday"]."<br>";
			echo $_POST["birthmonth"]."<br>";
			echo $_POST["birthyear"]."<br>";
			$arr=$_POST["agree"];
			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
	
	}

	
?>
<html>
	<head></head>
	<title>Create Account</title>
	<body>
	<img height= "500px" width= "1865px" src="create.jpg">
		<form action="" method="post">
		<fieldset>
		<tr>
		<td><h1>Create Account for Govt. Employee</h1></td>
		</td>
			<table>
				<tr>
					<td>First Name</td>
					<td>: <input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name"> </td>
					<td><span> <?php echo $err_fname;?> </span></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td>: <input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name"> </td>
					<td><span> <?php echo $err_lname;?> </span></td>
				</tr>
                <tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>: <input type="password" name="conpassword" value="<?php echo $conpassword; ?>" placeholder="Confirm Your Password">  </td>
					<td><span> <?php echo $err_conpassword;?> </span></td>
				</tr>
                <tr>
					<td>Email</td>
					<td>: <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter Your Email">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
                <tr>
					<td>Phone Number</td>
                   
					<td>: <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Number">  </td>
					<td><span> <?php echo $err_number;?> </span></td>
				</tr>
			
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
                <tr>
					<td>Present Address</td>
					<td>: <textarea name="preaddress" ><?php echo $preaddress; ?></textarea>
					<td><span> <?php echo $err_preaddress;?> </span></td>
					</td>
				</tr>
				<tr>
					<td>Permanent Address</td>
					<td>: <textarea name="permaaddress" ><?php echo $permaaddress; ?></textarea>
					<td><span> <?php echo $err_permaaddress;?> </span></td>
					</td>
				</tr>
				<tr>
					<td>Birth Date</td>
					<td>: <select name="birthday">
						<option disabled selected>Day</option>
						<?php
							for($i=1;$i<=31;$i++) 
							{
								if($i ==$birthday){
									echo "<option selected>$i</option>";
								}
								else{
									echo "<option>$i</option>";
								}
							}
							 ?>
						</select>
						<td><span> <?php echo $err_birthday;?> </span></td>
                    
						<td> <select name="birthmonth">
						<option disabled selected>Month</option>
						<?php
							foreach($array1 as $p){
								if($p == $birthmonth) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}

						?>
						</select>
						<td><span> <?php echo $err_birthmonth;?> </span></td>
						<td><select name="birthyear">
						<option disabled selected>Year</option>
						<?php
							for($i=1960;$i<=1984;$i++)
							{
								if($i ==$birthyear){
									echo "<option selected>$i</option>";
								}
								else{
									echo "<option>$i</option>";
								}
							}  

						?>
						</select>
						<td><span> <?php echo $err_birthyear;?> </span></td>
					</td>
					
				</tr>
				<td> <h3><input type="checkbox" name="agree[]"   value="agree">I agree with all the terms and policies</h3> </td>
					<td><span> <?php echo $err_agree;?> </span></td>
        </tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
				<tr>
       
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
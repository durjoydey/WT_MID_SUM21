<?php
	$name="";
	$err_name="";
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
	$birthdate="";
	$err_birthdate="";
	$hear=[];
	$err_hear="";
	$bio="";
	$err_bio="";
	$addressstreet="";
    $err_addressstreet="";
    $addresscity="";
    $err_addresscity="";
    $addressstate="";
    $err_addressstate="";
    $addresspostal="";
    $err_addresspostal="";
    $number="";
    $err_number="";
	$code="";
    $err_code="";
	
	$hasError=false;
	
	$array= array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","26","27","28","29","30","31");
	$array1= array("January","February","March","April","May","June","July","August","September","October","November","December");
	$array2= array("1990","1991","1992","1993","1994","1995","1996","1997","1998","1999","2000","2001","2002","2003","2004");
	
	function hearExist($hear){
		global $hear;
		foreach($hear as $h){
			if($h == $hear) return true;
		}
		return false;
	}
	

	if(isset($_POST["submit"])){ 
		if(empty($_POST["name"])) //name
        {
			$hasError = true;
			$err_name="Name Required";
		}
		
		
		else
        {
			$name = $_POST["name"];
		} 
        
       
		if(!isset($_POST["gender"])){ //gender
			$hasError = true;
			$err_gender="Gender Required";
		}
       
		else{
			$gender =htmlspecialchars($_POST["gender"]);
		}
		if(!isset($_POST["hear"])){   //Hear about us
			$hasError = true;
			$err_hear="This Field is Required";
		}
		else{
			$hear = $_POST["hear"];
		}
		if (!isset($_POST["birthdate"])){   //birthdate
			$hasError = true;
			$err_birthdate="Birth Date Required";
		}
		else{
			$birthdate =htmlspecialchars($_POST["birthdate"]);
		}
		if(empty($_POST["bio"])){   //Bio
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio =htmlspecialchars ($_POST["bio"]);
		}
		if(empty($_POST["email"])){  //Email
			$hasError = true;
			$err_email = "Email Required";
		}
		else if(!strpos($_POST["email"],"@") and !strpos($_POST["email"],".")) 
		{
			$hasError = true;
			$err_email="Email should contain @ and .";
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
		else if(is_numeric($number)) //Numeric
		{
			$hasError = true;
			$err_number = "Number should be numeric"; 
		}
		else{
			$number = htmlspecialchars($_POST["number"]);
		}
		if(empty($_POST["code"])){
			$hasError = true;
			$err_code ="Phone Code Required";
		}		
        else if(!is_numeric($_POST["code"])){
			$hasError = true;
			$err_code ="Phone Code should be numeric";

		}
		else{
			$code = htmlspecialchars($_POST["code"]);
		}
		if(empty($_POST["addresscity"])){  //address
			$hasError = true;
			$err_addresscity ="City Address Required";
		}
		else{
			$addressaddresscity = htmlspecialchars($_POST["addresscity"]);
		}

         if(empty($_POST["addressstate"])){  //address
			$hasError = true;
			$err_addressstate ="State Address Required";
		}
		else{
			$addressstate = htmlspecialchars($_POST["addressstate"]);
		}
        if(empty($_POST["addresspostal"])){  //address
			$hasError = true;
			$err_addresspostal ="Postal/Zip Address Required";
		}
		else{
			$addresspostal = htmlspecialchars($_POST["addresspostal"]);
		}
        
        if(empty($_POST["password"])){  //password
			$hasError = true;
			$err_password = "Password Required";
		}
		else if(ctype_upper($_POST["password"]) and (ctype_lower($_POST["password"]))){  //upper and lower password
			$hasError = true;
			$err_password = " Upper and Lower case character Required";
		}
		/*else if(ctype_lower($_POST["password"])){  //lower password
			$hasError = true;
			$err_password = " Lower case character Required";
		}*/
		else if(strlen($_POST["password"]) <= 8){ //count pass
			$hasError = true;
			$err_password="Password must contain at least 8 character";
		} 
		else if(strpos($_POST["password"],"#") or strpos($_POST["password"],"?"))
		{
			$hasError = true;
			$err_password="Password should contain # or ?";
		}
		else if(is_numeric($_POST["password"]) <= 1)
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
		
		else{
			$conpassword =htmlspecialchars ($_POST["conpassword"]);
		}
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
            echo $_POST["conpassword"]."<br>";
            echo $_POST["email"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["birthdate"]."<br>";
			echo $_POST["bio"]."<br>";
            echo $_POST["number"]."<br>";
			echo $_POST["code"]."<br>";
			$arr = $_POST["hear"];

			foreach($arr as $e){
				echo "$e<br>";
			}
		}
		
	
	}
	
?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
                <tr>
					<td>Username</td>
					<td>: <input type="text" name="username" placeholder="Username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>: <input type="password" name="conpassword" placeholder="Confirm Your Password">  </td>
					<td><span> <?php echo $err_conpassword;?> </span></td>
				</tr>
                <tr>
					<td>Email</td>
					<td>: <input type="text" name="email" placeholder="Enter Your Username">  </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
                <tr>
					<td>Phone</td>
                    <td>: <input type="text" name="code" placeholder="Code">  </td>
					<td>- <input type="text" name="number" placeholder="Number">  </td>
					<td><span> <?php echo $err_number;?> </span></td>
				</tr>
				<tr>
					<td> Address</td>
					<td> :<input type="text" name="addressstreet" placeholder="Street Address">   <br> 
                     <input type="text" name="addresscity" placeholder="City"> - <input type="text" name="addressstate" placeholder="State"> <br>  
                    <input type="text" name="addresspostal" placeholder="Postal/Zip Code">  </td>
                    <td><span> <?php echo $err_addressstreet;?> <br> <?php echo $err_addresscity;?>
                                <?php echo $err_addressstate;?> <br> <?php echo $err_addresspostal;?> </span></td>
					
				</tr>
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>Birth Date</td>
					<td>: <select name="birthdate">
						<option disabled selected>Day</option>
						<?php
							foreach($array as $p){
								if($p == $birthdate) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            

						?>
						</select>
						<td> <select name="birthmonth">
						<option disabled selected>Month</option>
						<?php
							foreach($array1 as $p){
								if($p == $birthdate) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            

						?>
						</select>
						<td><select name="birthyear">
						<option disabled selected>Year</option>
						<?php
							foreach($array2 as $p){
								if($p == $birthdate) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            

						?>
						</select>
					</td>
					<td><span> <?php echo $err_birthdate;?> </span></td>
				</tr>
				<tr>
					<td>Where did you hear about us?:</td>
                    <td><input type="checkbox" name="hear[]" <?php if(hearExist("Friend")) echo "checked";?> value="A Firend or Colleague"> A Firend or Colleague<br>
					<input type="checkbox" name="hear[]" <?php if(hearExist("Google")) echo "checked";?> value="Google"> Google<br>
					<input type="checkbox" name="hear[]" <?php if(hearExist("Blog")) echo "checked";?> value="Blog Post"> Blog Post<br>
					<input type="checkbox" name="hear[]" <?php if(hearExist("Article")) echo "checked";?> value="News Article"> News Article
					</td>
					<td><span> <?php echo $err_hear;?> </span></td>
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
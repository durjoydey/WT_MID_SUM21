<?php
	$patname="";
	$err_patname="";
	$patusername="";
	$err_patusername="";
	$patpass="";
	$err_patpass="";
	$vacday="";
	$err_vacday="";
    $vacdate="";
	$err_vacdate="";
    $vacmonth="";
	$err_vacmonth="";
    $vactime="";
	$err_vactime="";
    $vaccentre="";
	$err_vaccentre="";
    $number="";
    $err_number="";
    $code="";
    $err_code="";
	$country="";
    $err_country="";
	
	$hasError=false;
	
	$array= array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    //$array1= array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
    $array2= array("January","February","March","April","May","June","July","August","September","October","November","December");
    $array3= array("10:00am-12:00pm","12:00pm-2:00pm","2:00pm-4:00pm","4:00pm-6:00pm");
    $array4= array("Dhaka Medical College Hospital","Kurmitola General Hospital","Mugda General Hospital","Shahid Suhrawardy Medical College","Salimullah Medical College Hospital");
    $array5= array("Afghanistan ","Algeria","Bhutan","Bahrain","Bnagladesh","Combodia","Denmark","Egypt","Finland","Germany","Haiti","Iraq","Jordan","Kenya","Libiya");

	if(isset($_POST["submit"])){ 
		if(empty($_POST["patname"])) //name
        {
			$hasError = true;
			$err_patname="Patient's Name Required";
		}
		else
        {
			$patname = $_POST["patname"];
		} 
		
		if(empty($_POST["patpass"])){  //pat Passport
			$hasError = true;
			$err_patpass = "Patient's Passport No. Required";
		}
		else if(!is_numeric($_POST["patpass"])) //Numeric
		{
			$hasError = true;
			$err_patpass = "Passport Number should be numeric"; 
		}
		else{
			$patpass = htmlspecialchars($_POST["patpass"]);
		}
		if (!isset($_POST["vacday"])){   //vaccine day
			$hasError = true;
			$err_vacday="Please Select One!";
		}
		else{
			$vacday =htmlspecialchars($_POST["vacday"]);
		}
        if (!isset($_POST["vacdate"])){   //vaccine date
			$hasError = true;
			$err_vacdate="Please Select One!";
		}
		else{
			$vacdate =htmlspecialchars($_POST["vacdate"]);
		}
        if (!isset($_POST["vacmonth"])){   //vaccine month
			$hasError = true;
			$err_vacmonth="Please Select One!";
		}
		else{
			$vacmonth =htmlspecialchars($_POST["vacmonth"]);
		}
        if (!isset($_POST["vactime"])){   //vactime
			$hasError = true;
			$err_vactime="Please Select One!";
		}
		else{
			$vactime =htmlspecialchars($_POST["vactime"]);
		}
        
    
    if (!isset($_POST["vaccentre"])){   //vaccentre
        $hasError = true;
        $err_vaccentre="Please Select One!";
    }
    else{
        $vaccentre =htmlspecialchars($_POST["vaccentre"]);
    }
		
        if(empty($_POST["patusername"])){  //username
			$hasError = true;
			$err_patusername = "Patient's Username Required";
		}
		else if(strlen($_POST["patusername"]) <= 6){
			$hasError = true;
			$err_patusername="Username must contain at least 6 character";
		} 
		else{
			$patusername =htmlspecialchars( $_POST["patusername"]);
		}
        if(empty($_POST["number"])){  //phone
			$hasError = true;
			$err_number = "Phone Number Required";
		}
		else if(!is_numeric($_POST["number"])) //Numeric
		{
			$hasError = true;
			$err_number = "Number should be numeric"; 
		}
		else{
			$number = htmlspecialchars($_POST["number"]);
		}
        if(empty($_POST["code"])){  //phone
			$hasError = true;
			$err_code = "Code Number Required";
		}
		else if(!is_numeric($_POST["code"])) //Numeric
		{
			$hasError = true;
			$err_code = "Code Number should be numeric"; 
		}
		else{
			$code = htmlspecialchars($_POST["code"]);
		}
        if (!isset($_POST["country"])){   //Country
            $hasError = true;
            $err_country="Country Must be Choosen";
        }
        else{
            $country =htmlspecialchars($_POST["country"]);
        }
            
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["patname"]."<br>";
            echo $_POST["patusername"]."<br>";
            echo $_POST["code"]."<br>";
            echo $_POST["number"]."<br>";
            echo $_POST["country"]."<br>";
			echo $_POST["patpass"]."<br>";
            echo $_POST["vacday"]."<br>";
            echo $_POST["vacdate"]."<br>";
            echo $_POST["vacmonth"]."<br>";
            echo $_POST["vactime"]."<br>";
            echo $_POST["vaccentre"]."<br>";
            
           
		}
    
    }
	
?>
<html>
	<head></head>
    <title>Foreigner Schedule</title>
	<body>
		<ul>
    <li><a href="doctor'sSchedule.php">Doctor's Time Schedule</a><br></li>
    <li><a href="public'sSchedule.php">Public's Time Schedule</a><br></li>
   <li> <a href="update.php">Update Your Information</a><br></li>
   <li> <a href="contact.php">Contact Approval</a></li>
</ul>
	<img height= "500px" width= "1865px" src="vaccine.jpg">
		<form action="" method="post">
		<fieldset>
        <tr>
            <td><h1>Foreigner Schedule</h1></td>
            </tr>
			<table>
				<tr>
					<td>Patient's Name</td>
					<td>: <input type="text" name="patname" value="<?php echo $patname; ?>" placeholder="Patient's Name"> </td>
					<td><span> <?php echo $err_patname;?> </span></td>
				</tr>
                <tr>
					<td>Patient's Username</td>
					<td>: <input type="text" name="patusername" value="<?php echo $patusername; ?>" placeholder="Patient's Username">  </td>
					<td><span> <?php echo $err_patusername;?> </span></td>
				</tr>
				
                <tr>
					<td>Phone Number</td>
                    <td>: <input type="text" name="code" value="<?php echo $code; ?>" placeholder="Code">  
                    <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Number"></td>
                    <td><span> <?php echo $err_code;?> </span></td>
					<td><span> <?php echo $err_number;?> </span></td>
				</tr>
                <tr>
					<td>Country</td>
					<td>: <select name="country">
						<option disabled selected>Country</option>
						<?php
							foreach($array5 as $p){
								if($p == $country) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span> <?php echo $err_country;?> </span></td>
				<tr>
					<td>Patient's Passport No.</td>
                   
					<td>: <input type="text" name="patpass" value="<?php echo $patpass; ?>" placeholder="Patient's Passport No.">  </td>
					<td><span> <?php echo $err_patpass;?> </span></td>
				</tr>
			
				
				<tr>
					<td>Select Vaccination Day</td>
					<td>: <select name="vacday">
						<option disabled selected>Day</option>
						<?php
							foreach($array as $p){
								if($p == $vacday) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span> <?php echo $err_vacday;?> </span></td>
                        <tr>
					<td>Select Vaccination Date</td>
					<td>: <select name="vacdate">
						<option disabled selected>Date</option>
						<?php
							for($i=1;$i<=31;$i++)
							{
								if($i ==$vacdate){
									echo "<option selected>$i</option>";
								}
								else{
									echo "<option>$i</option>";
								}
							}
                            ?>
						</select>
                        <td><span> <?php echo $err_vacdate;?> </span></td>
                        </select>
						<td><select name="vacmonth">
						<option disabled selected>Month</option>
						<?php
							foreach($array2 as $p){
								if($p == $vacmonth) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}  

						?>
						</select>
                        <td><span> <?php echo $err_vacmonth;?> </span></td>
                        <tr>
					<td>Select Vaccination Time</td>
					<td>: <select name="vactime">
						<option disabled selected>Time</option>
						<?php
							foreach($array3 as $p){
								if($p == $vactime) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span> <?php echo $err_vactime;?> </span></td>
                        <tr>
					<td>Select Vaccination Centre</td>
					<td>: <select name="vaccentre">
						<option disabled selected>Centre</option>
						<?php
							foreach($array4 as $p){
								if($p == $vaccentre) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span> <?php echo $err_vaccentre;?> </span></td>
                    
					
						
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
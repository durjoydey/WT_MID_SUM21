<?php
	$docname="";
	$err_docname="";
	$docusername="";
	$err_docusername="";
	$docid="";
	$err_docid="";
	$dutyday="";
	$err_dutyday="";
    $dutydate="";
	$err_dutydate="";
    $dutymonth="";
	$err_dutymonth="";
    $dutytime="";
	$err_dutytime="";
    $dutycentre="";
	$err_dutycentre="";
    $number="";
    $err_number="";
	
	
	$hasError=false;
	
	$array= array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    //$array1= array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
    $array2= array("January","February","March","April","May","June","July","August","September","October","November","December");
    $array3= array("10:00am-12:00pm","12:00pm-2:00pm","2:00pm-4:00pm","4:00pm-6:00pm");
    $array4= array("Dhaka Medical College Hospital","Kurmitola General Hospital","Mugda General Hospital","Shahid Suhrawardy Medical College","Salimullah Medical College Hospital");

	if(isset($_POST["submit"])){ 
		if(empty($_POST["docname"])) //name
        {
			$hasError = true;
			$err_docname="Doctor's Name Required";
		}
		else
        {
			$docname = $_POST["docname"];
		} 
		if(empty($_POST["docid"])){  //phone
			$hasError = true;
			$err_docid = "Doctor's ID Required";
		}
		else if(!is_numeric($_POST["docid"])) //Doctor's id
		{
			$hasError = true;
			$err_docid = "ID should be numeric"; 
		}
		else{
			$docid = htmlspecialchars($_POST["docid"]);
		}
		
		if (!isset($_POST["dutyday"])){   //duty day
			$hasError = true;
			$err_dutyday="Please Select One!";
		}
		else{
			$dutyday =htmlspecialchars($_POST["dutyday"]);
		}
        if (!isset($_POST["dutydate"])){   //duty date
			$hasError = true;
			$err_dutydate="Please Select One!";
		}
		else{
			$dutydate =htmlspecialchars($_POST["dutydate"]);
		}
        if (!isset($_POST["dutymonth"])){   //duty month
			$hasError = true;
			$err_dutymonth="Please Select One!";
		}
		else{
			$dutymonth =htmlspecialchars($_POST["dutymonth"]);
		}
        if (!isset($_POST["dutytime"])){   //dutytime
			$hasError = true;
			$err_dutytime="Please Select One!";
		}
		else{
			$dutytime =htmlspecialchars($_POST["dutytime"]);
		}
        
    
    if (!isset($_POST["dutycentre"])){   //dutycentre
        $hasError = true;
        $err_dutycentre="Please Select One!";
    }
    else{
        $vaccentre =htmlspecialchars($_POST["dutycentre"]);
    }
		
        if(empty($_POST["docusername"])){  //username
			$hasError = true;
			$err_docusername = "Doctor's Username Required";
		}
		else if(strlen($_POST["docusername"]) <= 6){
			$hasError = true;
			$err_Docusername="Username must contain at least 6 character";
		} 
		else{
			$docusername =htmlspecialchars( $_POST["docusername"]);
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
        
		
		if(!$hasError){
			
			echo "<h1>Form submitted</h1>";
			echo $_POST["docname"]."<br>";
			echo $_POST["docusername"]."<br>";
			echo $_POST["docid"]."<br>";
            echo $_POST["number"]."<br>";
            echo $_POST["dutyday"]."<br>";
            echo $_POST["dutydate"]."<br>";
            echo $_POST["dutymonth"]."<br>";
            echo $_POST["dutytime"]."<br>";
            echo $_POST["dutycentre"]."<br>";
            
           
		}
    
    }
	
?>
<html>
	<head></head>
    <title>Doctor's Schedule</title>
	<body>
	<ul>
    <li><a href="public'sSchedule.php">Public's Time Schedule</a><br></li>
    <li><a href="foreignReg.php">Foreigner Time Schedule</a><br></li>
   <li> <a href="update.php">Update Your Information</a><br></li>
   <li> <a href="contact.php">Contact Approval</a></li>
</ul>
	<img height= "500px" width= "1865px" src="doc.jpg">
		<form action="" method="post">
		<fieldset>
        <tr>
            <td><h1>Doctor's Schedule</h1></td>
            </tr>
			<table>
				<tr>
					<td>Doctor's Name</td>
					<td>: <input type="text" name="docname" value="<?php echo $docname; ?>" placeholder="Doctor's name"> </td>
					<td><span> <?php echo $err_docname;?> </span></td>
				</tr>
                <tr>
					<td>Doctor's Username</td>
					<td>: <input type="text" name="docusername" value="<?php echo $docusername; ?>" placeholder="Doctor's Username">  </td>
					<td><span> <?php echo $err_docusername;?> </span></td>
				</tr>
				<tr>
					<td>Doctor's ID</td>
                   
					<td>: <input type="text" name="docid" value="<?php echo $docid; ?>" placeholder="Doctor's ID">  </td>
					<td><span> <?php echo $err_docid;?> </span></td>
				</tr>
				
                <tr>
					<td>Phone Number</td>
                   
					<td>: <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Number">  </td>
					<td><span> <?php echo $err_number;?> </span></td>
				</tr>
			
				
				<tr>
					<td>Select Duty Day</td>
					<td>: <select name="dutyday">
						<option disabled selected>Day</option>
						<?php
							foreach($array as $p){
								if($p == $dutyday) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span> <?php echo $err_dutyday;?> </span></td>
                        <tr>
					<td>Select Duty Date</td>
					<td>: <select name="dutydate">
						<option disabled selected>Date</option>
						<?php
						for($i=1;$i<=31;$i++)
						{
							if($i ==$dutydate){
								echo "<option selected>$i</option>";
							}
							else{
								echo "<option>$i</option>";
							}
						}
						?>
						</select>
						<td><span> <?php echo $err_dutydate;?> </span></td>
                        </select>
						<td><select name="dutymonth">
						<option disabled selected>Month</option>
						<?php
							foreach($array2 as $p){
								if($p == $dutymonth) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            

						?>
						</select>
                        <td><span> <?php echo $err_dutymonth;?> </span></td>
                        <tr>
					<td>Select Duty Time</td>
					<td>: <select name="dutytime">
						<option disabled selected>Time</option>
						<?php
							foreach($array3 as $p){
								if($p == $dutytime) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span> <?php echo $err_dutytime;?> </span></td>
                        <tr>
					<td>Select Duty Centre</td>
					<td>: <select name="dutycentre">
						<option disabled selected>Centre</option>
						<?php
							foreach($array4 as $p){
								if($p == $dutycentre) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
                        
                            ?>
						</select>
                        <td><span> <?php echo $err_dutycentre;?> </span></td>
                    
					
						
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
			
			
			
		</fieldset>
		</form>
	</body>
</html>
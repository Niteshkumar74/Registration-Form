<?php
include("Connection.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scaler=1">
	<title>PHP CRUD Opration</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" type="text/css" href="Connection.php">
</head>
<body>

	<div class="container">
		<form action="pdf.php" method="POST">
		<div class="title">
			Registration Form			
		</div>

			<div class="form">

			<div class="input_field"  >
				<label>First Name</label>
				<input type="text" class="input" name="fname" required>	
			</div>
		
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class="input" name="lname" required>	
			</div>
		 


		<div class="input_field">
			<label>Password</label>
			<input type="text" class="input" name="password" required>	
    	</div>


			<div class="input_field">
				<label>Confirm Password</label>
				<input type="text" class="input" name="conpassword" required>	
			</div>



			<div class="input_field">
				<label>Gender</label>
				
			<div class="custom_select">
				<select name="gender" required>
					<option value="">Select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
			</div>	
			</div>


			<div class="input_field">
				<label>Email Address</label>
				<input type="text" class="input" name="email" required>	
			</div>
		

			<div class="input_field">
				<label>Phone Number</label>
				<input type="Number" class="input" name="phone" required>	
			</div>
		</div>

		<div class="form">
			<div class="input_field">
				<label>Full Address</label>
				<textarea class="textarea" name="address"></textarea>	
			</div>




			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark"></span>
		    	</label>
		    	<p>Agree to tearms and conditions</p>	
			</div>

			<div class="input_field">
				<input type="submit" value="Register" class="btn" name="register" required>
			</div>


		</div>
		</form>
	</div>

</body>
</html>

<?php
	
	if ($_POST['register'])
	{
		$fname    = $_POST['fname'];
		$lname    = $_POST['lname'];
		$pwd      = $_POST['password'];
		$cpwd     = $_POST['conpassword'];
		$gender   = $_POST['gender'];
		$email    = $_POST['email'];
		$phone    = $_POST['phone'];
		$address  = $_POST['address'];



  		  $query = "INSERT INTO FORM VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
     
  		  $data = mysqli_query($conn,$query);
  
  		  if ($data)
  		  {
  		  	echo "<script>alert('Form Submited')</script>";
  		  }
  		  else
  		   { 
  		   	 echo "Form not Submited";
  		   } 
  	     }
?>
<?php
$target = "";
if(isset($_GET['id'])){
	$id = trim($_GET['id']) - 0;

	include 'db_connection.php';
	$conn = OpenCon();

	$employee = [];
	$sql = "SELECT * FROM personal_infotbl WHERE emp_id_no=$id";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			$employee["emp_number"] = $row['emp_number'];
			$employee["first_name"] = $row['first_name'];
			$employee["middle_name"] = $row['middle_name'];
			$employee["last_name"] = $row['last_name'];
			$employee["birth_date"] = $row['birth_date'];
			$employee["gender"] = $row['gender'];
			$employee["nationality"] = $row['nationality'];
			$employee["civil_status"] = $row['civil_status'];
			$employee["department"] = $row['department'];
			$employee["designation"] = $row['designation'];
			$employee["dep_status"] = $row['dep_status'];
			$employee["emp_status"] = $row['emp_status'];
			$employee["paydate"] = $row['paydate'];
			$employee["contact_number"] = $row['contact_number'];
			$employee["email"] = $row['email'];
			$employee["social_media"] = $row['social_media'];
			$employee["socmed_acct"] = $row['socmed_acct'];
			$employee["address1"] = $row['address1'];
			$employee["address2"] = $row['address2'];
			$employee["city_municipality"] = $row['city_municipality'];
			$employee["state_province"] = $row['state_province'];
			$employee["country"] = $row['country'];
			$employee["zipcode"] = $row['zipcode'];
			$employee["picpath"] = $row['picpath'];

		}
	}
	$conn->close();
}

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		// Update button
		if(isset($_POST["update_btn"])){
			$emp_number= $_POST['emp_number'];
			$first_name = $_POST['first_name'];
			$middle_name = $_POST['middle_name'];
			$last_name = $_POST['last_name'];
			$birth_date =$_POST['birth_date'];
			$gender = $_POST['gender'];
			$nationality =$_POST['nationality'];
			$civil_status = $_POST['civil_status'];
			$department = $_POST['department'];
			$designation = $_POST['designation'];
			$dep_status = $_POST['dep_status'];
			$emp_status = $_POST['emp_status'];
			$paydate = $_POST['paydate'];
			$contact_number = $_POST['contact_number'];
			$email = $_POST['email'];
			$social_media = $_POST['social_media'];
			$socmed_acct = $_POST['socmed_acct'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address2'];
			$city_municipality = $_POST['city_municipality'];
			$state_province = $_POST['state_province'];
			$country = $_POST['country'];
			$zipcode = $_POST['zipcode'];
			$picpath = $_POST['picpath'];

			include 'db_connection.php';
			$conn = OpenCon();

			$sql = "UPDATE personal_infotbl SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', birth_date = '$birth_date', gender = '$gender', nationality = '$nationality', civil_status = '$civil_status', department = '$department', designation = '$designation', dep_status = '$dep_status', emp_status = '$emp_status', paydate = '$paydate', contact_number = '$contact_number', email = '$email', social_media = '$social_media', socmed_acct = '$socmed_acct', address1 = '$address1', address2 = '$address2', city_municipality = '$city_municipality', state_province = '$state_province', country = '$country', zipcode = '$zipcode', picpath = '$picpath' WHERE emp_number = '$emp_number'";

			if($conn->query($sql)===TRUE){
				echo '<script> alert("Data Successfully Updated") </script>';
				echo '<script> window.location.href="Employee_Listview.php"</script>';
				
			}else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			// close database connection
			$conn->closed();

		}else if(isset($_POST["delete_btn"])) {

			$emp_id_no = $_POST['emp_number'];
			include 'db_connection.php';
			$conn=OpenCon();

			$sql = "DELETE FROM personal_infotbl WHERE emp_number = '$emp_id_no'";
			if($conn->query($sql)===TRUE){
				echo '<script> alert("Data Successfully Deleted!") </script>';
				echo '<script> window.location.href="Employee_Listview.php"</script>';
			}else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}else if(isset($_POST["cancel_btn"])) 
		echo '<script> alert("You are currently cancelling the transaction!") </script>';
		echo '<script> window.location.href="Employee_Listview.php"</script>';
			
		}
	


?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	 <!-- jQuery library -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <!-- Popper JS -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 <!-- Latest compiled JavaScript -->
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script src="script1.js"></script>
	<script src="script2.js"></script>

</head>

<style>
	.button2 button{
	display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    font-size: 18px;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    display: block;
    font-size: 14px;
    line-height: 1.428571429;
    border-radius: 4px;
    position: relative;
    float: right;
    margin-top: -20px;
    margin-right: 20px;
    width: 200px;
    color: #fff;
    background-color: #112d32;
    border-color: #112d32;

	}
	.button2 button:hover{
	color: #fff;
    background-color: #176978;
    border-color: #176978;
	}
</style>
<body>

	<div class="container" style="margin-top:30px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default" style="background-color: #f2f2f3;">
  <div class="panel-heading"><h3 class="panel-title" style="margin: 20px;"><strong><center>Update Employee Information</center></strong></h3>
      
  </div>
  
  <div class="panel-body">
   <form role="form" method="post" class="a-form" id="employee_registration_save" action="Employee_update.php"enctype="multipart/form-data">


<!------------------------------------------------------------------------------------------------Avatar--------------------------------------------------------------------------------------->





  	      <div style="text-align:center">
  	      	<center>
             
			 <div class="a-form-group mt-3" style="width:20%;" >
			 <div id="image_place" name="image_place" style='width:170px; height:150px; overflow:hidden; margin-
			 top:7px; margin-left:5px; background:none; border:thin solid #d3d3d3'>
			 	<img src="<?php echo $employee['picpath']; ?>" class="image_upload" style="width: 100%; object-fit: cover;">
			 </div>
			 <input type="file" style="margin-top:20px; text:center;"
			 id="upload_file" name="upload_file" value=""/> 
			 </div>
			
			</center>
          </div>


<!--------------------------------------------------------------------------------------------Personal Info--------------------------------------------------------------------------------------->

   	<h4> <b>Personal Info:</b></h4><br>
 



            <div class="row">
    			<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
						<label>First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="<?php echo $employee['first_name'];?>" required>
					</div>
				</div>
                <div class="col-xs-12 col-sm-4 col-md-4">
    				<div class="form-group">
    					<label>Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name" value="<?php echo $employee['middle_name'];?>" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="last_name" id="last_name" class="form-control " placeholder="Last Name" value="<?php echo $employee['last_name'];?>" required>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Date of Birth</label>
						<input type="date" name="birth_date" id="bday" class="form-control " placeholder="Date of Birth" value="<?php echo $employee['birth_date'];?>" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Gender</label>
						<select type="text" name="gender" id="gender" class="form-control " placeholder="Select Gender" required>
							<option value='' <?php echo ($employee["gender"] === '')?"selected" : ''; ?> >-- select one --</option>
       					    <option value="M" <?php echo ($employee["gender"] === "M")?"selected" : ""; ?> >Male</option>
					        <option value="F"<?php echo ($employee["gender"] === "F")?"selected" : ""; ?> >Female</option>
					        <option value="O"<?php echo ($employee["gender"] === "O")?"selected" : ""; ?> >Others</option>


						</select>								
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Nationality</label>
						<select type="text" name="nationality" id="nationality" class="form-control " placeholder=""  required>
							<option value=''<?php echo ($employee["nationality"] === '')?"selected" : ''; ?> >-- select one --</option>
       					    <option value="Filipino"<?php echo ($employee["nationality"] === "Filipino")?"selected" : ""; ?> >Filipino</option>
					        <option value="Foreign"<?php echo ($employee["nationality"] === "Foreign")?"selected" : ""; ?> >Foreign</option>
					        <option value="Others"<?php echo ($employee["nationality"] === "Others")?"selected" : ""; ?> >Others</option>
						</select>	
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Civil Status</label>
						<select type="text" name="civil_status" id="civil_status" class="form-control " placeholder=""  required>
							<option value=''<?php echo ($employee["civil_status"] === '')?"selected" : ''; ?> >-- select one --</option>
       					    <option value="S"<?php echo ($employee["civil_status"] === "S")?"selected" : ""; ?> >Single</option>
					        <option value="M"<?php echo ($employee["civil_status"] === "M")?"selected" : ""; ?> >Married</option>
					        <option value="O"<?php echo ($employee["civil_status"] === "O")?"selected" : ""; ?> >Others</option>
						</select>	
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Department</label>
						<input type="text" name="department" id="department" class="form-control " placeholder=""  value="<?php echo $employee['department'];?>" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Designation</label>
						<input type="text" name="designation" id="designation" class="form-control " placeholder=""  value="<?php echo $employee['designation'];?>" required>								
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Qualified Dep. Status</label>
						<select type="text" name="dep_status" id="dep_status" class="form-control " placeholder=""  required>
							<option value=''<?php echo ($employee["dep_status"] === '')?"selected" : ''; ?> >-- select one --</option>
       					    <option value="Z"<?php echo ($employee["dep_status"] === "Z")?"selected" : ""; ?> >Z or Single</option>
					        <option value="S or ME"<?php echo ($employee["dep_status"] === "S or ME")?"selected" : ""; ?> >S or ME</option>
					        <option value="S1 or ME1"<?php echo ($employee["dep_status"] === "S1 or ME1")?"selected" : ""; ?> >S1 or ME1</option>
					        <option value="S2 or ME2"<?php echo ($employee["dep_status"] === "S2 or ME2")?"selected" : ""; ?> >S2 or ME2</option>
					        <option value="S3 or ME3"<?php echo ($employee["dep_status"] === "S3 or ME3")?"selected" : ""; ?> >S3 or ME3</option>
					        <option value="S4 or ME4"<?php echo ($employee["dep_status"] === "S4 or ME4")?"selected" : ""; ?> >S4 or ME4</option>
						</select>	
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Employee Status</label>
						<input type="text" name="emp_status" id="emp_status" class="form-control " placeholder=""  value="<?php echo $employee['emp_status'];?>" required>	
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Paydate</label>
						<input type="date" name="paydate" id="paydate" class="form-control " placeholder="Date of Birth" value="<?php echo $employee['paydate'];?>" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Employee Number</label>
						<input type="Number" name="emp_number" id="emp_number" class="form-control " placeholder=""  value="<?php echo $employee['emp_number'];?>" readonly>								
					</div>
				</div>
			</div>


			<br>
			<br>



<!--------------------------------------------------------------------------------------------Contact Info--------------------------------------------------------------------------------------->
		<h4><b> Contact Info:</b></h4><br>



			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Contact No.</label>
						<input type="text" name="contact_number" id="contact_number" class="form-control " placeholder=""  value="<?php echo $employee['contact_number'];?>" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" class="form-control " placeholder=""  value="<?php echo $employee['email'];?>" required>								
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Other (Social Media)</label>
						<select type="text" name="social_media" id="social_media" class="form-control " placeholder=""  required>
							<option value=''<?php echo ($employee["social_media"] === '')?"selected" : ''; ?> >-- select one --</option>
       					    <option value="Facebook"<?php echo ($employee["social_media"] === "Facebook")?"selected" : ""; ?> >Facebook</option>
					        <option value="Twitter"<?php echo ($employee["social_media"] === "Twitter")?"selected" : ""; ?> >Twitter</option>
					        <option value="Instagram"<?php echo ($employee["social_media"] === "Instagram")?"selected" : ""; ?> >Instagram</option>
					        <option value="Others"<?php echo ($employee["social_media"] === "Others")?"selected" : ""; ?> >Others</option>
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Social Media Account ID/No.</label>
						<input type="text" name="socmed_acct" id="socmed_acct" class="form-control " placeholder=""  value="<?php echo $employee['socmed_acct'];?>" required>								
					</div>
				</div>
			</div>


			<br>
			<br>

<!--------------------------------------------------------------------------------------------Address--------------------------------------------------------------------------------------->

		<h4> <b>Address:</b></h4><br>


			<div class="form-group">
				<label>Address Line 1</label>
				<input type="text" name="address1" id="address1" class="form-control " placeholder=" "  value="<?php echo $employee['address1'];?>" required>
			</div>
			<div class="form-group">
				<label>Address Line 2</label>
				<input type="text" name="address2" id="address2" class="form-control " placeholder=" "  value="<?php echo $employee['address2'];?>" required>
			</div>


			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>City/municipality</label>
						<input type="text" name="city_municipality" id="city_municipality" class="form-control " placeholder="" value="<?php echo $employee['city_municipality'];?>" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>State/Province</label>
						<input type="text" name="state_province" id="state_province" class="form-control " placeholder=""  value="<?php echo $employee['state_province'];?>" required>								
					</div>
				</div>
			</div>



			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Country</label>
						<select type="text" name="country" id="country" class="form-control " placeholder="" required>
							<option value=''<?php echo ($employee["country"] === '')?"selected" : ''; ?> >-- select one --</option>
       					    <option value="Philippines"<?php echo ($employee["country"] === "Philippines")?"selected" : ""; ?> >Philippines</option>
					        <option value="Singapore"<?php echo ($employee["country"] === "Singapore")?"selected" : ""; ?> >Singapore</option>
					        <option value="Malaysia"<?php echo ($employee["country"] === "Malaysia")?"selected" : ""; ?> >Malaysia</option>
					        <option value="Others"<?php echo ($employee["country"] === "Others")?"selected" : ""; ?> >Others</option>
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Zip Code</label>
						<input type="Number" name="zipcode" id="zipcode" class="form-control " placeholder=""  value="<?php echo $employee['zipcode'];?>" required>								
					</div>
				</div>
			</div>

			<br>
			<br>


 <!------------------------------------------------------------------------------------------Picture Path--------------------------------------------------------------------------------------->
        <h4> <b>Picture Path:</b></h4><br>                       
                                    
        <div class="form-group">
				<label>Picture Path:</label>

				<input type="text" name="picpath" id="picpath" class="form-control " placeholder=" "  value="<?php echo $employee['picpath']; ?>" readonly>
			</div>






  <!-------------------------------------------------------------------------------------------Buttons-------------------------------------------------------------------------------------->



                                    
                                    
                                    
  <button type="submit" name="update_btn" class="btn btn-success">Update</button>
  <button type="submit" name="delete_btn" class="btn btn-success">Delete</button>
  <button type="submit" name="cancel_btn" class="btn btn-success">Cancel</button>
  
  
  <hr style="margin-top:10px;margin-bottom:10px;" >
  
  <div class="form-group">
                                    
                                        <div style="font-size:85%">
                                            New Employee? Create your account here! 
                                        <a href="employee_registration.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                           	Create Here
                                        </a>
                                        </div>
                                    <div class="button2">
	<button   onclick="document.location='index.php'" >Log Out</button>
	</div>
                                </div> 
</form>
  </div>
</div>
</div>
</div>


</body>
</html>

<!-- JavaScript Codes to upload picture and display it inside the specified image -->
<script>
	const upload_file = document.getElementById("upload_file");
	const image_place = document.getElementById("image_place");
	const image_upload = image_place.querySelector(".image_upload")
	upload_file.addEventListener("change", function(){
		const file = this.files[0];
		if (file){
			const reader = new FileReader();
			image_upload.style.display = "block"

			reader.addEventListener("load", function(){
				image_upload.setAttribute("src", this.result);
				document.getElementById("picpath").value = "images/" + upload_file.files.item(0).name;
			});
			reader.readAsDataURL(file);
		}
		else{
			image_upload.style.display = null;
			image_upload.setAttribute("src", "");
		}
	});
</script>

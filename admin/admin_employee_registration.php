<?php
$target = "";
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(isset($_POST["savebtn"])){
    $emp_number = $_POST["emp_number"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $birth_date =$_POST["birth_date"];
    $gender = $_POST["gender"];
    $nationality =$_POST["nationality"];
    $civil_status = $_POST["civil_status"];
    $department = $_POST["department"];
    $designation = $_POST["designation"];
    $dep_status = $_POST["dep_status"];
    $emp_status = $_POST["emp_status"];
    $paydate = $_POST["paydate"];
    $contact_number = $_POST["contact_number"];
    $email = $_POST["email"];
    $social_media = $_POST["social_media"];
    $socmed_acct = $_POST["socmed_acct"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $city_municipality = $_POST["city_municipality"];
    $state_province = $_POST["state_province"];
    $country = $_POST["country"];
    $zipcode = $_POST["zipcode"];
    $picpath = $_POST["picpath"];

    

    include 'db_connection.php';
    $conn = OpenCon();

    if(isset($_FILES['upload_file']['name'])){
        // Get image name
        $image = $_FILES['upload_file']['name'];
       
        // image file directory
        $target = "images/".basename($image);

        //$sql = "INSERT INTO personal_infotbl (pic_filename) VALUES ('$image')";
        //mysqli_query($conn, $sql);


      if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
      }else{
          $msg = "Failed to upload image";
      }
}

    $sql = "INSERT INTO personal_infotbl (emp_number, first_name, middle_name, last_name, birth_date, gender, nationality, civil_status, department, designation, dep_status, emp_status, paydate, contact_number, email, socmed_acct, social_media, address1, address2, city_municipality, state_province, country, zipcode, picpath,pic_filename)
     VALUES ('$emp_number', '$first_name', '$middle_name', '$last_name', '$birth_date', '$gender', '$nationality', '$civil_status', '$department', '$designation', '$dep_status', '$emp_status', '$paydate', '$contact_number', '$email', '$socmed_acct', '$social_media', '$address1', '$address2', '$city_municipality', '$state_province', '$country', '$zipcode', '$picpath','$image')";
    if ($conn -> query($sql) === TRUE) {
        $sql1 = "INSERT INTO user_accttble1(employee_id) VALUES ('$emp_number')";
        if($conn ->query($sql1) !==TRUE){
            alert("Error: " . $sql . "<br>" . $conn->error);
        }
        alert("New record created successfully");
        echo '<script> window.location.href="admin_employee.php"</script>';
    }
    else {
        $message = "Please Enter a new Employee Number!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo '<script> window.location.href=admin_employee_registration.php"</script>';
    }
    $conn->close();
    }
    
}
function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="script1.js"></script>
    <script src="script2.js"></script>
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-seedling"></span> <span>PLANTHUB</span></h2>
        </div>
        <!--Secciones-del-Home-->
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../admin.php" ><span class="las la-home"></span>
                    <span>Home</span></a>
                </li>
                <li>
                    <a href="admin_employee.php" class="active"><span class="las la-handshake"></span>
                    <span>Employee</span></a>
                </li>
                <li>
                    <a href="admin_payroll.php"><span class="las la-coins"></span>
                    <span>Payroll</span></a>
                </li>
                <li>
                    <a href="admin_saleA.php"><span class="las la-receipt"></span>
                    <span>Point of Sale A</span></a>
                </li>
                <li>
                    <a href="admin_saleB.php"><span class="las la-cash-register"></span>
                    <span>Point of Sale B</span></a>
                </li>
                <li>
                    <a href="admin_user.php"><span class="las la-user"></span>
                    <span>User Account</span></a>
                </li>
                <li>
                    <a href="logout.php"><span class="las la-backspace"></span>
                    <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> Employee Registration
            </h2>

            
            <div class="user-wrapper">
                <img src="img/Avatar3.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Employee Name</h4>
                    <small>Employee No:</small>
                </div>
            </div>
        </header>

        <main>
            <div class="home">
                
    <div class="container" style="margin-top:30px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default" style="background-color: #f2f2f3;">
  <div class="panel-heading"><h3 class="panel-title" style="margin: 20px;"><strong><center>New Employee Form</center></strong></h3>
      
  </div>
  
  <div class="panel-body">
   <form role="form" method="post" action="admin_employee_registration.php" class="a-form" enctype="multipart/form-data">


<!------------------------------------------------------------------------------------------------Avatar--------------------------------------------------------------------------------------->





          <div style="text-align:center">
            <center>
             
             <div class="a-form-group mt-3" style="width:20%;" >
             <div id="image_place" name="image_place" style='width:170px; height:150px; overflow:hidden; margin-
             top:7px; margin-left:5px; background:none; border:thin solid #d3d3d3'>
                <img src="" class="image_upload" style="width: 100%; object-fit: cover;">
             </div>
             <input type="file" style="margin-top:20px; text:center;"
             id="upload_file" name="upload_file" value="" required/> 
             </div>
            
            </center>
          </div>
     


<!--------------------------------------------------------------------------------------------Personal Info--------------------------------------------------------------------------------------->

    <h4 style="color: #333333"> <b>Personal Info:</b></h4><br>
 



            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name" tabindex="1" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control " placeholder="Last Name" tabindex="2" required>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="birth_date" id="bday" class="form-control " placeholder="Date of Birth" tabindex="" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Gender</label>
                        <select type="text" name="gender" id="gender" class="form-control " placeholder="Select Gender" tabindex="" required>
                            <option value=''>-- select one --</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                            <option value="O">Other</option>
                        </select>                               
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Nationality</label>
                        <select type="text" name="nationality" id="nationality" class="form-control " placeholder="" tabindex="" required>
                            <option value=''>-- select one --</option>
                            <option value="Filipino">Filipino</option>
                            <option value="Foreign">Foreign</option>
                            <option value="Others">Others</option>
                        </select>   
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Civil Status</label>
                        <select type="text" name="civil_status" id="civil_status" class="form-control " placeholder="" tabindex="" required>
                            <option value=''>-- select one --</option>
                            <option value="S">Single</option>
                            <option value="M">Married</option>
                            <option value="O">Others</option>
                        </select>   
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="department" id="department" class="form-control " placeholder="" tabindex="3" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" id="designation" class="form-control " placeholder="" tabindex="4" required>                              
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Qualified Dep. Status</label>
                        <select type="text" name="dep_status" id="dep_status" class="form-control " placeholder="" tabindex="" required>
                            <option value=''>-- select one --</option>
                            <option value="Z">Z or Single</option>
                            <option value="S or ME">S or ME</option>
                            <option value="S1 or ME1">S1 or ME1</option>
                            <option value="S2 or ME2">S2 or ME2</option>
                            <option value="S3 or ME3">S3 or ME3</option>
                            <option value="S4 or ME4">S4 or ME4</option>
                        </select>   
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Employee Status</label>
                        <input type="text" name="emp_status" id="emp_status" class="form-control " placeholder="" tabindex="5" required>    
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Paydate</label>
                        <input type="date" name="paydate" id="paydate" class="form-control " placeholder="Date of Birth" tabindex="" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Employee Number</label>
                        <input type="Number" name="emp_number" id="emp_number" class="form-control " placeholder="" tabindex="6" required>                              
                    </div>
                </div>
            </div>


            <br>
            <br>



<!--------------------------------------------------------------------------------------------Contact Info--------------------------------------------------------------------------------------->
        <h4 style="color: #333333"><b> Contact Info:</b></h4><br>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Contact No.</label>
                        <input type="text" name="contact_number" id="contact_number" class="form-control " placeholder="" tabindex="7" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control " placeholder="" tabindex="8" required>                             
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Other (Social Media)</label>
                        <select type="text" name="social_media" id="social_media" class="form-control " placeholder="" tabindex="" required>
                            <option value=''>-- select one --</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Twitter">Twitter</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Social Media Account ID/No.</label>
                        <input type="text" name="socmed_acct" id="socmed_acct" class="form-control " placeholder="" tabindex="9" required>                              
                    </div>
                </div>
            </div>


            <br>
            <br>

<!--------------------------------------------------------------------------------------------Address--------------------------------------------------------------------------------------->

        <h4 style="color: #333333"> <b>Address:</b></h4><br>


            <div class="form-group">
                <label>Address Line 1</label>
                <input type="text" name="address1" id="address1" class="form-control " placeholder=" " tabindex="10" required>
            </div>
            <div class="form-group">
                <label>Address Line 2</label>
                <input type="text" name="address2" id="address2" class="form-control " placeholder=" " tabindex="11" required>
            </div>


            
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>City/municipality</label>
                        <input type="text" name="city_municipality" id="city_municipality" class="form-control " placeholder="" tabindex="12" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>State/Province</label>
                        <input type="text" name="state_province" id="state_province" class="form-control " placeholder="" tabindex="13" required>                               
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Country</label>
                        <select type="text" name="country" id="country" class="form-control " placeholder="" tabindex="" required>
                            <option value=''>-- select one --</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="Number" name="zipcode" id="zipcode" class="form-control " placeholder="" tabindex="13" required>                               
                    </div>
                </div>
            </div>

            <br>
            <br>


 <!------------------------------------------------------------------------------------------Picture Path--------------------------------------------------------------------------------------->
        <h4 style="color: #333333"> <b>Picture Path:</b></h4><br>                       
                                    
        <div class="form-group">
                <label>Picture Path:</label>
                <input type="text" name="picpath" id="picpath" class="form-control " placeholder=" " tabindex="14" readonly>
            </div>






  <!-------------------------------------------------------------------------------------------Buttons-------------------------------------------------------------------------------------->



  <button type="submit" class="btn btn-success"  name="savebtn" >Save</button>
  <button  class="btn btn-success" onclick="document.location='admin_employee.php'" >Cancel</button>
  </form>
  
  <hr style="margin-top:10px;margin-bottom:10px;" >
  <div class="form-group">
                                    
                                        <div style="font-size:85%">
                                            Wan't to go back? Click here! 
                                        <a href="admin_employee.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Employee Listview
                                        </a>
                                        </div>
                                    
                                </div> 


  </div>
</div>
</div>
</div>

            </div>
        </main>

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
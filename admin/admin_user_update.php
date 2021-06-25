<?php
    if(isset($_GET['id'])){
    $id = trim($_GET['id']) - 0;

    include 'db_connection.php';
    $conn = OpenCon();
    $employee = [];

    $sql = "SELECT personal_infotbl.emp_number, personal_infotbl.first_name, personal_infotbl.middle_name, personal_infotbl.last_name, personal_infotbl.designation, personal_infotbl.department, personal_infotbl.picpath, user_accttble1.username, user_accttble1.user_type, user_accttble1.user_status, user_accttble1.password, user_accttble1.confirm_password FROM personal_infotbl INNER JOIN user_accttble1 WHERE emp_number = $id AND employee_id = $id";

    $result = $conn ->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $employee["emp_number"] = $row['emp_number'];
            $employee["first_name"] = $row['first_name'];
            $employee["middle_name"] = $row['middle_name'];
            $employee["last_name"] = $row['last_name'];
            $employee["designation"] = $row['designation'];
            $employee["department"] = $row['department'];
            $employee["picpath"] = $row['picpath'];
            $employee["username"] = $row['username'];
            $employee["user_type"] = $row['user_type'];
            $employee["user_status"] = $row['user_status'];
            $employee["password"] = $row['password'];
            $employee["confirm_password"] = $row['confirm_password'];

        }
    }
    $conn->close();
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
        // save button
        if(isset($_POST["save_btn"])){
            $emp_number = $_POST["emp_number"];
            $first_name = $_POST["first_name"];
            $middle_name = $_POST["middle_name"];
            $last_name = $_POST["last_name"];
            $department = $_POST["department"];
            $designation = $_POST["designation"];
            $username = $_POST["username"];
            $user_type = $_POST["user_type"];
            $user_status = $_POST["user_status"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];
            
            include 'db_connection.php';
            $conn = OpenCon();

            $sql = "UPDATE user_accttble1 SET username = '$username', user_type = '$user_type', user_status = '$user_status', password = '$password', confirm_password = '$confirm_password' WHERE employee_id = '$emp_number'";

            if($conn->query($sql)===TRUE){
                echo '<script> alert("Data Saved Successfully") </script>';
                echo '<script> window.location.href="admin_user.php"</script>';
                
            }else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // close database connection
            $conn->closed();

        }else if(isset($_POST["update_btn"])){
            $emp_number = $_POST["emp_number"];
            $first_name = $_POST["first_name"];
            $middle_name = $_POST["middle_name"];
            $last_name = $_POST["last_name"];
            $department = $_POST["department"];
            $designation = $_POST["designation"];
            $username = $_POST["username"];
            $user_type = $_POST["user_type"];
            $user_status = $_POST["user_status"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];
        

            include 'db_connection.php';
            $conn = OpenCon();

            $sql = "UPDATE user_accttble1 SET username = '$username', user_type = '$user_type', user_status = '$user_status', password = '$password', confirm_password = '$confirm_password' WHERE employee_id = '$emp_number'";

            if($conn->query($sql)===TRUE){
                echo '<script> alert("Data Successfully Updated") </script>';
                echo '<script> window.location.href="admin_user.php"</script>';
                
            }else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // close database connection
            $conn->closed();

        }else if(isset($_POST["delete_btn"])) {

            $emp_number = $_POST['emp_number'];
            include 'db_connection.php';
            $conn=OpenCon();

            $sql = "DELETE FROM user_accttble1 WHERE employee_id = '$emp_number'";
            if($conn->query($sql)===TRUE){
                echo '<script> alert("Data Successfully Deleted!") </script>';
                echo '<script> window.location.href="admin_user.php"</script>';
            }else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else if(isset($_POST["cancel_btn"])) 
        echo '<script> alert("You are currently cancelling the transaction!") </script>';
        echo '<script> window.location.href="admin_user.php"</script>';
            
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
                    <a href="admin_employee.php"><span class="las la-handshake"></span>
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
                    <a href="" class="active"><span class="las la-user"></span>
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
                </label> Create New User Account
            </h2>

            <div class="user-wrapper">
                <img src="img/Avatar3.png" width="40px" height="40px" alt="">
                <div>
                    <h4><?php echo $employee['username'];?></h4>
                    <small><?php echo $employee['emp_number'];?></small>
                </div>
            </div>

        </header>

        <main>
            

    <div style="margin-top:30px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default" style="background-color: #f2f2f3;">
  <div class="panel-heading"><h3 class="panel-title" style="margin: 20px;"><strong><center>Update User Information</center></strong></h3>
      
  </div>
  
  <div class="panel-body">
   <form role="form" onSubmit="return validate();"  method="post" class="a-form" id="employee_registration_save" action="admin_user_update.php"enctype="multipart/form-data">


<!------------------------------------------------------------------------------------------------Avatar--------------------------------------------------------------------------------------->





          <div style="text-align:center">
            <center>

             
             <div class="a-form-group mt-3" style="width:20%;" >
             <div id="image_place" name="image_place" style='width:250px; height:225px; overflow:hidden; margin-
             top:7px; background:none; border:thin solid #d3d3d3'>
                <img src="<?php echo $employee['picpath']; ?>" class="image_upload" style="width: 100%; object-fit: cover;">

             </div>
             </div>
            <div class="row">
                <div style="width: 300px;">
                    <div class="form-group">
                        <label>Employee Number</label>
                        <input type="text" name="emp_number" id="emp_number" class="form-control" placeholder="First Name" value="<?php echo $employee['emp_number'];?>" readonly>
                    </div>
                </div>
            </center>
          </div>


<!--------------------------------------------------------------------------------------------Personal Info--------------------------------------------------------------------------------------->

    <h4 style="color: #333333"> <b>User Info:</b></h4><br>
 



            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="<?php echo $employee['first_name'];?>" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name" value="<?php echo $employee['middle_name'];?>" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control " placeholder="Last Name" value="<?php echo $employee['last_name'];?>" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="department" id="department" class="form-control " placeholder=""  value="<?php echo $employee['department'];?>" readonly>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" id="designation" class="form-control " placeholder=""  value="<?php echo $employee['designation'];?>" readonly>                               
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="" value="<?php echo $employee['username'];?>" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>User Type</label>
                        <select type="text" name="user_type" id="user_type" class="form-control " placeholder="Select Gender" required>
                            <option value='' <?php echo ($employee["user_type"] === '')?"selected" : ''; ?> >-- select one --</option>
                            <option value="cashier1" <?php echo ($employee["user_type"] === "cashier1")?"selected" : ''; ?> >Cashier 1</option>
                            <option value="cashier2" <?php echo ($employee["user_type"] === "cashier2")?"selected" : ""; ?> >Cashier 2</option>
                            <option value="accounting_staff"<?php echo ($employee["user_type"] === "accounting_staff")?"selected" : ""; ?> >Accounting Staff</option>
                            <option value="administrator"<?php echo ($employee["user_type"] === "administrator")?"selected" : ""; ?> >Administrator</option>


                        </select>   
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label>User Status</label>
                        <input type="text" name="user_status" id="user_status" class="form-control " placeholder="" value="<?php echo $employee['user_status'];?>" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control " placeholder=""  value="<?php echo $employee['password'];?>" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control " placeholder=""  value="<?php echo $employee['confirm_password'];?>" required>                                
                    </div>
                </div>
            </div>



 <!------------------------------------------------------------------------------------------Picture Path--------------------------------------------------------------------------------------->
        <h4 style="color: #333333"> <b>Picture Path:</b></h4><br>                       
                                    
        <div class="form-group">
                <label>Picture Path:</label>

                <input type="text" name="picpath" id="picpath" class="form-control " placeholder=" "  value="<?php echo $employee['picpath']; ?>" readonly>
            </div>






  <!-------------------------------------------------------------------------------------------Buttons-------------------------------------------------------------------------------------->



                                    
                                    
  <button type="submit" name="save_btn" class="btn btn-success">Save</button>                          
  <button type="submit" name="update_btn" class="btn btn-success">Update</button>
  <button type="submit" name="delete_btn" class="btn btn-success">Delete</button>
  <button  class="btn btn-success" onclick="document.location='admin_user.php'" >Cancel</button>
  
  
  <hr style="margin-top:10px;margin-bottom:10px;" >
  
  
</form>
  </div>
</div>
</div>
</div>


        </main>

    </div>

</body>

</html>
<script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
<?php
  include 'db_connection.php';
  $conn = OpenCon();
  if (!empty($_GET['id'])) {
$EmpID  = $_GET['id'];
}
else{
  $EmpID  = $_POST['id'];
}

  $result = mysqli_query($conn, "SELECT pic_filename FROM personal_infotbl Where emp_id_no =".$EmpID." ");
$target = "";
   if(isset($_POST["cancelbtn"])){
    $emp_number = "";
    $first_name = "";
    $middle_name = "";
    $last_name = "";
    $suffix = "";
    $birth_date = "";
    $gender = "";
    $nationality = "";
    $civil_status = "";
    $department = "";
    $designation = "";
    $dep_status = "";
    $emp_status = "";
    $paydate = "";
    $contact_number = "";
    $email = "";
    $socmed_acct = "";
    $social_media = "";
    $address1 = "";
    $address2 = "";
    $city_municipality = "";
    $state_province = "";
    $country = "";
    $zip_code = "";
    $picpath = "";

      $employee_id= "";
          
    $username= "";

$password= "";

$confirm_password= "";

$user_status= "";

$user_type= "";
  }

function alert($msg) {
      echo "<script type='text/javascript'>alert('$msg');</script>";
  }
?>

<?php 
          $sql="select * from personal_infotbl where emp_id_no='$EmpID'";
          $query=$conn->query($sql);
         
          while($row=$query->fetch_array()){

  $emp_id_no=$row['emp_id_no'];
          
    $emp_number=$row['emp_number'];

$first_name=$row['first_name'];

$middle_name=$row['middle_name'];

$last_name=$row['last_name'];

$suffix=$row['suffix'];

$birth_date=$row['birth_date'];

$gender=$row['gender'];

$nationality=$row['nationality'];

$civil_status=$row['civil_status'];

$department=$row['department'];

$designation=$row['designation'];

$dep_status=$row['dep_status'];

$emp_status=$row['emp_status'];

$paydate=$row['paydate'];

$contact_number=$row['contact_number'];

$email=$row['email'];

$social_media=$row['social_media'];

$socmed_acct=$row['socmed_acct'];

$address1=$row['address1'];

$address2=$row['address2'];

$city_municipality=$row['city_municipality'];

$state_province=$row['state_province'];

$country=$row['country'];

$zipcode=$row['zipcode'];

$picpath=$row['picpath'];

$pic_filename=$row['pic_filename'];
          
        }

         $sql2="select * from user_accounttbl where employee_id='$EmpID'";
          $query2=$conn->query($sql2);
         
          while($row=$query2->fetch_array()){

  $employee_id=$row['employee_id'];
          
    $username=$row['username'];

$password=$row['password'];

$confirm_password=$row['confirm_password'];

$user_status=$row['user_status'];

$user_type=$row['user_type'];



          
        }
?>



<html>
<head>
  <title>User Account Info</title>
  <meta charset="UTF-8">
  <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">


     <!-- jQuery library -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
    .hr-User {
     overflow: visible; /* For IE */
    padding: 0;
    border: none;
    border-top: medium double #333;
    color: #333;
    text-align: center;
}

.hr-User:after {
    content: "User Account Information";
    display: inline-block;
    position: relative;
    top: -0.7em;
    font-size: 1.5em;
    padding: 0 0.25em;
    background: white;
}

  </style>
</head>
<body>

  <div class="divider"></div>
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
               
                    <form method="post" action="user_update.php" class="a-form" enctype="multipart/form-data" >


                      <B style="margin-left: 85px;">User Image</B><br><br>
                        <div class="image-upload" id="">
                          
                            
                            <?php 
                              
                                while ($row = mysqli_fetch_array($result)) {
                               
                                    echo "<img src='images/".$row['pic_filename']."' height = '250px' width = '350px' id='output' >";

                                    //echo "<img src='images/".$row['pic_filename']."' height = '250px' width = '350px' id='output' style='position:absolute; top:17.9%;' >";
                                
                                 
                                    }
                                    
                                  
                            ?>

                         <!-- <img src="download.png" height = "250px" width = "350px" id="output" />
                               <p><img id="output" width="200" /></p>   --> 
                               
                         
                        </div>



                          <div style="position: relative; left: 38%; top: -200px; width:500px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                          <div class="hr-User"></div>

                          <input class="input--style-1" type="text" name="emp_id_no" value="<?php echo $emp_id_no?>" HIDDEN  >
                          <input class="input--style-1" type="text" name="employee_id" value="<?php echo $employee_id?>" HIDDEN  >
                          <input class="input--style-1" type="text" name="text_pic_filename" value="<?php echo $pic_filename?>" HIDDEN >
                        


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p>First Name</p>
                                    <input class="input--style-1" type="text" name="first_name" value="<?php echo $first_name?>"  disabled >
                                     <input class="input--style-1" type="text" name="first_name" value="<?php echo $first_name?>"  hidden >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Middle Name</p>
                                     <input class="input--style-1" type="text" name="middle_name" value="<?php echo $middle_name?>" disabled   >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Last Name</p>
                                    <input class="input--style-1" type="text" name="last_name" value="<?php echo $last_name?>" disabled   >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Username:</p>
                                     <input class="input--style-1" type="text" name="username" value="<?php echo $username?>"  >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                  <p>User Type:</p>
                                     <input class="input--style-1" type="text" name="user_type" value="<?php echo $user_type?>"  >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                  <p>User Status:</p>
                                     <input class="input--style-1" type="text" name="user_status" value="<?php echo $user_status?>"  >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                  <p>Password:</p>
                                     <input class="input--style-1" type="text" name="password" value="<?php echo $password?>"  >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                  <p>Confirm Password:</p>
                                     <input class="input--style-1" type="text" name="confirm_password" value="<?php echo $confirm_password?>"  >
                                </div>
                            </div>
                        </div>

                       
                        
                          <div class="row row-space">
                              <div class="col-2">
                                <div class="input-group">
                                  <p>Employee Number </p>
                                    <input class="input--style-1" type="text" name="emp_number" value="<?php echo $emp_number?>" disabled>
                                   
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                  <p>Department: </p>
                                    <input class="input--style-1" type="text" name="department" value="<?php echo $department?>" disabled >
                                   
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                   <p>Designation: </p>
                                    <input class="input--style-1" type="text" name="designation" value="<?php echo $designation?>"  disabled>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                   <p>Employee Status: </p>
                                    <input class="input--style-1" type="text" name="emp_status"  value="<?php echo $emp_status?>" disabled>
                                </div>
                            </div>

                      

                             

                        </div>






                         <!-- END OF contact INFO --> 


                        
                      


                      


                  

                            


                        

                       <br><br>

                       <center>
                        <div class="p-t-20">
                            <?php 
                            /*
                             $sql1="select * from personal_infotbl where emp_id_no='$EmpID'";
                             $query1=$conn->query($sql1);
                                while($row=$query1->fetch_array()){
                                $id=$row['emp_id_no'];
                                     <a href="update.php?id= <?php echo $id ?>">
                                }
                                */
                             ?>
               
            
                            <button class="button btn--radius" name="savebtn">Update</button>
                            <a href="<?php echo 'delete.php?id=' . $emp_id_no ?>" class="button button3 btn--radius">Delete</a>
                            <button class="button button5 btn--radius" name="cancelbtn">Cancel</button>
                        </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
   
    <script src="js/global.js"></script> -->
</body>
</html>


<script>
var loadFile = function(event) {
  var image = document.getElementById('output');
  var image2 = document.getElementById('file-input').files[0].name;
  image.src = URL.createObjectURL(event.target.files[0]);
  document.getElementById("picpath").value="images/"+image2;
  //upload_file.addEventListener("change", function(){
};
</script>

<script>
  const upload_file = document.getElementById("upload_file");
  const image_place = document.getElementById("image_place");
  const image_upload = image_place.querySelector(".image_upload")
  //  image.src = document.getElementById("picpath").value;
    const file = this.files[0];
    if (file){
      const reader = new FileReader();
      image_upload.style.display = "block"

      reader.addEventListener("load", function(){
        image_upload.setAttribute("src", this.result);
        
      });
      reader.readAsDataURL(file);
    }
    else{
      image_upload.style.display = null;
      image_upload.setAttribute("src", "");
    }
  });
</script>
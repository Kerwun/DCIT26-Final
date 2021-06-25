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
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(isset($_POST["savebtn"])){
        $employee_no = $_POST["employee_no"];
        $paydate = $_POST["paydate"];
        $dep_status = $_POST["dep_status"];
        $gross_inc = $_POST["gross_inc"];
        $tdeduct =$_POST["tdeduct"];
        $net_inc = $_POST["net_inc"];
        

            include 'db_connection.php';
            $conn = OpenCon();

        $sql = "INSERT INTO payroll_infotbl (employee_no, paydate, dep_status, gross_inc, tdeduct, net_inc) VALUES ('$employee_no','$paydate', '$dep_status', '$gross_inc', '$tdeduct', '$net_inc')";

        if ($conn -> query($sql) === TRUE) {
        $message1 = "Save Data Successfully!";
        echo "<script type='text/javascript'>alert('$message1');</script>";
        echo '<script> window.location.href="admin_payroll.php"</script>';
    
    }else {
        $message = "wrong input type! Please enter a valid data...";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $conn->close();
    
            }
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
   
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="script1.js"></script>
    <script src="script2.js"></script>
</head>
<style>
    input:read-only {
  background-color:#EEEEEE;
    border-color: rgba(118, 118, 118, 0.3);
    cursor: context-menu;
    pointer-events: none;
}
</style>
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
                    <a href="admin_payroll.php" class="active"><span class="las la-coins"></span>
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
                </label> Add Payroll
            </h2>

          
           
        </header>

        <main class="payroll">

            <div class="payroll">
            <div class="custom-info">

<fieldset>
<!-----------------------------------Employee--------------------------------------->
<form role="form" method="post" name="calculate" action="admin_payroll_update.php" class="a-form" enctype="multipart/form-data">
        
            <div class="leftbox">
            <div class="input-box1">
                <label for="enumb">Employee<br>Number:</label>
                <input type="number" name="employee_no" id="employee_no" value="<?php echo $employee['emp_number'];?>" readonly>
            </div>

            <div class="input-box1">
                <label for="fname">Firstname:</label>
                <input type="text" name="first_name" id="first_name" value="<?php echo $employee['first_name'];?>" readonly>
            </div>

            <div class="input-box1">
                <label for="mname">Middle Name:</label>
                <input type="text"  name="middle_name" id="middle_name" value="<?php echo $employee['middle_name'];?>" readonly>
            </div>

            <div class="input-box1">
                <label for="sname">Surname:</label>
                <input type="text" name="last_name" value="<?php echo $employee['last_name'];?>" readonly>
            </div>

            <div class="input-box1">
                <label for="cstatus">Civil Status:</label>
                <input type="text" name="civil_status" id="civil_status" value="<?php echo $employee['civil_status'];?>" readonly>
            </div>

            <div class="input-box1">
                <label for="desig">Designation:</label>
                <input type="text" name="designation" id="designation" value="<?php echo $employee['designation'];?>" readonly>
            </div>
            </div>

            <div class="centbox">
            <div class="input-box1">
                <label for="nodef">Number of<br>Dependent(s):</label>
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

            <div class="input-box1">
                <label for="pdate">Paydate:</label>
                <input type="date" name="paydate" id="paydate" value="<?php echo $employee['paydate'];?>">
            </div>

            <div class="input-box1">
                <label for="estatus">Employee<br>Status:</label>
                <input type="text" name="emp_status" id="emp_status" value="<?php echo $employee['emp_status'];?>" readonly>
            </div>

            <div class="input-box1">
                <label for="dept">Department:</label>
                <input type="text" name="department" id="department" value="<?php echo $employee['department'];?>" readonly>
            </div>

            </div>

            
          

            <div class="row">
             <div id="image_place" name="image_place" style='float:right;margin-top: -265px; position:relative; width:250px; height:225px; overflow:hidden; background:none; border:thin solid #d3d3d3'>
                <img src="<?php echo $employee['picpath']; ?>" class="image_upload" style="width: 100%; object-fit: cover;">

             </div>
            </div>
            
        
    


<!---------------------------------Basic Pay------------------------------------->

        <fieldset class="left left1" id="left1">
            <legend>BASIC PAY</legend>

                <div class="input-box">
                <label for="bprh">Rate / Hour:</label>
                <div class="input1">
                <input type="number" name="bp_rh" id="bp_rh" required>
                </div>
                </div>

                <div class="input-box">
                <label for="bpnhco">No. of Hour <br>/ Cut Off:</label>
                <div class="input1">
                <input type="number" name="bp_nhco" id="bp_nhco" required>
                </div>
                </div>

                <div class="input-box">
                <label for="bpipco">Income Per<br>Cut Off:</label>
                <div class="input1">
                <input type="number" name="bp_ipco" id="bp_ipco" readonly>
                </div>
                </div>



        </fieldset>


<!------------------------------End of 2nd box---------------------------------->





<!-----------------------------------Regular Deductions------------------------------------>

        <fieldset class="right" id="right1">
            <legend>REGULAR DEDUCTIONS</legend>

                <div class="input-box">
                <label for="ssscon">SSS<br>Contribution:</label>
                <input type="number" name="sss_con" id="sss_con"  readonly>
                </div>  

                <div class="input-box">
                <label for="phcon">PhilHealth<br>Contribution:</label>
                <input type="number" name="phil_con" id="phil_con"  readonly>
                </div>  

                <div class="input-box">
                <label for="pagcon">Pagibig<br>Contribution:</label>
                <input type="number" name="pag_con" id="pag_con" readonly>
                </div>  

                <div class="input-box">
                <label for="tax">Tax:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" name="tax" id="tax"  readonly>
                </div>  

        </fieldset>


<!------------------------------End of 3rd box---------------------------------->



<!----------------------------------Honorarium------------------------------------->    

        <fieldset class="left left1" id="left2">
            <legend>HONORARIUM</legend>

                <div class="input-box">
                <label for="hrh">Rate <br>/ Hour:</label>
                <input type="number" name="h_rh" id="h_rh" required>
                </div>

                <div class="input-box">
                <label for="hnhco">No. of Hour <br>/ Cut Off:</label>
                <div class="input1">
                <input type="number" name="h_nhco" id="h_nhco" required>
                </div>
                </div>

                <div class="input-box">
                <label for="thp">Total<br>Honor:</label>
                <input type="number" name="thonor" id="thonor" readonly>
                </div>



        </fieldset>


<!------------------------------End of 4th box---------------------------------->



<!--------------------------------Other Deductions------------------------------------->    

        <fieldset class="right" id="right2">
            <legend>OTHER DEDUCTIONS</legend>

                <div class="input-box">
                <label for="sssloan">SSS<br> Loan:</label>
                <input type="number" name="sss_loan" id="sss_loan"  required>
                </div>  

                <div class="input-box">
                <label for="pagloan">PAGIBIG<br> Loan:</label>
                <input type="number" name="pag_loan" id="pag_loan" required>
                </div>  

                <div class="input-box">
                <label for="fsdep">Faculty <br>Saving Deposit:</label>
                <div class="input1">
                <input type="number" name="fsdep" id="fsdep" required>
                </div>
                </div>  

                <div class="input-box">
                <label for="fsloan">Faculty <br>Saving Loan:</label>
                <div class="input2">
                <input type="number" name="fsloan" id="fsloan" required>
                 </div>
                </div>

                <div class="input-box">
                <label for="sloan">Salary<br> Loan:</label>
                <input type="number" name="sloan" id="sloan" required>
                </div>  

                <div class="input-box">
                <label for="other">Others:</label>
                

                <div>
                <select name="ibox" id="other">Select <br>Other deduction
                <option value="absence">Absences</option>
                <option value="phil">Philhealth</option>
                <option value="insurance">Insurance</option>
                <option value="late">Late</option>
                </select>
                <div class="input-box">
                <input type="number" name="others" id="others" required >
                </div>
            </div>

        </fieldset> 
    

<!------------------------------End of 5th box---------------------------------->   



<!---------------------------------Other Income----------------------------------->     

        <fieldset class="left left1" id="left3">
            <legend>OTHER INCOME</legend>

                <div class="input-box">
                <label for="oirh">Rate / Hour:</label>
                <div class="input1">
                <input type="number" name="oi_rh" id="oi_rh" required>
                </div>
                </div>

                <div class="input-box">
                <label for="oinhco">No. of Hour<br> / Cut Off:</label>
                <div class="input1">
                <input type="number" name="oi_nhco" id="oi_nhco" required>
                </div>
                </div>

                <div class="input-box">
                <label for="toip">Total Other<br> Income Pay:</label>
                <div class="input1">
                <input type="number" name="toip" id="toip" readonly>
                </div>
                </div>



        </fieldset>

<!------------------------------End of 6th box---------------------------------->           




<!------------------------------Income Summary---------------------------------->       

        <fieldset class="left" id="left4">
            <legend>INCOME SUMMARY</legend>

                <div class="input-box">
                <label for="groinc">GROSS<br> INCOME:</label>
                <div class="input1">
                <input type="number" name="gross_inc" id="gross_inc" readonly>
                </div>
                </div>

                <div class="input-box">
                <label for="netinc">NET INCOME:</label>
                <div class="input1">
                <input type="number" name="net_inc" id="net_inc" readonly>
                </div>
                </div>


        </fieldset> 

<!------------------------------End of 7th box---------------------------------->   




<!-------------------------------Deduction Summary---------------------------------->   


        <fieldset class="right" id="right3">
            <legend>DEDUCTION SUMMARY</legend>

                <div class="input-box">
                <label for="tdeduct">Total<br>Deductions:</label>
                <input type="number" name="tdeduct" id="tdeduct" readonly>
                </div>

        </fieldset> 


<!------------------------------End of 8th box---------------------------------->   




<!---------------------------------Buttons--------------------------------->
    
    


    <div>
        
            <div class="button1">
            <button type="button" class="button button1" id="but" onclick="calgross()">Calculate Gross Income</button>
            </div>

            <div class="button2">
            <button type="button" class="button button2" id="but" onclick="calnet()">Calculate Net Income</button>
            </div>

            <div class="button3">
            <button type="button" class="button button3" id="but" onclick="new1()">New</button>
            </div>
            
            <div class="button4">
            <button class="button button4" id="but" onclick="document.location='admin_payroll.php'" >Cancel</button>
            </div>

        

            <div class="button6">
            <button type="submit" class="button button6" id="but" name="savebtn">Save Details</button>
            </div>

            <div class="button7">
            <button class="button button7" id="but" onclick="document.location='admin_payroll.php'"  >Exit</button>
            </div>
        </div>
        
    </div>  

<!------------------------------End of 9th box---------------------------------->   

</form>
</fieldset>
</div>
</div>
        </main>

    </div>

</body>

</html>
<script>
    function calgross(){
        // variables
        var b_num1, b_num2, b_res, h_num1, h_num2, h_res, o_num1, o_num2, o_res, gross, tax;


        //basic pay
        b_num1 = Number(document.calculate.bp_rh.value);
        b_num2 = Number(document.calculate.bp_nhco.value);
        b_res = b_num1 * b_num2;

        
        //honorarium
        h_num1 = Number(document.calculate.h_rh.value);
        h_num2 = Number(document.calculate.h_nhco.value);
        h_res = h_num1 * h_num2;

        
        //other income
        o_num1 = Number(document.calculate.oi_rh.value);
        o_num2 = Number(document.calculate.oi_nhco.value);
        o_res = o_num1 * o_num2;

        // gross income
        gross = b_res + h_res + o_res;

        // result for basic pay, honorarium, other income, and gross income
        document.calculate.bp_ipco.value = b_res;
        document.calculate.thonor.value = h_res;
        document.calculate.toip.value = o_res;
        document.calculate.gross_inc.value = gross;

        
        //sss contribution
            if(gross<3249){
                document.getElementById("sss_con").value = 135;
            }
            else if (gross>=3250 && gross<=3749) {
                document.getElementById("sss_con").value = 157.50;
            }
            else if (gross>=3750 && gross<=4249) {
                document.getElementById("sss_con").value = 180;
            }
            else if (gross>=4250 && gross<=4749) {
                document.getElementById("sss_con").value = 202.50;;
            }
            else if (gross>=4750 && gross<=5249) {
                document.getElementById("sss_con").value = 225;
            }
            else if (gross>=5250 && gross<=5749) {
                document.getElementById("sss_con").value = 247.50;
            }
            else if (gross>=5750 && gross<=6249) {
                document.getElementById("sss_con").value = 270;
            }
            else if (gross>=6250 && gross<=6749) {
                document.getElementById("sss_con").value = 292.50;
            }
            else if (gross>=6750 && gross<=7249) {
                document.getElementById("sss_con").value = 315;
            }
            else if (gross>=7250 && gross<=7749) {
                document.getElementById("sss_con").value = 337.50;
            }
            else if (gross>=7750 && gross<=8249) {
                document.getElementById("sss_con").value = 360;
            }
            else if (gross>=8250 && gross<=8749) {
                document.getElementById("sss_con").value = 382.50;
            }
            else if (gross>=8750 && gross<=9249) {
                document.getElementById("sss_con").value = 405;
            }
            else if (gross>=9250 && gross<=9749) {
                document.getElementById("sss_con").value = 427.50;
            }
            else if (gross>=9750 && gross<=10249) {
                document.getElementById("sss_con").value = 450;
            }
            else if (gross>=10250 && gross<=10749) {
                document.getElementById("sss_con").value = 472.50;
            }
            else if (gross>=10750 && gross<=11249) {
                document.getElementById("sss_con").value = 495;
            }
            else if (gross>=11250 && gross<=11749) {
                document.getElementById("sss_con").value = 517.50;
            }
            else if (gross>=11750 && gross<=12249) {
                document.getElementById("sss_con").value = 540;
            }
            else if (gross>=12250 && gross<=12749) {
                document.getElementById("sss_con").value = 562.50;
            }
            else if (gross>=12750 && gross<=13249) {
                document.getElementById("sss_con").value = 585;
            }
            else if (gross>=13250 && gross<=13749) {
                document.getElementById("sss_con").value = 607.50;
            }
            else if (gross>=13750 && gross<=14249) {
                document.getElementById("sss_con").value = 630;
            }
            else if (gross>=14250 && gross<=14749) {
                document.getElementById("sss_con").value = 652.50;
            }
            else if (gross>=14750 && gross<=15249) {
                document.getElementById("sss_con").value = 675;
            }
            else if (gross>=15250 && gross<=15749) {
                document.getElementById("sss_con").value = 697.50;
            }
            else if (gross>=15750 && gross<=16249) {
                document.getElementById("sss_con").value = 720;
            }
            else if (gross>=16250 && gross<=16749) {
                document.getElementById("sss_con").value = 742.50;
            }
            else if (gross>=16750 && gross<=17249) {
                document.getElementById("sss_con").value = 765;
            }
            else if (gross>=17250 && gross<=17749) {
                document.getElementById("sss_con").value = 787.50;
            }
            else if (gross>=17750 && gross<=18249) {
                document.getElementById("sss_con").value = 810;
            }
            else if (gross>=18250 && gross<=18749) {
                document.getElementById("sss_con").value = 832.50;
            }
            else if (gross>=18750 && gross<=19249) {
                document.getElementById("sss_con").value = 855;
            }
            else if (gross>=19250 && gross<=19749) {
                document.getElementById("sss_con").value = 877.5;
            }
            else{
                document.getElementById("sss_con").value = 900;
            }


            //philhealth contribution
            if(gross<10000){
                document.getElementById("phil_con").value = 137;
            }
            else if (gross>=10001 && gross<=11000) {
                document.getElementById("phil_con").value = 151.25;
            }
            else if (gross>=11001 && gross<=12000) {
                document.getElementById("phil_con").value = 165;
            }
            else if (gross>=12001 && gross<=13000) {
                document.getElementById("phil_con").value = 178.75;
            }
            else if (gross>=13001 && gross<=14000) {
                document.getElementById("phil_con").value = 192.50;
            }
            else if (gross>=14001 && gross<=15000) {
                document.getElementById("phil_con").value = 206.25;
            }
            else if (gross>=15001 && gross<=16000) {
                document.getElementById("phil_con").value = 220;
            }
            else if (gross>=16001 && gross<=17000) {
                document.getElementById("phil_con").value = 233.75;
            }
            else if (gross>=17001 && gross<=18000) {
                document.getElementById("phil_con").value = 247.50;
            }
            else if (gross>=18001 && gross<=19000) {
                document.getElementById("phil_con").value = 261.25;
            }
            else if (gross>=19001 && gross<=20000) {
                document.getElementById("phil_con").value = 275;
            }
            else if (gross>=20001 && gross<=21000) {
                document.getElementById("phil_con").value = 288.75;
            }
            else if (gross>=21001 && gross<=22000) {
                document.getElementById("phil_con").value = 302.50;
            }
            else if (gross>=22001 && gross<=23000) {
                document.getElementById("phil_con").value = 316.25;
            }
            else if (gross>=23001 && gross<=24000) {
                document.getElementById("phil_con").value = 330;
            }
            else if (gross>=24001 && gross<=25000) {
                document.getElementById("phil_con").value = 343.75;
            }
            else if (gross>=25001 && gross<=26000) {
                document.getElementById("phil_con").value = 357.50;
            }
            else if (gross>=26001 && gross<=27000) {
                document.getElementById("phil_con").value = 371.25;
            }
            else if (gross>=27001 && gross<=28000) {
                document.getElementById("phil_con").value = 385;
            }
            else if (gross>=28001 && gross<=29000) {
                document.getElementById("phil_con").value = 398.75;
            }
            else if (gross>=29001 && gross<=30000) {
                document.getElementById("phil_con").value = 412.50;
            }
            else if (gross>=30001 && gross<=31000) {
                document.getElementById("phil_con").value = 426.25;
            }
            else if (gross>=31001 && gross<=32000) {
                document.getElementById("phil_con").value = 440;
            }
            else if (gross>=32001 && gross<=33000) {
                document.getElementById("phil_con").value = 453.75;
            }
            else if (gross>=33001 && gross<=34000) {
                document.getElementById("phil_con").value = 467.50;
            }
            else if (gross>=34001 && gross<=35000) {
                document.getElementById("phil_con").value = 481.25;
            }
            else if (gross>=35001 && gross<=36000) {
                document.getElementById("phil_con").value = 495;
            }
            else if (gross>=36001 && gross<=37000) {
                document.getElementById("phil_con").value = 508.75;
            }
            else if (gross>=37001 && gross<=38000) {
                document.getElementById("phil_con").value = 522.50;
            }
            else if (gross>=38001 && gross<=39000) {
                document.getElementById("phil_con").value = 536.25;
            }
            else if (gross>=39001 && $gross_inc<=40000) {
                document.getElementById("phil_con").value = 543.13;
            }
            else{
                document.getElementById("phil_con").value = 550;
            }

            
document.getElementById("pag_con").value = 100;

            //tax
            if(gross<20832){
                document.getElementById("tax").value = 0;
            }
            else if (gross>=20833 && gross<=33332) {
                tax = ((gross-20833)*0.20);
            }
            else if (gross>=33333 && gross<=66666) {
                tax = (((gross-33333)*0.25) + 2500);
            }
            else if (gross>=66667 && gross<=166666) {
                tax = (((gross-66667)*0.30) + 10833.33);
            }
            else if (gross>=166667 && gross<=666666) {
                tax = (((gross-166667)*0.32) + 40833.33);
            }
            else{
                tax = (((gross-666667)*0.35) + 200833.33);
            }

        }

        function calnet(){
            var sssloan, pagloan, fs_dep, fs_loan, s_loan, other, ssscon, philcon, pagcon, tax, t_deduct, netinc;

            
            sssloan = Number(document.calculate.sss_loan.value);
            pagloan = Number(document.calculate.pag_loan.value);
            fs_dep = Number(document.calculate.fsdep.value);
            fs_loan = Number(document.calculate.fsloan.value);
            s_loan = Number(document.calculate.sloan.value);
            other = Number(document.calculate.others.value);
            ssscon = Number(document.calculate.sss_con.value);
            philcon = Number(document.calculate.phil_con.value);
            pagcon = Number(document.calculate.pag_con.value);
            tax = Number(document.calculate.tax.value);

            gross = Number(document.calculate.gross_inc.value);

            //deduction summary
            t_deduct = sssloan + pagloan + fs_dep + fs_loan + s_loan + other + ssscon + philcon + pagcon + tax;
            document.calculate.tdeduct.value = t_deduct;

            //net income
            netinc = gross-t_deduct;
            document.calculate.net_inc.value = netinc;

        }

        function new1(){
            document.getElementById("bp_rh").value ="";
            document.getElementById("bp_nhco").value = "";
            document.getElementById("bp_ipco").value = "";

            document.getElementById("h_rh").value = "";
            document.getElementById("h_nhco").value = "";
            document.getElementById("thonor").value = "";

            document.getElementById("oi_rh").value = "";
            document.getElementById("oi_nhco").value = "";
            document.getElementById("toip").value = "";

            document.getElementById("net_inc").value = "";
            document.getElementById("gross_inc").value = "";

            document.getElementById("sss_con").value = "";
            document.getElementById("phil_con").value = "";
            document.getElementById("pag_con").value = "";
            document.getElementById("tax").value = "";

            document.getElementById("sss_loan").value = "";
            document.getElementById("pag_loan").value = "";
            document.getElementById("fsdep").value = "";
            document.getElementById("fsloan").value = "";
            document.getElementById("sloan").value = "";
            document.getElementById("others").value = "";

            document.getElementById("tdeduct").value = "";
            


        }
</script>
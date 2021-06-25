
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="script1.js"></script>
    <script src="script2.js"></script>
</head>
<style>


    table{
        background-color: #f2f2f3;
        zoom:135%;
    }
    table tr:hover{
        cursor: pointer;
        color: #112d32;
        font-weight: bold;
       

    }

    table thead{
        background: #f2f2f3;
    }
    table thead tr th{
        color: #333333;

    }
    input{
        float: right;
    }

    .button button{
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
    width: 100%;
    font-size: 14px;
    line-height: 1.428571429;
    border-radius: 4px;

    }
    .button button:hover{
    color: #fff;
    background-color: #176978;
    border-color: #176978;
    }

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
    margin-top: -50px;
    margin-right: -180px;
    width: 200px;

    }
    .button2 button:hover{
    color: #fff;
    background-color: #176978;
    border-color: #176978;
    }

    
    /* 2nd option colors
    table{
        background-color: #333333;
        color: #fff;
    }
    table tr:hover{
        cursor: pointer;
        color: #112d32;
        font-weight: bold;

    }

    table thead{
        background: #f2f2f3;
    }
    table thead tr th{
        color: #333333;

    }

    */
</style>
<script>
$(document).ready(function() {
    $('table tbody tr').click(function(){
        var id = $(this).attr('row_id');
        window.open("admin_payroll_update.php?id=" + id, "_self"); // incompletes*******************************************************
    });
});
</script>
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
                    <a href="" class="active"><span class="las la-coins"></span>
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
                </label> Payroll List
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search Employee Name" name="search" id="search" onkeyup="myFunction()" />
            </div>
            
        </header>

        <main>
            <br><br> <br><br> <br>
  
    <div class="container">
    
    <table id="myTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Employee Number</th>
                <th>Employee Name</th>
                <th>Civil Status</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Employee Status</th>
                <th>Qualified Dependent Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'db_connection.php';
                $conn = OpenCon();
                $sql = "SELECT emp_id_no, emp_number, first_name, middle_name, last_name, civil_status,  department, designation, emp_status, dep_status FROM personal_infotbl";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    //output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr row_id='". $row['emp_id_no']. "'><td>" . $row["emp_number"]. "</td></td>" . "<td>". $row["first_name"]. " " . $row["middle_name"]. " " . $row["last_name"] . "</td>" ."<td>". $row["civil_status"]. "</td>" . "<td>". $row["department"]. "</td>". "<td>". $row["designation"]. "</td>". "<td>". $row["emp_status"]. "</td>". "<td>". $row["dep_status"]. "</td>";
                    }
                    echo "</table>";
                }else{
                    echo "0 results";
                }
                $conn->close();

            ?>
        </tbody>
        
    </table>
    <div class="button">
    <center>
    <button onclick="document.location='admin_payroll_report.php'" >Check Payroll Report</button>
</center>
    </div>
</div>

        </main>

    </div>

</body>

</html>
<script>

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

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
                </label> Payroll Report
            </h2>
             <div class="button2">
    <button   onclick="document.location='admin_payroll.php'" >Back to Payroll List</button>
    </div>
            
        </header>

        <main>
            <br><br> <br><br> <br>
  
    <div class="container">
    


   

    <table id="myTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Employee Number</th>
                <th>Paydate</th>
                <th>Qualified Department Status</th>
                <th>Gross Income</th>
                <th>Total Deduction</th>
                <th>Net Income</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
                include 'db_connection.php';
                $conn = OpenCon();
                $sql = "SELECT payroll_id, employee_no, paydate, dep_status, gross_inc, tdeduct, net_inc FROM payroll_infotbl";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    //output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr row_id='". $row['payroll_id']. "'>

                        <td>" . $row["employee_no"]. "</td></td>" 

                        ."<td>". $row["paydate"]. "</td>". 

                        "<td>". $row["dep_status"]. "</td>". 

                        "<td>". $row["gross_inc"]. "</td>".

                        "<td>". $row["tdeduct"]. "</td>" .  

                        "<td>". $row["net_inc"]. "</td>";
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

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
                    <a href=""  class="active"><span class="las la-cash-register"></span>
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
                </label> Admin Point of Sale B Report
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search Employee Name" name="search" id="search" onkeyup="myFunction()" />
            </div>
            
        </header>

        <main>
            <br><br> <br><br> <br>
  
    <div class="container">
    <h2 style="margin-top: 30px;margin-bottom: 20px; color: #f2f2f3;">Point of Sale Report B</h2>


    

    <table id="myTable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Discount Amount</th>
                <th>Discounted Amount</th>
                <th>Total Quantity</th>
                <th>Total Discount Given</th>
                <th>Total Discounted Given</th>
                <th>Cash Given</th>
                <th>Customer Change</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'db_connection.php';
                $conn = OpenCon();
                $sql = "SELECT pos2_id, item_name, quantity, price, discount_amount, discounted_amount, total_quantity, total_discount_given,  total_discounted_amount, cash_given, customer_change FROM pos2_infotbl";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    //output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr row_id='". $row['pos2_id']. "'>

                        <td>" . $row["item_name"]. "</td></td>" 

                        ."<td>". $row["quantity"]. "</td>". 

                        "<td>". $row["price"]. "</td>". 

                        "<td>". $row["discount_amount"]. "</td>".

                        "<td>". $row["discounted_amount"]. "</td>".

                        "<td>". $row["total_quantity"]. "</td>".

                        "<td>". $row["total_discount_given"]. "</td>" . 

                        "<td>". $row["total_discounted_amount"]. "</td>". 

                        "<td>". $row["cash_given"]. "</td>". 

                        "<td>". $row["customer_change"]. "</td>";
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
    <button onclick="document.location='admin_saleB.php'" >Add New Report</button>
</center>
    </div>
</div>
        </main>

    </div>

</body>

</html>

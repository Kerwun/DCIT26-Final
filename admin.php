
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="admin/style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="script1.js"></script>
    <script src="script2.js"></script>
</head>
<style>
    main{
    background-color: #fff;
    padding-bottom: 100px;
    }
    .main h1{
        font-size: 500px;
        font-weight: bold;
        position: relative;
        float: left;

    }
    .main h2{
        font-size: 110px;
        font-weight: bold;
        position: relative;
        padding-top: 190px;
        
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
                    <a href="" class="active"><span class="las la-home"></span>
                    <span>Home</span></a>
                </li>
                <li>
                    <a href="admin/admin_employee.php"><span class="las la-handshake"></span>
                    <span>Employee</span></a>
                </li>
                <li>
                    <a href="admin/admin_payroll.php"><span class="las la-coins"></span>
                    <span>Payroll</span></a>
                </li>
                <li>
                    <a href="admin/admin_saleA.php"><span class="las la-receipt"></span>
                    <span>Point of Sale A</span></a>
                </li>
                <li>
                    <a href="admin/admin_saleB.php"><span class="las la-cash-register"></span>
                    <span>Point of Sale B</span></a>
                </li>
                <li>
                    <a href="admin/admin_user.php"><span class="las la-user"></span>
                    <span>User Account</span></a>
                </li>
                <li>
                    <a href="admin/logout.php"><span class="las la-backspace"></span>
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
                </label> Home
            </h2>

           
            <div class="user-wrapper">
                <img src="img/Avatar.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Administrador</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main>
            <center>

                <div class="main">
                    
                <h1><span class="las la-seedling"></span></h1><h2> <span>Welcome to PlantHub</span></h2>


            </center>
        </div>
        </main>

    </div>

</body>

</html>
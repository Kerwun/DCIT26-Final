
<?php
        include 'db_connection.php';
        $conn = OpenCon();

        if(isset($_POST["login_btn"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
                        $sql = "SELECT * FROM user_accttble1 WHERE username = '$username' AND password = '$password'";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0) {
                             while($row = $result->fetch_assoc()){

                                //$role = $row['user_type'];
                                if($row["user_type"] == 'administrator'){
                                    echo '<script> window.location.href="admin.php"</script>';
                                    header("Location: {$url}");
                                    exit;
                                }elseif($row["user_type"] == 'cashier1'){
                                    echo '<script> window.location.href="Ordering_System/"</script>';
                                    header("Location: {$url}");
                                    exit;
                                }elseif($row["user_type"] == 'cashier2'){
                                    echo '<script> window.location.href="Ordering_Application_2/"</script>';
                                    header("Location: {$url}");
                                    exit;
                                }elseif($row["user_type"] == 'accounting_staff'){
                                    echo '<script> window.location.href="payroll_listview.php"</script>';
                                    header("Location: {$url}");
                                    exit;
                                }else{
                                    echo '<script> alert("Invalid user account. Contact your adniministrator") </script>';
                                    echo '<script> window.location.href="index.php"</script>';
                                    exit;
                                }
                                
                        }
                    $conn->close();
                    }
                }
            
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login_css/login1.css">
    <link rel="stylesheet" type="text/css" href="login_css/login2.css">
    <script src="login_css/1st.js"></script>
    <script src="login_css/2nd.js"></script>
    <script src="login_css/3rd.js"></script>
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
    .log{
        padding-bottom: 10px;
    }
    .error{
        background: #F2DEDE;
        color: #A94442;
        padding:10px;
        width: 100%;
        border-radius: 5px;
    }
</style>

<body style="background-color: #112d32;">
  <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="login_css/avatar.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" id="form_login"  method="post" action="index.php" alt="User Icon">
                <span id="reauth-email" class="reauth-email"></span>
                <div class="log">
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div>
                <input type="password" id="inputPassword" class="form-control" name="password"  placeholder="Password" required>
                </div>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
<button class="btn btn-lg btn-primary btn-block btn-signin" name="login_btn" id="login_btn" type="submit">Log in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>


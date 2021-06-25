<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
	if(isset($_POST["savebtn"])){
	$item_name = $_POST["item_name"];
	$quantity = $_POST["quantity"];
	$price = $_POST["price"];
	$discount_amount = $_POST["discount_amount"];
	$discounted_amount = $_POST["discounted_amount"];
	$total_quantity = $_POST["total_quantity"];
	$total_discount_given = $_POST["total_discount_given"];
	$total_discounted_amount = $_POST["total_discounted_amount"];
	$cash_given = $_POST["cash_given"];
	$customer_change = $_POST["customer_change"];
	

	include 'db_connection.php';
	$conn = OpenCon();

	$sql = "INSERT INTO pos2_infotbl (item_name, quantity, price, discount_amount, discounted_amount, total_quantity, total_discount_given, total_discounted_amount, cash_given, customer_change) VALUES ('$item_name', '$quantity', '$price', '$discount_amount', '$discounted_amount', '$total_quantity', '$total_discount_given', '$total_discounted_amount', '$cash_given', '$customer_change')";
	if($customer_change >= 0){

		if ($conn -> query($sql) === TRUE) {
		$message1 = "Save Transaction Successfully!";
		echo "<script type='text/javascript'>alert('$message1');</script>";
		echo '<script> window.location.href="admin_saleB.php"</script>';
		}
	}
	else {
		$message = "Please Enter the right Amount";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo '<script> window.location.href="admin_saleB.php"</script>';
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
    <link rel="stylesheet" type="text/css" href="style5.css">
    <!-- jQuery library -->
	<script src="js2/script1.js"></script>
	<!-- Popper JS -->
	<script src="js2/script2.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="js2/script3.js"></script>
	<!-- Main Script -->
	<script src="js2/script.js"></script>
</head>
<style type="text/css">
	input:read-only {
  background-color:#EEEEEE;
    border-color: rgba(118, 118, 118, 0.3);
    cursor: context-menu;
    pointer-events: none;
}}.button button{
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
   
    width: 200px;

	}
	.button2 button:hover{
	color: #fff;
    background-color: #176978;
    border-color: #176978;
	}
</style>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2 style="font-size: 30px;"><span class="las la-seedling"></span> <span>PLANTHUB</span></h2>
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
                </label> Admin Point of Sale B
            </h2>
<div class="button2">
	<button   onclick="document.location='admin_posB_report.php'" >Check Report</button>
	</div>
            
            
        </header>

        <main id="bodyz">
            <div class="custom-info">	
		
<!------------------------------------1st--------------------------------------->
	<div class="h1">
			<h1>PLANT HUB INC POINT OF SALE</h1>
	</div>	
	<h1 style="font-style: none; color:#112d32; ">PLANT HUB INC POINT OF SALE</h1>
<!------------------------------End of 1st box---------------------------------->


<!---------------------------------3rd box-------------------------------------->			
<form role="form" method="post" action="admin_saleB.php" class="a-form" enctype="multipart/form-data">

			<fieldset class="left" id="left1">

				<div class="input-box" id="input-box1">
				<label for="noatem">Name of<br>an Item:</label>
				<input type="text" name="item_name" id="nametag" list="datalist1" readonly>
					<datalist id="datalist1">
						<option value="Lithops living stones">
						<option value="Titanopsis calcarea">
						<option value="Senecio vitalis">
						<option value="Sedum morganianum">
						<option value="Pachycereus marginatus">
						<option value="Haworthia planifolia">
						<option value="G. stenogonum">
						<option value="GS. asterium">
						<option value="Ferocactus emoryi">
						<option value="Euphorbia heptagona">
						<option value="Euphorbia grandicornes">
						<option value="Euphorbia ferox">
						<option value="E. ochoterenae">
						<option value="Echeveria cante Large">
						<option value="Dorstenia foetida">
						<option value="Dinteranthus wilmottianus">
						<option value="Dinteranthus microsperma">
						<option value="CM. hispida">
						<option value="Aloe brevifolia crocodile">
						<option value="Aeonium haworthii kiwi">
						
					</datalist>
				</div>

				<div class="input-box">
				<label for="quantity">Quantity:</label>
				<input type="Number" name="quantity" id="quantity">
				</div>	
	

				<div class="input-box">
				<label for="price">Price:</label>
				<input type="Number" name="price" id="price" readonly>
				</div>	

				<div class="input-box">
				<label for="damount">Discount<br>Amount:</label>
				<input type="Number" name="discount_amount" id="damount" readonly>
				</div>	

				<div class="input-box">
				<label for="dedamount">Discounted<br>Amount:</label>
				<input type="Number" name="discounted_amount" id="dedamount" readonly>
				</div>	

				<div class="radio">
				<input type="radio" id="sencit" name="" value="sencit">
				<label for="sencit">Senior Citizen</label><br>
				<input type="radio" id="decard" name="" value="decard">
				<label for="decard">With Disc. Card</label><br>
				<input type="radio" id="empdisc" name="" value="empdisc">
				<label for="empdisc">Employee Disc.</label><br>
				<input type="radio" id="nodisc" name="" value="nodisc">
				<label for="nodisc">No Discount</label><br>
				</div>

				<div class="butt" id="butt2">
				<center>
				
				<button class="button button1" id="calchange" style="height: 40px;">Calculate<br>Change</button><br>
				<button class="button button3" id="new">New</button><br>
				<button class="button button4" id="cancel">Cancel</button><br>
				<button type="submit" class="button button4" name="savebtn" id="savebtn">Save</button><br>
				<button class="button button5">Exit</button>
				
				</center>
				</div>



			</fieldset>

<!------------------------------End of 3rd box---------------------------------->



<!---------------------------------4th box-------------------------------------->
		
			<fieldset class="left left2">
				<legend>Summary</legend>

				<div class="input-box" id="input-box1">
				<label for="tquan">Total Quantity:</label>
				<input type="Number" name="total_quantity" id="tquan" readonly>
				</div>	

				<div class="input-box" id="input-box1">
				<label for="tdisgiv">Total Discount<br>Given:</label>
				<input type="Number" name="total_discount_given" id="tdisgiv" readonly>
				</div>

				<div class="input-box" id="input-box1">
				<label for="tdisamo">Total Discounted<br>Amount:</label>
				<input type="Number" name="total_discounted_amount" id="tdisamo" readonly>
				</div>

			</fieldset>


<!------------------------------End of 4th box---------------------------------->
		


<!---------------------------------5th box-------------------------------------->	
		
			<fieldset class="left left3">

				<div class="input-box" id="input-box2">
				<label for="cashrend">Cash Rendered:</label>
				<input type="Number" name="cash_given" id="cashrend">
				</div>	

				<div class="input-box" id="input-box2">
				<label for="change">Change:</label>
				<input type="Number" name="customer_change" id="change" readonly>
				</div>	

			</fieldset>
		
<!------------------------------End of 5th box---------------------------------->


<!---------------------------------6th box-------------------------------------->			




	
	<div class="wrap">
		<form name="cal">

<!-----------------<input type="type" name="display" id="display">---------->

			<br>
		<div class="inbox">
			<input class="inbox button" type="button" value="9" onclick="cal.display.value+='9'"> 
			<input class="inbox button" type="button" value="8" onclick="cal.display.value+='8'"> 
			<input class="inbox button" type="button" value="7" onclick="cal.display.value+='7'"> 
			<input class="inbox button" type="button" value="+" onclick="cal.display.value+='+'"> 
			<br>
			<input class="inbox button" type="button" value="6" onclick="cal.display.value+='6'"> 
			<input class="inbox button" type="button" value="5" onclick="cal.display.value+='5'"> 
			<input class="inbox button" type="button" value="4" onclick="cal.display.value+='4'"> 
			<input class="inbox button" type="button" value="-" onclick="cal.display.value+='-'"> 
			<br>
			<input class="inbox button" type="button" value="3" onclick="cal.display.value+='3'"> 
			<input class="inbox button" type="button" value="2" onclick="cal.display.value+='2'"> 
			<input class="inbox button" type="button" value="1" onclick="cal.display.value+='1'"> 
			<input class="inbox button" type="button" value="*" onclick="cal.display.value+='*'"> 
			<br>
			<input class="inbox button" type="button" value="." onclick="cal.display.value+='.'"> 
			<input class="inbox button" type="button" value="0" onclick="cal.display.value='0'" id ="del" > 
			<input class="inbox button" type="button" value="/" onclick="cal.display.value+='/'"> 
			
			<br><br>
			<input type="button" value="ENTER" onclick="cal.display.value =eval(cal.display.value)" id ="ent"> 
		</div>

		</form>
	</div>
		
<!------------------------------End of 6th box---------------------------------->


<!---------------------------------2nd box-------------------------------------->
	

			<div class="corner">
			<fieldset class="right" id="right" style="zoom:45px;">
				<legend>Items Display</legend>
					
					<center>
  					
    				<div class="product">
    					
    				<figure>
    				<figcaption id="f1">Lithops living stones</figcaption>
    				<img src="image/Lithops living stones.jpg">
    				<figcaption id="f2">Titanopsis calcarea</figcaption>
    				<img src="image/Titanopsis calcarea.jpg">
    				<figcaption id="f3">Senecio vitalis</figcaption>
    				<img src="image/Senecio vitalis.jpg">
    				<figcaption id="f4">Sedum morganianum</figcaption>
    				<img src="image/Sedum morganianum Donkey's Tail.jpg">
    				<figcaption id="f5">Pachycereus marginatus</figcaption>
    				<img src="image/Pachycereus marginatus Mexican Fence Post Specimen.jpg">
    				</figure>

    				<figure>
    				<figcaption id="f6">Haworthia planifolia</figcaption>
    				<img src="image/Haworthia planifolia.jpg">
    				<figcaption id="f7">G. stenogonum</figcaption>
    				<img src="image/Gymnocalycium stenogonum.jpg">
    				<figcaption id="f8">GS. asterium</figcaption>
    				<img src="image/Gymnocalycium stellatum asterium.jpg">
    				<figcaption id="f9">Ferocactus emoryi</figcaption>
    				<img src="image/Ferocactus emoryi.jpg">
    				<figcaption id="f10">Euphorbia heptagona</figcaption>
    				<img src="image/Euphorbia heptagona.jpg">
    				</figure>

    				<figure>
    				<figcaption id="f11">Euphorbia grandicornes</figcaption>
    				<img src="image/Euphorbia grandicornes.jpg">
    				<figcaption id="f12">Euphorbia ferox</figcaption>
    				<img src="image/Euphorbia ferox.jpg">
    				<figcaption id="f13">E. ochoterenae</figcaption>
    				<img src="image/Echinofossulocactus ochoterenae.jpg">
    				<figcaption id="f14">Echeveria cante Large</figcaption>
    				<img src="image/Echeveria cante Large.jpg">
    				<figcaption id="f15">Dorstenia foetida</figcaption>
    				<img src="image/Dorstenia foetida.jpg">
    				</figure>

    				<figure>
    				<figcaption id="f16">Dinteranthus wilmottianus</figcaption>
    				<img src="image/Dinteranthus wilmottianus.jpg">
    				<figcaption id="f17">Dinteranthus microsperma</figcaption>
    				<img src="image/Dinteranthus microsperma.jpg">
    				<figcaption id="f18">CM. hispida</figcaption>
    				<img src="image/crassula mesembryanthemoides hispida.jpg">
    				<figcaption id="f19">Aloe brevifolia crocodile</figcaption>
    				<img src="image/Aloe brevifolia crocodile plant.jpg">
    				<figcaption id="f20">Aeonium haworthii kiwi</figcaption>
    				<img src="image/Aeonium haworthii kiwi.jpg">
    				</figure>



    				</div>
    					</div>
  						
  					</center>
			</fieldset>



<!------------------------------End of 2nd box---------------------------------->
		
</form>
</div>
        </main>

    </div>

</body>

</html>
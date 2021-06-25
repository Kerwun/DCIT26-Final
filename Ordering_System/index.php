<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
	if(isset($_POST["savebtn"])){
	$price = $_POST["price"];
	$quantity = $_POST["quantity"];
	$discount_amount = $_POST["discount_amount"];
	$discounted_amount = $_POST["discounted_amount"];
	$total_bills = $_POST["total_bills"];
	$total_quantity = $_POST["total_quantity"];
	$cash_given = $_POST["cash_given"];
	$customer_change = $_POST["customer_change"];
	$order_summary = $_POST["order_summary"];
	

	include 'db_connection.php';
	$conn = OpenCon();

	$sql = "INSERT INTO pos1_infotbl (price, quantity, discount_amount, discounted_amount, total_bills, total_quantity, cash_given, customer_change, order_summary) VALUES ('$price', '$quantity', '$discount_amount', '$discounted_amount', '$total_bills', '$total_quantity', '$cash_given', '$customer_change', '$order_summary')";

	if($cash_given >= 0){

		if ($conn -> query($sql) === TRUE) {
		$message1 = "Save Transaction Successfully!";
		echo "<script type='text/javascript'>alert('$message1');</script>";
		echo '<script> window.location.href="../Ordering_System/"</script>';
		}
	}
	else {
		$message = "Please Enter the right Amount";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo '<script> window.location.href="../Ordering_System/"</script>';
	}
}
	$conn->close();
	}






function alert($msg) {
    	echo "<script type='text/javascript'>alert('$msg');</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ordering System</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<!-- jQuery library -->
	<script src="js/script1.js"></script>
	<!-- Popper JS -->
	<script src="js/script2.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="js/script3.js"></script>
	<!-- Main Script -->
	<script src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">
	input:read-only {
  background-color:#EEEEEE;
    border-color: rgba(118, 118, 118, 0.3);
    cursor: context-menu;
    pointer-events: none;
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
    margin-right: -25px;
    width: 200px;

	}
	.button2 button:hover{
	color: #fff;
    background-color: #176978;
    border-color: #176978;
	}


</style>




</head>
<body id="mbody">

	<form role="form" id="form" method="post" action="index.php" class="a-form" enctype="multipart/form-data">
<h1><center>PLANTHUB ORDERING SYSTEM</center></h1>
<div class="button2">
	<button   onclick="document.location='../posA_report.php'" >Check Reports</button>
	</div>
<style type="text/css">
	.orderimg{
		width: 160px;
    	height: auto;
		visibility: hidden;
		position: absolute;
		bottom:57px;
		right: 21px;

	}
	.item {
    width: 140px;
    float: left;
    margin-right: 35px;
    padding: -5px;
}
</style>

<!--------------Need Info------------------->
<div class="custom-info">

<!-----------------------------------1st box--------------------------------------->
	
		<fieldset class="left" id="left1">


			<legend>Choose your Bundle</legend>

			<div class="radio">
			<input type="radio" id="fba" name="foodbundle" value="fba">
			<label for="fba">PlantHub Bundle A</label><br>
			<input type="radio" id="fbb" name="foodbundle" value="fbb">
			<label for="fbb">PlantHub Bundle B</label><br>
			<input type="radio" id="fbc" name="foodbundle" value="fbc">
			<label for="fbb">PlantHub Bundle C</label><br>
			</div>
		</fieldset>	

<!--------------------------------End of 1st box----------------------------------->



<!-----------------------------------2nd box--------------------------------------->
	
		<fieldset class="right" id="right1">
			
			
			<legend>PlantHub Bundles A</legend>

			<div class="checkbox1">
			<input type="checkbox" class="check" id="fba1" name="fba1" value="10chicken" disabled>
			<label for="fba1"> 4pcs. Common Succulent</label><br>

			<input type="checkbox" class="check" id="fba2" name="fba2" value="fries" disabled>
			<label for="fba2"> 2pcs. Rare Cactus </label><br>

			<input type="checkbox" class="check" id="fba3" name="fba3" value="coke" disabled>
			<label for="fba3"> 5kg CNS Potting Mix</label><br>

			<input type="checkbox" class="check" id="fba4" name="fba4" value="sdish" disabled>
			<label for="fba4"> 1pc. Mikono Watering Bottle</label><br>

			<input type="checkbox" class="check" id="fba5" name="fba5" value="spdel" disabled>
			<label for="fba5"> 5pcs. Terracotta Pots</label><br>
			</div>

		</fieldset>





		<fieldset class="right" id="right2">

			
			<legend>PlantHub Bundles B</legend>

			<div class="checkbox1">
			<input type="checkbox" class="check" id="fbb1" name="fbb1" value="halo" disabled>
			<label for="fbb1"> 4pcs. Common Cactuses</label><br>

			<input type="checkbox" class="check" id="fbb2" name="fbb2" value="6chicken" disabled>
			<label for="fbb2"> 2pcs. Rare Succulents</label><br>

			<input type="checkbox" class="check" id="fbb3" name="fbb3" value="carbon" disabled>
			<label for="fbb3"> 5kg CNS Potting Mix</label><br>

			<input type="checkbox" class="check" id="fbb4" name="fbb4" value="fpfries" disabled>
			<label for="fbb4"> 1pc. Mikono Wattering Bottle</label><br>

			<input type="checkbox" class="check" id="fbb5" name="fbb5" value="mhpizza" disabled>
			<label for="fbb5"> 5pcs. Terracotta Pots</label><br>
			</div>

		</fieldset>



		<fieldset class="right" id="right3">

			
			<legend>PlantHub Bundles C</legend>

			<div class="checkbox1">
			<input type="checkbox" class="check" id="fbc1" name="fbb1" value="halo1" disabled>
			<label for="fbc1"> 2pcs. Rare Cactuses</label><br>

			<input type="checkbox" class="check" id="fbc2" name="fbb2" value="6chicken1" disabled>
			<label for="fbc2"> 2pcs. Rare Succulents</label><br>

			<input type="checkbox" class="check" id="fbc3" name="fbb3" value="carbon1" disabled>
			<label for="fbc3"> 5kg CNS Potting Mix</label><br>

			<input type="checkbox" class="check" id="fbc4" name="fbb4" value="fpfries1" disabled>
			<label for="fbc4"> 1pc. Mikono Wattering Bottle</label><br>

			<input type="checkbox" class="check" id="fbc5" name="fbb5" value="mhpizza1" disabled>
			<label for="fbc5"> 5pcs. Terracotta Pots</label><br>
			</div>

		</fieldset>

	
<!--------------------------------End of 2nd box----------------------------------->



<!-----------------------------------4th box--------------------------------------->

		<fieldset class="left" id="left2">
			<legend>Oder Details</legend>

			<div class="input-box">
				<label for="price">Price:</label>
				<input type="text" name="price" id="price" value="" readonly>
			</div>

			<div class="input-box">
				<label for="quantity">Quantity:</label>
				<input type="text" name="quantity" id="quantity" required> 
			</div>

			<div class="input-box">
				<label for="disamo">Discount<br>Amount:</label>
				<input type="text" name="discount_amount" id="disamo" readonly>
			</div>

			<div class="input-box">
				<label for="disedamo">Discounted<br>Amount:</label>
				<input type="text" name="discounted_amount" id="disedamo" readonly>
			</div>

			<div class="input-box">
				<label for="tbills">Total Bills:</label>
				<input type="text" name="total_bills" id="tbills" value='' readonly>
			</div>

			<div class="input-box">
				<label for="tquan">Total<br>Quantity:</label>
				<input type="text" name="total_quantity" id="tquan" readonly>
			</div>

			<div class="input-box">
				<label for="cgive">Cash Given:</label>
				<input type="text" name="cash_given" id="cgive" required>
			</div>

			<div class="input-box">
				<label for="Change">Change:</label>
				<input type="text" name="customer_change" id="change" readonly>
			</div>

		</fieldset>	

	
<!--------------------------------End of 4th box----------------------------------->



<!-----------------------------------6th box--------------------------------------->
		
			<fieldset class="left" id="left3">
				<table>
					<tr>
						<div class="inp">
						<td rowspan="2"><textarea name="order_summary" id="osum" style="resize: none; width: 364px; height: 185px; margin-top: 10px; background-color: #EEEEEE; " readonly></textarea></td>
						</div>

						<td>
							<div class="item">
								<center><img src="image/Lithops living stones.jpg" id="img1" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Titanopsis calcarea.jpg" id="img2" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Senecio vitalis.jpg" id="img3" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Sedum morganianum Donkey's Tail.jpg" id="img4" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Pachycereus marginatus Mexican Fence Post Specimen.jpg" id="img5" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Adromischus alstonii.jpg" id="img6" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Haworthia planifolia.jpg" id="img7" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Gymnocalycium stenogonum.jpg" id="img8" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Gymnocalycium stellatum asterium.jpg" id="img9" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Ferocactus emoryi.jpg" id="img10" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Euphorbia heptagona.jpg" id="img11" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Euphorbia gamkaensis.jpg" id="img12" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Euphorbia grandicornes.jpg" id="img13" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Euphorbia ferox.jpg" id="img14" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Dudleya pachyphytum.jpg" id="img15" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Echinofossulocactus ochoterenae.jpg" id="img16" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Echeveria cante Large.jpg" id="img17" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Kalanchoe houghtonii.jpg" id="img18" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Aeonium haworthii kiwi.jpg" id="img19" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Aloe brevifolia crocodile plant.jpg" id="img20" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/crassula mesembryanthemoides hispida.jpg" id="img21" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Dinteranthus microsperma.jpg" id="img22" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Dinteranthus wilmottianus.jpg" id="img23" class="orderimg"></center>
							</div>
							<div class="item">
								<center><img src="image/Faucaria tuberculosa soto.jpg" id="img24" class="orderimg"></center>
							</div>


						</td>
					</tr>
					<tr>
						<td style="position: absolute;bottom:25px; right: 63px;"><label><center>Order Image:</center></label></td>
					</tr>
				</table>

				
			</fieldset>
	
<!--------------------------------End of 6th box----------------------------------->


<!-----------------------------------3rd box--------------------------------------->
	
		<fieldset class="rig" id="right4">
		<legend>Plant Choices</legend>

<center>	
<div class="image">		
<table>
		

			<tr>
					<td><img src="image/Lithops living stones.jpg"></td>
					<td><img src="image/Titanopsis calcarea.jpg"></td>
					<td><img src="image/Senecio vitalis.jpg"></td>
					<td><img src="image/Sedum morganianum Donkey's Tail.jpg"></td>
					<td><img src="image/Pachycereus marginatus Mexican Fence Post Specimen.jpg"></td>
					<td><img src="image/Adromischus alstonii.jpg"></td>
			</tr>
			<tr>
					<td><input type="checkbox" class="check" id="checkbox1" name="checkbox1" value="">
					<label for="">Lithops</label></td>
					<td><input type="checkbox" class="check" id="checkbox2" name="checkbox2" value="">
					<label for="">T. Calcarea</label></td>
					<td><input type="checkbox" class="check" id="checkbox3" name="checkbox3" value="">
					<label for="">S. Vitalis</label></td>
					<td><input type="checkbox" class="check" id="checkbox4" name="checkbox4" value="">
					<label for="">Sedum MDK</label></td>
					<td><input type="checkbox" class="check" id="checkbox5" name="checkbox5" value="">
					<label for="">P. Marginatus</label></td>
					<td><input type="checkbox" class="check" id="checkbox6" name="checkbox6" value="">
					<label for="">A. Alstonii</label></td>
			</tr>

			<tr>
					<td><img src="image/Haworthia planifolia.jpg"></td>
					<td><img src="image/Gymnocalycium stenogonum.jpg"></td>
					<td><img src="image/Gymnocalycium stellatum asterium.jpg"></td>
					<td><img src="image/Ferocactus emoryi.jpg"></td>
					<td><img src="image/Euphorbia heptagona.jpg"></td>
					<td><img src="image/Euphorbia gamkaensis.jpg"></td>

			</tr>

			<tr>
					<td><input type="checkbox" class="check" id="checkbox7" name="checkbox7" value="">
					<label for="">H. Planifolia</label></td>
					<td><input type="checkbox" class="check" id="checkbox8" name="checkbox8" value="">
					<label for="">G. Stenogonum</label></td>
					<td><input type="checkbox" class="check" id="checkbox9" name="checkbox9" value="">
					<label for="">GS. Asterium</label></td>
					<td><input type="checkbox" class="check" id="checkbox10" name="checkbox10" value="">
					<label for="">F. Emoryi</label></td>
					<td><input type="checkbox" class="check" id="checkbox11" name="checkbox11" value="">
					<label for="">E. Heptagona</label></td>
					<td><input type="checkbox" class="check" id="checkbox12" name="checkbox12" value="">
					<label for="">E. gamkaensis</label></td>
			</tr>

			<tr>
					<td><img src="image/Euphorbia grandicornes.jpg"></td>
					<td><img src="image/Euphorbia ferox.jpg"></td>
					<td><img src="image/Dudleya pachyphytum.jpg"></td>
					<td><img src="image/Echinofossulocactus ochoterenae.jpg"></td>
					<td><img src="image/Echeveria cante Large.jpg"></td>
					<td><img src="image/Kalanchoe houghtonii.jpg"></td>
			</tr>

			<tr>
					<td><input type="checkbox" class="check" id="checkbox13" name="checkbox13" value="">
					<label for="">E. Grandicornes</label></td>
					<td><input type="checkbox" class="check" id="checkbox14" name="checkbox14" value="">
					<label for="">E. Ferox</label></td>
					<td><input type="checkbox" class="check" id="checkbox15" name="checkbox15" value="">
					<label for="">D. Pachyphytum</label></td>
					<td><input type="checkbox" class="check" id="checkbox16" name="checkbox16" value="">
					<label for="">E. Ochoterenae</label></td>
					<td><input type="checkbox" class="check" id="checkbox17" name="checkbox17" value="">
					<label for="">E. Cante(L)</label></td>
					<td><input type="checkbox" class="check" id="checkbox18" name="checkbox18" value="">
					<label for="">K. Houghtonii</label></td>
			</tr>

			<tr>
					<td><img src="image/Aeonium haworthii kiwi.jpg"></td>
					<td><img src="image/Aloe brevifolia crocodile plant.jpg"></td>
					<td><img src="image/crassula mesembryanthemoides hispida.jpg"></td>
					<td><img src="image/Dinteranthus microsperma.jpg"></td>
					<td><img src="image/Dinteranthus wilmottianus.jpg"></td>
					<td><img src="image/Faucaria tuberculosa soto.jpg"></td>
			</tr>

			<tr>
					<td><input type="checkbox" class="check" id="checkbox19" name="checkbox19" value="">
					<label for="">AH. Kiwi</label></td>
					<td><input type="checkbox" class="check" id="checkbox20" name="checkbox20" value="">
					<label for="">AB. Crocodile</label></td>
					<td><input type="checkbox" class="check" id="checkbox21" name="checkbox21" value="">
					<label for="">CM. Hispida</label></td>
					<td><input type="checkbox" class="check" id="checkbox22" name="checkbox22" value="">
					<label for="">D. Microsperma</label></td>
					<td><input type="checkbox" class="check" id="checkbox23" name="checkbox23" value="">
					<label for="">D. Wilmottianus</label></td>
					<td><input type="checkbox" class="check" id="checkbox24" name="checkbox24" value="">
					<label for="">F. Tuberculosa</label></td>
			</tr>

			<tr>
				<td><center><button class="button button1" id="cbill" name="cbill">CALCULATE<br>BILLS</button></center></td>
				<td><center><button class="button button1" id="change_btn" name="change_btn">CHANGE</button></center></td>
				<td><center><button class="button button4" id="new" name="new">NEW</button></center></td>
				<td><center><button class="button button3" id="remove_order" name="remove_order">REMOVE ORDER</button></center></td>
				<td><center><button class="button button2" type="submit" name="savebtn" id="savebtn">SAVE<br>TRANSACTIONS</button></center></td>
				<td><center><button class="button button5"  onclick="document.location='../posA_report.php'" >EXIT</button></center></td>

			
				
			</tr>

</table>
	</div>
</center>		
		</fieldset>
<!--------------------------------End of 3rd box----------------------------------->
</div>
</form>
</body>
</html>





<!-- gawa gawa lang  -->
<script>
$(document).ready(function(){
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });
});
</script>
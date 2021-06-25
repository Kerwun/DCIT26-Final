<!DOCTYPE html>
<html>
<head>
	<title>Point of Sale Report B</title>
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
<div class="container">
	<h2 style="margin-top: 30px;margin-bottom: 20px; color: #f2f2f3;">Point of Sale Report B</h2>


	<div class="button2">
	<button   onclick="document.location='index.php'" >Log Out</button>
	</div>

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
	<button onclick="document.location='Ordering_Application_2/index.php'" >Add New Report</button>
</center>
	</div>
</div>

</body>
</html>


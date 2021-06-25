<!DOCTYPE html>
<html>
<head>
	<title>Payroll Report</title>
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
	<h2 style="margin-top: 30px;margin-bottom: 20px; color: #f2f2f3;">Payroll Report</h2>


	<div class="button2">
	<button   onclick="document.location='payroll_listview.php'" >Back to Payroll List</button>
	</div>

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
	

</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>User Listview</title>
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
		window.open("userlist_update.php?id=" + id, "_self"); // incompletes*******************************************************
	});
});
</script>

<body>
<div class="container">
	<h2 style="margin-top: 30px;margin-bottom: 20px; color: #f2f2f3;">User List</h2>
	 <input type="text" name="search" id="search" onkeyup="myFunction()" placeholder="Search for Employee Name..." title="Type in a name" style="float: right;">
	 <div class="button2">
	<button   onclick="document.location='index.php'" >Log Out</button>
	</div>
	<table id="myTable" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Employee Number</th>
		        <th>Employee Name</th>
		        <th>Username</th>
		        <th>User Type</th>
		        <th>User Status</th>
		        <th>Department</th>
		        <th>Designation</th>
			</tr>
		</thead>
		<tbody>
			<?php
        include 'db_connection.php';
        $conn = OpenCon();

        $sql = "SELECT user_accttble1.user_id, user_accttble1.employee_id, personal_infotbl.first_name, personal_infotbl.middle_name, personal_infotbl.last_name, user_accttble1.username, user_accttble1.user_type, user_accttble1.user_status, personal_infotbl.department, personal_infotbl.designation FROM user_accttble1 INNER JOIN personal_infotbl ON user_accttble1.employee_id=personal_infotbl.emp_number";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)  {
          while($row = $result->fetch_assoc()){
            echo "<tr row_id='".$row['employee_id']."'><td>".$row["employee_id"]."</td></td>"."<td>".$row["first_name"]." ".$row["middle_name"]." ".$row["last_name"]."</td>"."<td>".$row["username"]."</td>"."<td>".$row["user_type"]."</td>"."<td>".$row["user_status"]."</td>"."<td>".$row["department"]."</td>"."<td>".$row["designation"]."</td>";
          }
          echo "</table>";
        }
        else{
          echo "0 result";
        }
        $conn->close();
        ?>
		</tbody>
		
	</table>
	
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
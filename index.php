<?php 
include_once("db_connect.php");
include("export_data.php");
include("header.php"); 
?>
<title>Demo Export Data to Excel with PHP and MySQL</title>
<?php include('container.php');?>
<div class="container">	
	<h2>Export Data to Excel with PHP and MySQL</h2>
	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">					
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Export to excel</button>
			</form>
		</div>
	</div>				  
	<table id="" class="table table-striped table-bordered">
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>	
			<th>Designation</th>
			<th>Address</th>
		</tr>
		<tbody>
			<?php foreach($developer_records as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['name']; ?></td>
			   <td><?php echo $developer ['gender']; ?></td>
			   <td><?php echo $developer ['age']; ?></td>   
			   <td><?php echo $developer ['designation']; ?></td>
			   <td><?php echo $developer ['address']; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>	
</div>
<?php include('footer.php');?>





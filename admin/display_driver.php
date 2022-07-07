<?php include 'dbConfig.php'; ?>
<?php include 'link.php'; ?>
<?php 
$q=mysqli_query($con,"SELECT * FROM driver");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Driver exists !!!</h2><br>";
// echo '<a href="index.php?page=add_group" class="col-md-2 btn btn-primary">Add New Group?</a>';
}
else
{
?>
<script>
	function DeleteGrop(id)
	{
		if(confirm("You want to delete this Group ?"))
		{
		window.location.href="delete_driver.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC"></h2>
<div class="col-15">
    		<div class="card mt-5">
                <h2 class="card-header">All Drivers</h2>
		        <div class="card-body">
		        	<form class="needs-validation row"  action="index.php?page=search_group" novalidate method="post">
		<input type="text"  placeholder="Search Group" name="searchGroup" class="col-md-4 form-control" required />
		<input type="submit" value="Search Group" name="sub" class="col-md-2 btn btn-success" />
	</form>
</div>
</div>
</div>
<div class="col-15">
            <!-- <div class="card mt-5">
            	<a href="index.php?page=add_group" class="col-md-2 btn btn-primary">Add New Group</a> -->
                <div class="card-body table-responsive">
	
	<table id="dom-jqry" class="table table-striped text-cente table-bordered">
	<tr class="active">
		<th>S/No</th>
		<th>Driver Name</th>
		<th>Staff Id</th>
		<th>License No</th>		
		<th>Phone Number</th>
		<th>Gender</th>
		<th>Date of Creation</th>
	
		<?php // if($_SESSION['login_type'] == 1): ?>	

		<th>Delete</th>
		
	</tr>
		<?php 
$q=mysqli_query($conn,"SELECT * FROM driver");
$rr=mysqli_num_rows($q);
if($rr)
{

$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['driver_name']."</td>";
echo "<td>".$row['staff_id']."</td>";
echo "<td>".$row['license_id']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['status']."</td>";
 echo "<td>".$row['date']."</td>";
?>

<td><a href="javascript:DeleteGrop('<?php echo $row['group_id']; ?>')" style='color:Red'><span class='fa fa-trash'></span></a></td>



<?php 
echo "</tr>";
$i++;
}
}
		?>
		
</table>
<?php }?>
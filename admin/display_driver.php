<?php include 'dbConfig.php'; ?>
<?php 
$q=mysqli_query($conn,"SELECT * FROM driver");
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
		<th>Group Leader</th>
		<th>Reg No</th>		
		<th>Meeting Day</th>
		<th>Total Member</th>
		<th>Date of Creation</th>
		<th>Address</th>

		
		<?php // if($_SESSION['login_type'] == 1): ?>	

		<th>Delete</th>
		
	</tr>
		<?php 
$q=mysqli_query($conn,"SELECT * FROM groups");
$rr=mysqli_num_rows($q);
if($rr)
{

$i=1;
while($row=mysqli_fetch_assoc($q))
{

// echo "<tr>";
// echo "<td>".$i."</td>";
// echo "<td>".$row['group_name']."</td>";
// echo "<td>".$row['group_leader']."</td>";
// echo "<td>".$row['registration_number']."</td>";
// echo "<td>".$row['meeting_day']."</td>";
// echo "<td>".$row['group_total_members']."</td>";
// echo "<td>".$row['group_creation_date']."</td>";
//  echo "<td>".$row['address']."</td>";
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
<?php 
extract($_POST);
if(isset($save))
{

$sql=mysqli_query($conn,"SELECT * FROM vehicle WHERE d_name='$d_name' or staff_id='$staff_id");
$r=mysqli_num_rows($sql);
		if($r!=true)
		{
		mysqli_query($conn,"INSERT INTO driver VALUES('',',now())");
		
$err="<font color='blue'>Congrates new Driver added successfully</font>";
		}
		
		else
		{

	$err="<font color='red'>This Driver name or Registration number already exists choose diff Driver name</font>";
		
	
	}
}

?>
<link rel="stylesheet" href="../admin/add_vehicle.css">
  <div class="container">
    <div class="title"><b>Add vehicle</b></div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Vehicle</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Home <address></address></span>
            <input type="text" placeholder="Enter home address" required>
          </div>
          <div class="input-box">
            <span class="details">vehicle type</span>
            <input type="text" placeholder="Enter vehicle's type" required>
          </div>
          <div class="input-box">
            <span class="details">plate Number</span>
            <input type="text" placeholder="Enter plate Number" required>
          </div>
          <div class="input-box">
            <span class="details">Model</span>
            <input type="text" placeholder=" enter model" required>
          </div>
          <div class="input-box">
            <span class="details">Engine Number</span>
            <input type="text" placeholder="enter engine number" required>
          </div>
          <div class="input-box">
            <span class="details">manufactured by</span>
            <input type="text" placeholder="manufactured by" required>
          </div>
          <div class="input-box">
            <span class="details">Make</span>
            <input type="text" placeholder="enter make" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="reigster vehicle">
        </div>
      </form>
    </div>
  </div>

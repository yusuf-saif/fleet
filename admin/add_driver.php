<?php 
extract($_POST);
if(isset($save))
{

$sql=mysqli_query($conn,"SELECT * FROM driver WHERE group_name='$g_name' or registration_number='$reg_no'");
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
<link rel="stylesheet" href="../admin/add_driver.css">
  <div class="container">
    <div class="title"><b>Add driver</b></div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Driver's licence</span>
            <input type="text" placeholder="Enter your licence number" required>
          </div>
          <div class="input-box">
            <span class="details">Home address</span>
            <input type="text" placeholder="Enter your home address" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Staff ID</span>
            <input type="text" placeholder="Enter your staff ID" required>
          </div>
          <div class="input-box">
            <span class="details">Driver's status</span>
            <input type="text" placeholder="enter your status" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">others</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Add driver">
        </div>
      </form>
    </div>
  </div>
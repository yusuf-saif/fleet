<?php 
<<<<<<< HEAD
// extract($_POST);
// if(isset($save))
// {

// $sql=mysqli_query($conn,"SELECT * FROM driver WHERE d_name='$d_name' or staff_id='$staff_id");
// $r=mysqli_num_rows($sql);
// 		if($r!=true)
// 		{
// 		mysqli_query($conn,"INSERT INTO driver VALUES('',',now())");
		
// $err="<font color='blue'>Congrates new Driver added successfully</font>";
// 		}
		
// 		else
// 		{

// 	$err="<font color='red'>This Driver name or Registration number already exists choose diff Driver name</font>";
		
	
// 	}
include_once '../connection.php';
extract($_POST);
if(isset($save))
{

$sql=mysqli_query($conn,"SELECT * FROM driver	 WHERE d_name='$d_name', staff_id=");
$r=mysqli_num_rows($sql);
		if($r!=true)
		{
		mysqli_query($conn,"INSERT INTO sav VALUES('','$member_id','$amount',now())");
=======
include'dbConfig.php';
// extract($_POST);
// if(isset($save))
// {
  if(isset($_POST['submit'])) {
$sql=mysqli_query($db,"SELECT * FROM driver WHERE d_name='$d_name' or staff_id='$staff_id");
$r=mysqli_num_rows($sql);
		if($r!=true)
		{
		mysqli_query($db,"INSERT INTO driver VALUES('','d_name','staff_id','license_id','phone', now())");
>>>>>>> 5d6f119e5d2c99ae966760c030ef3cdb4fcbe191
		
$err="<font color='blue'>Congrates new Savings added successfully</font>";
		}
		
		else
		{

	$err="<font color='red'>This Savings Member already exists choose diffrent Member</font>";
		
	
	}
}
}

?>
<link rel="stylesheet" href="../admin/add_driver.css">
  <div class="container">
    <div class="title"><b>Add driver</b></div>
    <div class="content">
      <form method="POST" novalidate>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Driver Full Name</span>
            <!-- <input type="text" placeholder="Enter Driver's Name" required> -->
            <input type="text" name="d_name" pattern="[a-z A-Z]*" class="form-control" placeholder="Enter Driver's Name" required/>
          </div>
          <div class="input-box">
            <span class="details">Staff Id</span>
            <!-- <input type="text" placeholder="Enter staff id" required> -->
            <input type="text" name="staff_id"  class="form-control" placeholder="Staff Id" required/>
          </div>
          <div class="input-box">
            <span class="details">License Id</span>
            <!-- <input type="text" placeholder="Enter staff id" required> -->
            <input type="text" name="license_id"class="form-control" placeholder="license id" required/>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="phone" placeholder="Enter your number" required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Driver's status</span>
            <!-- <label for="cars">Driver status:</label> 
            <select name="ds" id="ds">
              <option value="av">Active</option>
              <option value="inv">inactive</option>
            </select>
           <input type="text" name="ds" placeholder="enter your status" required> 
          </div>
        </div>
         <div class="input-box">
          <span class="details">Gender</span>
          Male <input type="radio" name="gen" value="m" required/>
	        Female <input type="radio" name="gen" value="f" />
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
        </div>  -->
        <div class="button">
          <input type="submit" value="submit">
        </div>
      </form>
    </div>
  </div>
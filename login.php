<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fleet management system</title>
    
<?php include('header.php'); ?>
<?php include('db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>
</head>
<link rel="stylesheet" href="index.css">
<body>
    <form action="dashboard.html" method="" name="loginform">
        <fieldset>
            <legend><b>LOGIN</b></legend>
            <P>fleet management system</P>
        <label for="username">USERNAME;</label><br>
        <input id="username" type="text" name="username" placeholder="Enter username" required><br>
        <label for="password">PASSWORD<span class="req"><sup></sup></span></label><br>
        <input id="password"type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="submit" value="LOGIN"
         class="default btnhover">
    </form>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='index.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>
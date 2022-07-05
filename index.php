<?php
session_start();

    include('connection.php');

        extract($_POST);
    if(isset($login))
    {
        $passw = hash('sha256', $_POST['pass']);
    // $passw = hash('sha256',$p);
    // echo $passw;exit;
    function createSalt()
    {
        return '2123293dsj2hu2nikhiljdsd';
    }
    $salt = createSalt();
    $passw = hash('sha256', $salt . $passw);
        $que=mysqli_query($conn,"SELECT * FROM admin WHERE user='$email' and pass='$passw'");
        $row=mysqli_num_rows($que);
        if($row)
            {   
                $_SESSION['admin']=$email;
                header('location:admin');
            }
        else
            {
                $err="<font color='red'>Wrong Email or Password !</font>";
            }
    }
?>
<html class="no-js" lang="en">

       
<style>
.footer1 {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #2c71da;
  color: white;
  text-align: center;
}
</style>
        <footer>
            <div class="footer1">
                <p style="color:white"><marquee behavior="alternate" scrollamount="1">Developed by <b>KSL</b>        |  <b>copyright @ KSL 2022</b></marquee></p>
            </div>
        </footer>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FLEET SYSTEM LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    
    <div id="preloader">
        <div class="loader"></div>
    </div>
    
    
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post">
                    <div class="login-form-head">
                        <h4> Fleet System Login</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Usename</label>
                            <input type="text" id="exampleInputEmail1" name="email">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="pass">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                       
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit"  name="login">Login <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
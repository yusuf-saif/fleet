<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@300&display=swap" rel="stylesheet">
<style>
*{
	font-family: 'Anek Malayalam', sans-serif;
}
/* .logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;font-family: 'Anek Malayalam', sans-serif;font-family: 'Anek Malayalam', sans-serif;font-family: 'Anek Malayalam', sans-serif;font-family: 'Anek Malayalam', sans-serif;
    border-radius: 50% 50%;
    color: black
} */
.nma{
	color: #FFBC80;
	text-align: center;
	height:auto;
	font-size:1.5em;
	font-weight: bold;
	/* font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
}
nav{
  padding:0;
  background: #F7ECDE;
  
  
}
</style>
<header>
<nav class="navbar navbar-light">
  <div class="container-fluid mt-1 mb-1">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<!-- <div class="logo">
  				<span class="fa fa-money-bill-wave"></span>
  			</div> -->
  		</div>
      <div class="col-md-9 float-right text-white">
        <h2 class="nma">Fleet Management System</h2>
      </div>
	  	<div class="col-md-2 float-left text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>
</header>
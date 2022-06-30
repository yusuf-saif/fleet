<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@300&display=swap" rel="stylesheet">
<style>
	/* nav{
  background: #F7ECDE;
  color: #fff;
  height: 40%; */
  body {
	font-family: 'Anek Malayalam', sans-serif;
}

#sidebar {
  width: 10px;
  position: fixed;
  z-index: 1;
  top: 20px;
  left: 10px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #000;
  display: block;
}

.sidenav a:hover {
  color: #fff;
}

.main {
  margin-left: 140px; /* Same width as the sidebar + left position in px */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<!-- <nav id="sidebar"class='mx-lt-2 bg-secondary'> -->
	<nav id="sidebar">
		
		<div class="sidenav">

			
				<a href="index.php?page=display_driver" class="nav-item nav-driver"><span class='icon-field'><i class="fa fa-user-friends"></i></span>Drivers</a>
                <a href="index.php?page=display_vehicle" class="nav-item nav-vehicle"><span class='icon-field'><i class="fa fa-car"></i></span>Vehicle</a>				
				

				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Create  Users</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>

<?php include 'header.php'; ?>

            <div class="main-content-inner">
                <div class="row">
                	<?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {	
			if($page=="add_vehicle")
			{
				include('add_vehicle.php');
			
			}
			if ($page=="add_driver") 
			{
				include('add_driver.php');
			}
			
			
			
		  }
		  
		//   else
		//   {
		//   include('dashboard.php');
		 
		//  }
		  ?>
				</div>
			</div>
<?php include'footer.php' ?>

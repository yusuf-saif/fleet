<?php include 'header.php'; ?>

            <div class="main-content-inner">
                <div class="row">
                	<?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="add_group")
			{
				include('add_group.php');
			
			}
		  	if($page=="display_group")
			{
				include('display_group.php');
			
			}
			if($page=="search_group")
			{
				include('search_group.php');
			
			}
			
			if($page=="update_group")
			{
				include('update_group.php');
			
			}
			if($page=="display_member")
			{
				include('display_member.php');
			
			}
			if($page=="search_member")
			{
				include('search_member.php');
			
			}
			
			if($page=="add_group_member")
			{
				include('add_group_member.php');
			
			}
			
			if($page=="update_group_member")
			{
				include('update_group_member.php');
			
			}
			
			if($page=="add_loan")
			{
				include('add_loan.php');
			
			}
			
			if($page=="display_loan")
			{
				include('display_loan.php');
			
			}
			if($page=="report_display_loan")
			{
				include('report_display_loan.php');
			
			}
			
			if($page=="search_loan")
			{
				include('search_loan.php');
			
			}
			
			if($page=="update_loan_record")
			{
				include('update_loan_record.php');
			
			}
			
			if($page=="display_payment_history")
			{
				include('display_payment_history.php');
			
			}
			
			if($page=="add_payment_history")
			{
				include('add_payment_history.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			if($page=="report_member")
			{
				include('report_member.php');
			
			}
			
			
			
			
			
			
		  }
		  
		  else
		  {
		 include('dashboard.php');
		 
		 }
		  ?>
				</div>
			</div>
<?php include 'footer.php'; ?>
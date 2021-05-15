
<style>
</style>
<nav id="sidebar" class='mx-lt-5 bg-dark'>
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home" style="padding: 20px; "><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=applications" class="nav-item nav-applications" style="padding: 20px"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Applications</a>	
	
				<a href="index.php?page=recruitment_status" class="nav-item nav-recruitment_status" style="padding: 20px"><span class='icon-field'><i class="fa fa-th-list"></i></span> Status Category</a>		
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users" style="padding: 20px"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>

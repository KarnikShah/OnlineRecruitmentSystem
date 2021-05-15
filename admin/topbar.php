<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>

<nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<span class="fa fa-hands-helping"></span>
  			</div>
  		</div>
      <div class="col-md-5 float-left text-white" style="margin-top:6px; font-size:22px;">
        <large><b>Online Recruitment System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white" style="margin-top:11px; font-size:16px;">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>
<?php
include("header.php");
?>
<body>
<?php
include("navbar.php");
?>

<!--Main content -->
<div class="container-fluid" id="main-content" style="margin-left: 0px; padding-left: 0px;" >
	<div class="container-fluid" id="main-content-content" style="margin-left: 0px; padding-left: 0px;" >
	
	<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];
			include("pages/$page.php");
		}else{
			?><img src="images/banner.jpg" width=100% height="500" ></img><?php
		}
	?>
	
	</div>
</div>
<!--Main content ends -->

<!--Secondary content -->
<div class="container-fluid" id="secondary-content">
<?php
	if(isset($_GET['page'])){
		if(strcmp($_GET['page'], "category") == 0 ){
			include("pages/categorySecContent.php");
		}
	}else{
		include("indexSendCont.php");

	}
?>
</div>
<!--Secondary content ends -->


</body>

<!--Footer -->
<div class="container-fluid" id="footer">
<?php
	include("footer.php");
?>
</div>
<!--Footer ends -->

</html>


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
			echo "not set";
		}else{
			?><img src="images/banner.jpg" width="1350" height="500" ></img><?php
		}
	?>
	
	</div>
</div>
<!--Main content ends -->

<!--Secondary content -->
<div class="container-fluid" id="secondary-content">
secondary content
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


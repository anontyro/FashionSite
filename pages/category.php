<?php 
	//checks to see if the stockID has been set, if not will just load landing images
	if(!isset($_GET['stockID'])){
		echo "main pictures and such will go here for ".$_GET['categoryID'];
	}else{

		$item_sql = "SELECT * FROM stock WHERE stockID=".$_GET['stockID'];
		if($item_query=mysqli_query($dbconnect, $item_sql)){
			$item_rs = mysqli_fetch_assoc($item_query);
		?>
		<div class="col-xs-2"></div>
		<div class="col-xs-4">
		<h2><?php echo $item_rs['name']; ?></h2>
		<p>$<?php echo $item_rs['price']; ?></p>
		<p><?php echo $item_rs['description']; ?></p>
		</div>

		<div class="col-xs-4">
		image goes here
		</div>
		<div class="col-xs-2"></div>
		<?php

		}

		}

	

?>
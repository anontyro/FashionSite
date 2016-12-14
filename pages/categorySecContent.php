<?php 
	//if categoryID is not set in the URL will redirect back to the homepage
	if(!isset($_GET['categoryID'])){
		header("Location:index.php");
	}
	$stock_sql="SELECT stock.stockID, stock.name, stock.price, category.name AS catname FROM stock JOIN category ON stock.categoryID=category.categoryID WHERE stock.categoryID=".$_GET['categoryID'];

	if($stock_query = mysqli_query($dbconnect,$stock_sql)){
		$stock_rs = mysqli_fetch_assoc($stock_query);
	}

	if(mysqli_num_rows($stock_query)==0){
		echo "Sorry we currently have no items in stock";
	} else{ ?>
		<h2><center><?php echo $stock_rs['catname']."<br>"; ?></center></h2>
		<div class="row" id="category-items">
		<?php 
			do{
				?>
				<div class="col-xs-2" id="category-items-item">
					<a href="index.php?page=category&categoryID=<?php echo $_GET['categoryID']; ?>&stockID=<?php echo $stock_rs['stockID']; ?>"><p><?php echo $stock_rs['name']; ?></p></a>
					<p>$<?php echo $stock_rs['price']; ?></p>
				</div>

				<?php
			}while ($stock_rs=mysqli_fetch_assoc($stock_query));

		?></div> 


		<?php

		


	}

?>
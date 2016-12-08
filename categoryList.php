<?php 
	$cat_sql="SELECT * FROM category";
	$cat_query=mysqli_query($dbconnect, $cat_sql);
	$cat_rs=mysqli_fetch_assoc($cat_query);

	do{ ?>
		<!--Links created from the database here -->
	<li><a href="index.php?page=category&categoryID=<?php echo $cat_rs['categoryID'] ?>">
	<?php echo $cat_rs['name']; ?></a></li>
	
	<?php
	}while ($cat_rs = mysqli_fetch_assoc($cat_query))
?>
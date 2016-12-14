<?php 

//
function getFromDB($value){
	include("dbconnect.php");
	$sql = "SELECT * FROM $value";
	$sql_query = mysqli_query($dbconnect, $sql);
	$sql_rs = mysqli_fetch_assoc($sql_query);

	return $sql_rs;
}

//queries the database table maincontent for the content to fill the corisponding areas
function getContent($contentVal){
	include("dbconnect.php");
	 $content = "SELECT `maincontent` FROM `textcontent` WHERE`textname`='$contentVal'";
	 $content_query = mysqli_query($dbconnect, $content);
	 $content_rs = mysqli_fetch_array($content_query);

	 return $content_rs;

}

//select all the stock items belonging to a selected category
function getCategoryContent($catID){
	include("dbconnect.php");
	$stock_sql="SELECT stock.stockID, stock.name, stock.price, category.name AS catname FROM stock JOIN category ON stock.categoryID=category.categoryID WHERE stock.categoryID=$catID";

	if($stock_query = mysqli_query($dbconnect,$stock_sql)){
		$stock_rs = mysqli_fetch_assoc($stock_query);
	}

	if(mysqli_num_rows($stock_query)==0){
		echo "Sorry we currently have no items in stock";
	} else{

		
		return $stock_rs;

	}
}

?>
<?php  
	$cn=mysql_connect('localhost','root','');  
	if ($cn){  
	mysql_select_db('invoice_db',$cn);  
	}

	$productID =  $_POST['id'];

	$getDetails = "SELECT * FROM product_details WHERE id = '".$productID."'";
	$getDetailsQ = mysql_query($getDetails);
	$getDetailsF = mysql_fetch_assoc($getDetailsQ);
	$name = $getDetailsF['name'];
	$price = $getDetailsF['price'];
	
	$productDetails = array('name' => $name, 'price' => $price);
	echo json_encode($productDetails);
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
	<style type="text/css">
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}
	span a{
		border-left:2px solid gray;
		margin-left:10px;
		padding-left:10px;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}


	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		padding: 15px;
	}

	button{
		font-size: 14pt;
		margin-top: 15px;
		width: 150px;
		margin-bottom:20px;	
	}
	</style>
</head>
<body>
<body>
	<div id="container">
	<h1>Edit Product <?= $product['id'] ?></h1>
	<div id="body">
		<form method="post" action="/products/update">
			<input type="hidden" name="idnumber" value="<?= $product['id'] ?>">
			<label>Name<br>&nbsp<input type="text" name='name' value="<?= $product['name'] ?>" size="37"></label><br>
			<label>Description<br>&nbsp<input type="text" size='65' name='descr' value="<?= $product['description'] ?>"></label><br>
			<label>Price<br>$<input type="number" name='price' value="<?= $product['price'] ?>" step='any' min='0'></label><br>
			<button type="submit" value="submit">Update</button>
		</form>
	</div>
	<a href ="/products/show_product/<?= $product["id"] ?>">Show</a><span><a href="/">Back</a></span>
</div>
</body>
</body>
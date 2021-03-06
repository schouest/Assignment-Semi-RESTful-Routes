<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Show Product Info</title>
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

	p {
	font-size: 15px;
	line-height: 45px;
	padding: 0px 10px;
	margin: 20px 0px 10px;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		padding: 15px;
	}
	</style>
</head>
<body>
	<div id="container">
	<h1>Product <?= $product['id']?></h1>
	<div id="body">
		<p>Name: <?= $product['name']?></p>
		<p>Description: <?= $product['description']?></p>
		<p>Price: $<?= $product['price']?></p>
	</div>
	<a href ="/products/edit_product/<?= $product['id']?>">Edit</a><span><a href="/">Back</a></span>
</div>
</body>
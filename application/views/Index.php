<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Semi Restful Route Demo</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

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

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	table{
	border: 1px black solid;
	margin-top:20px;
	}
	tr{
	outline: 1px black;
	outline-style: ridge;
	}
	th, td {
    padding: 15px;
}
	form a{
	border-right:1px solid black;
	padding-right:3px;
	}
	form button{
	border:none;	
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	
	<div id="body">
		<!-- <a href="products/new_product">TEST</a> -->
		<table>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Actions</th>	
			</tr>

<?php foreach ($product as $entry) { //TODO: table form navigation
	?><tr><td style="background-color:darkgrey"><?php
			echo $entry['name'];
			$id = $entry['id'];
			?></td><td style="background-color:lightgrey"><?=
 			$entry['description'];
			?></td><td style="background-color:lightgrey"><?=
			$entry['price'];
			?></td><td style="background-color:grey">
			<form action='' method="post">
			<a href="<?= "localhost/courses/destroy/$id" ?>">Show</a>
			<a href="<?= "localhost/courses/destroy/$id" ?>">Edit</a>
			<button>Remove</button>
			</form>			
</td></tr><?php }
?>

		</table>
		<p><a href="addnew">Add Product</a></p>
	</div>
</div>

</body>
</html>
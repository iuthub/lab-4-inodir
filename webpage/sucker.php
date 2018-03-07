<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>


	<body>
		<h1>Thanks, sucker!</h1>

		<?php
			 	$name=$_REQUEST["name"];
			  	$section =$_REQUEST["section"];
			    $Creditnumber=$_REQUEST["Creditnumber"];
			    $Credittype=$_REQUEST["CreditCard"];
			?>

			<p>Your information has been recorded</p>

			<dl>
				<dt>Name</dt>
				<dd><?=$name ?></dd>

				<dt>Section</dt>
				<dd><?=$section ?></dd>

				<dt>Credit Card</dt>
				<dd><?=$Creditnumber ?>  (<?=$Credittype ?>)</dd>
			</dl>
	</body>
	</html>
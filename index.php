<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>
<?php include("includes/authenticate.php");?>
<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Welcome to this demo.</h2>
	<p>This is a PHP sample on how to use the REST Api</p>

	<p>
	You can check the documentation here (developpers.assurbox.net)	
	</p>
	
	<ul>
		<li><a href="systemstatus.php">Check the system</a></li>
		<li><a href="requestlist.php">Check your requests</a></li>
		<li><a href="requestcard.php">Create a request</a></li>
	</ul>
	
</div>

<?php include("includes/footer.php");?>

</body>
</html>
<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>API system check.</h2>
	<p>Check if the system is up and running</p>

	<p>
	You can check the documentation here (developpers.assurbox.net)	
	</p>
	
	<?php
require_once(__DIR__ . '/vendor/autoloader.php');

include "Swagger/Client/Configuration.php";
include "Swagger/Client/HeaderSelector.php";
include "Swagger/Client/ObjectSerializer.php";
include "Swagger/Client/ApiException.php";
include "Swagger/Client/Api/SystemCheckApi.php";


print Swagger\Client\Configuration::toDebugReport();

//https://github.com/swagger-api/swagger-codegen/blob/master/samples/client/petstore/php/test.php

// to change temp folder path
// Swagger\Client\Configuration::getDefaultConfiguration()->setTempFolderPath('/var/tmp/php/');
// // to enable logging
// Swagger\Client\Configuration::getDefaultConfiguration()->setDebug(true);
// Swagger\Client\Configuration::getDefaultConfiguration()->setDebugFile('/var/tmp/php_debug.log');

echo "<br/><hr/><br/>";

$apiInstance = new Swagger\Client\Api\SystemCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | input message

try {
    $result = $apiInstance->echoGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemCheckApi->echoGet: ', $e->getMessage(), PHP_EOL;
}
?>
	
	<?php
// define variables and set to empty values
$paramcheck = $paramcheckErr = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["paramcheck"])) {
		$paramcheckErr = "Param is required";
	  } else {
		$paramcheck = $_POST["paramcheck"];
				
		// CALL API and get restult HERE
				
				
		}
	  }
  
  
  ?>
  
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	
		<div class="form-group">
			<label class="control-label">Parameter
				<input type="text" class="form-control" name="paramcheck" value="<?php echo $paramcheck;?>">
				</label>
				<span class="error">* <?php echo $paramcheckErr;?></span>
		</div>
	

		
		<input type="submit" class="btn btn-primary" name="submit" value="Test Api">  
		
	
	</form>

<br/>
<?php
if($paramcheck != ""){
	echo "<h2>Your Input:</h2>";
	echo $paramcheck;
}
?>
	
</div>

<?php include("includes/footer.php");?>

</body>
</html>
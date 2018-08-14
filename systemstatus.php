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
	<h2>API system check.</h2>
	<p>Check if the system is up and running</p>

	<p>
	You can check the documentation here (developpers.assurbox.net)	
	</p>
	
	<?php
	// exemple swagger	
	//https://github.com/swagger-api/swagger-codegen/blob/master/samples/client/petstore/php/test.php
	
	// show error reporting
ini_set('display_errors', 1);
error_reporting(~0);


require_once(__DIR__ . '/vendor/autoloader.php');

// doesn't work ...
require_once(__DIR__ . '/autoload.php');



include "Swagger/Client/Configuration.php";
include "Swagger/Client/HeaderSelector.php";
include "Swagger/Client/ObjectSerializer.php";
include "Swagger/Client/ApiException.php";
include "Swagger/Client/Api/SystemCheckApi.php";
include "Swagger/Client/Api/IdentityApi.php";

echo "<h5>System check</h5>";


$httpClient=new GuzzleHttp\Client(['headers' => ['Authorization' => 'Bearer '.$bearertoken]]);

$apiInstance = new Swagger\Client\Api\SystemCheckApi($httpClient);
 
$id = "id_example"; // string | input message

try 
{
    $result = $apiInstance->echoGet($id);
    echo "--- success : ";
	print_r($result);	
} 
catch (Exception $e) 
{
    echo 'Exception when calling SystemCheckApi->echoGet: ', $e->getMessage(), PHP_EOL;
}


// test 2
$identityapiInstance = new Swagger\Client\Api\IdentityApi($httpClient);

 

try {
    $result = $identityapiInstance->userWhoAmI();
    echo "--- success : ";
	print_r($result);
	
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->userWhoAmI: ', $e->getMessage(), PHP_EOL;
}
?>

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
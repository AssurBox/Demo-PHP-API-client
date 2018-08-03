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
	// exemple swagger	
	//https://github.com/swagger-api/swagger-codegen/blob/master/samples/client/petstore/php/test.php
	
	
require_once(__DIR__ . '/vendor/autoloader.php');

// show error reporting
ini_set('display_errors', 1);
error_reporting(~0);

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
 //Swagger\Client\Configuration::getDefaultConfiguration()->setDebug(true);
// Swagger\Client\Configuration::getDefaultConfiguration()->setDebugFile('/var/tmp/php_debug.log');

echo "<br/><hr/><br/>";


/////

// $client_id = 'HMLR4melrdXxaT5G4k3X3Q==';
// $client_secret = 'vYy2FVXqJhaivLZqlAa6uHHgHHolPDWMhhGs52WIM5V/98pO8jRIRsKOgOC+zQzyIDKRsUj7rbwAPLNNoMb7Xg==';


 $client_id = '73n5JXra2YtjtCsM4S9Brw==';
 $client_secret = 'ODy8BUGdxKm5rhKp6DH/aJkpVanu1vfpr+4WjgOCEWvlmuH78c8t8HTnRAJxoKae0EhNgTpuhEczRQ68Deb0Wg==';

//$redirect_uri= "http://localhost:8080/callback.php";
//$authorization_code = $_GET['code'];
// if(!$authorization_code){
    // die('something went wrong!');
// }
$url = 'https://devslot.assurbox.net/oauth/token';


////

$myvars = 'client_id=' . $client_id . '&client_secret=' . $client_secret .'&grant_type=client_credentials';
//echo "<br/>";
//echo $myvars;

 $data = array(
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'grant_type' => 'client_credentials'
  );
  
  //echo "<br/>";
  $postdata = http_build_query($data); // avec l'encodage ca marche
  //echo $postdata;
   // echo "<br/>";
 
//https://stackoverflow.com/questions/3080146/post-data-to-a-url-in-php
//http://www.php.net/curl_setopt
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

//var_dump($response);

//echo "<br/> JSON :<br/>"; 

$jsontoken=json_decode($response);
//var_dump($jsontoken);

$bearertoken = $jsontoken->access_token;

// echo "<br/> Access Token :<br/>"; 

// echo $bearertoken;

// echo "<br/>"; 

/////

// test deacticate ssl check
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken($bearertoken);

echo "<h5>Swagger config</h5>";
print Swagger\Client\Configuration::toDebugReport();

echo "<h5>system check</h5>";

//https://markoivancic.from.hr/set-the-authorization-bearer-header-in-guzzle-http-client/
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', $bearertoken);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

 // $config = $apiInstance->getConfig();
 // $config->setApiKeyPrefix('Authorization','Bearer ');
 // $config->setAccessToken($bearertoken);

$httpClient=new GuzzleHttp\Client();

$apiInstance = new Swagger\Client\Api\SystemCheckApi($httpClient,$config);

//$apiInstance = new Swagger\Client\Api\SystemCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
  //  new GuzzleHttp\Client());

 // $config = $apiInstance->getConfig();
 // $config->setApiKeyPrefix('Authorization','Bearer ');
 // $config->setAccessToken($bearertoken);

 //var_dump($config);
 
$id = "id_example"; // string | input message

//$apiInstance->getApiClient()->addDefaultHeader("Authorization", 'Bearer '.$bearertoken);

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
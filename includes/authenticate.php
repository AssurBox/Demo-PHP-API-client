

<?php

session_start();

if (!isset($_SESSION['ASSURBOX_BEARERTOKEN'])) 
{
	$auth_config = include('auth_config.php');

	// OAUTH client_credentials flow 
	$data = array(
		'client_id' => $auth_config['client_id'],
		'client_secret' => $auth_config['client_secret'],
		'grant_type' => 'client_credentials'
	);
  
	$postdata = http_build_query($data); 

	$ch = curl_init( $auth_config['oauth_token_url'] );
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $postdata);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 0);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

	$response = curl_exec( $ch );

	$jsontoken=json_decode($response);
	$bearertoken = $jsontoken->access_token;

	$_SESSION['ASSURBOX_BEARERTOKEN'] = $bearertoken;
}
else
{
	$bearertoken = $_SESSION['ASSURBOX_BEARERTOKEN'];
?>
	<a href="#" class="btn btn-default">Clear credentials</a>
<?php
}



?>
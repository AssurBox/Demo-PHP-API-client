<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("includes/head-tag-contents.php");?>

		<style>
	.control-label{
		width:100%;
	}

	.error {color: #FF0000;}
		</style>
	</head>
	<body>
	    <?php include("includes/authenticate.php");?>
		<?php include("includes/design-top.php");?>
		<?php include("includes/navigation.php");?>

		<?php
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
include "Swagger/Client/Api/GreenCardCarApi.php";
include "Swagger/Client/Api/OrganizationApi.php";
include "Swagger/Client/Model/ModelInterface.php";
include "Swagger/Client/Model/Organization.php";

$httpClient=new GuzzleHttp\Client(['headers' => ['Authorization' => 'Bearer '.$bearertoken]]);

$apiInstance = new Swagger\Client\Api\GreenCardCarApi($httpClient);
 

try 
{
    $insurances = $apiInstance->carGreenCardRequestsGetInsuranceOrganizations();
} 
catch (Exception $e) 
{
    echo 'Exception when calling GreenCardCarApi->carGreenCardRequestsGetInsuranceOrganizations: ', $e->getMessage(), PHP_EOL;
}

		?>

		<div class="container" id="main-content">
			<h2>Request a green card - Demo.</h2>
			<p>Request a green card for a customer</p>

			<p>
	You can check the documentation here (developpers.assurbox.net)	
			</p>

			<?php
    // define variables and set to empty values
	$haserror=false;
	$licenceplate ="XX9874";
	$licenceplateErr = "";// Todo: validate format
	$communication =  "REST Api communication test"; 
	$communicationErr ="";
	
	$customerLastName  = "Norris"; $customerLastNameErr="";
	$customerFirstName =  "Chuck"; $customerFirstNameErr ="";
	$customerBirthDate = "1940-03-10"; $customerBirthDateErr = "";// ISO date format
	$customerAddressStreet =  "Rue du Texas" ; $customerAddressStreetErr ="";
	$customerAddressZip = "3333"; $customerAddressZipErr = "";
	$customerAddressCity = "Luxembourg"; $customerAddressCityErr = "";
	$vehicleVIN = "WVWFD7AJ7DW098011"; $vehicleVINErr = "";
	$vehicleMake = "Volkswagen"; $vehicleMakeErr = "";
	$vehicleModel = "Golf"; $vehicleModelErr = "";
	$vehicleVersion ="GTI"; $vehicleVersionErr = "";
	$vehiclePower ="110"; $vehiclePowerErr = "";
	$vehiclePrice = "20000"; $vehiclePriceErr = "";
	$vehiclePriceWithOption ="25000"; $vehiclePriceWithOptionErr = "";



	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  
	  if (empty($_POST["licenceplate"])) {
		  $licenceplateErr = "Param is required";
		  $haserror=true;
		   } else {
		  $licenceplate = $_POST["licenceplate"];
      }
	  
			  if (empty($_POST["customerLastName"])) {
		  $customerLastNameErr = "Param is required";
		  $haserror=true;
		   } else {
		  $customerLastName = $_POST["customerLastName"];
			  }
		if (empty($_POST["customerFirstName"])) {
		  $customerFirstNameErr = "Param is required";
		  $haserror=true;
		   } else {
		  $customerFirstName = $_POST["customerFirstName"];
			  }
		if (empty($_POST["customerBirthDate"])) {
		  $customerBirthDateErr = "Param is required";
		  $haserror=true;
		   } else {
		  $customerBirthDate = $_POST["customerBirthDate"];
			  }
		if (empty($_POST["customerAddressStreet"])) {
		  $customerAddressStreetErr = "Param is required";
		  $haserror=true;
		   } else {
		  $customerAddressStreet = $_POST["customerAddressStreet"];
			  }
		if (empty($_POST["customerAddressZip"])) {
		  $customerAddressZipErr = "Param is required";
		  $haserror=true;
		   } else {
		  $customerAddressZip = $_POST["customerAddressZip"];
			  }
		if (empty($_POST["customerAddressCity"])) {
		  $customerAddressCityErr = "Param is required";
		  $haserror=true;
		   } else {
		  $customerAddressCity = $_POST["customerAddressCity"];
			  }
		if (empty($_POST["vehicleVIN"])) {
		  $vehicleVINErr = "Param is required";
		  $haserror=true;
		   } else {
		  $vehicleVIN = $_POST["vehicleVIN"];
			  }
		if (empty($_POST["vehicleMake"])) {
		  $vehicleMakeErr = "Param is required";
		  $haserror=true;
		   } else {
		  $vehicleMake = $_POST["vehicleMake"];
			  }
		if (empty($_POST["vehicleModel"])) {
		  $vehicleModelErr = "Param is required";
		  $haserror=true;
		   } else {
		  $vehicleModel = $_POST["vehicleModel"];
			  }
		if (empty($_POST["vehicleVersion"])) {
		  $vehicleVersionErr = "Param is required";
		  $haserror=true;
		   } else {
		  $vehicleVersion = $_POST["vehicleVersion"];
			  }
			  
		if (empty($_POST["vehiclePower"])) {
		  $vehiclePowerErr = "Param is required";
		  $haserror=true;
		   } else {
		  $vehiclePower = $_POST["vehiclePower"];
			  }
		if (empty($_POST["vehiclePrice"])) {
		  $vehiclePriceErr = "Param is required";
		  $haserror=true;
		   } else {
		  $vehiclePrice = $_POST["vehiclePrice"];
			  }
		if (empty($_POST["vehiclePriceWithOption"])) {
		  $vehiclePriceWithOptionErr = "Param is required";
		  $haserror=true;
		   } else {
		  $vehiclePriceWithOption = $_POST["vehiclePriceWithOption"];
			  }


		
		
		
		if($haserror == false){
					
		// CALL API and get restult HERE
	?>
			<div class="alert alert-success">
				<p>
CALL API
				</p>
			</div>

			<?php	
		
		}
}
  
  
  ?>
			<hr/>

			<div class="row">
				<div class="col-md-8">

				<script>
				function loadagents(insuranceVAT){
					console.log(insuranceVAT);

					// as CORS is not enable, this should not work :

					$.ajax({
						url: 'https://devslot.assurbox.net/api/v1/Organizations/Insurances/'+insuranceVAT+'/Agencies',
						
						beforeSend: function(xhr) {
							xhr.setRequestHeader("Authorization", "Bearer <?php echo $bearertoken ?>")
						},
						success: function(data){
							console.log(data)
						},
						error: function(jqXHR, textStatus, errorThrown)   {
							console.log(textStatus);
						}
					});

				}
				</script>

					<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" <?php echo $haserror? "class='has-error'":"" ?>>  
							<h3>Insurer information <small>(from the AssurBox Api)</small></h3>
							<div class="form-group">
							<select name="insurance" class="form-control" onchange="loadagents(this.value)">
								<?php
									foreach($insurances as $key => $value):

										$insurance = json_decode($value); // decode json to be able to access the properties
										echo '<option value="'.$insurance->VAT.'">'.$insurance->Name.'</option>'; 

									endforeach;
								?>
								</select>
							</div>

							<h3>Customer information <small>(should come from your system)</small></h3>
							<div class="form-group">
								<label class="control-label">Last Name
									<input type="text" class="form-control" name="customerLastName" value="<?php echo $customerLastName;?>">
									</label>
									<span class="error">* <?php echo $customerLastNameErr;?></span>
							</div>
							<div class="form-group">
									<label class="control-label">First Name
										<input type="text" class="form-control" name="customerFirstName" value="<?php echo $customerFirstName;?>">
										</label>
										<span class="error">* <?php echo $customerFirstNameErr;?></span>
									</div>
									<div class="form-group">
										<label class="control-label">BirthDate
											<input type="text" class="form-control" name="customerBirthDate" value="<?php echo $customerBirthDate;?>">
											</label>
											<span class="error">* <?php echo $customerBirthDateErr;?></span>
										</div>
										<div class="form-group">
											<label class="control-label">Street
												<input type="text" class="form-control" name="customerAddressStreet" value="<?php echo $customerAddressStreet;?>">
												</label>
												<span class="error">* <?php echo $customerAddressStreetErr;?></span>
											</div>
											<div class="form-group">
												<label class="control-label">Zip Code
													<input type="text" class="form-control" name="customerAddressZip" value="<?php echo $customerAddressZip;?>">
													</label>
													<span class="error">* <?php echo $customerAddressZipErr;?></span>
												</div>
												<div class="form-group">
													<label class="control-label">City
														<input type="text" class="form-control" name="customerAddressCity" value="<?php echo $customerAddressCity;?>">
														</label>
														<span class="error">* <?php echo $customerAddressCityErr;?></span>
													</div>



													<h3>Vehicle information <small>(should come from your system)</small></h3>


													<div class="form-group">
														<label class="control-label">VIN
															<input type="text" class="form-control" name="vehicleVIN" value="<?php echo $vehicleVIN;?>">
															</label>
															<span class="error">* <?php echo $vehicleVINErr;?></span>
														</div>
														<div class="form-group">
															<label class="control-label">Make
																<input type="text" class="form-control" name="vehicleMake" value="<?php echo $vehicleMake;?>">
																</label>
																<span class="error">* <?php echo $vehicleMakeErr;?></span>
															</div>
															<div class="form-group">
																<label class="control-label">Model
																	<input type="text" class="form-control" name="vehicleModel" value="<?php echo $vehicleModel;?>">
																	</label>
																	<span class="error">* <?php echo $vehicleModelErr;?></span>
																</div>
																<div class="form-group">
																	<label class="control-label">Version
																		<input type="text" class="form-control" name="vehicleVersion" value="<?php echo $vehicleVersion;?>">
																		</label>
																		<span class="error">* <?php echo $vehicleVersionErr;?></span>
																	</div>
																	<div class="form-group">
																		<label class="control-label">Power
																			<input type="text" class="form-control" name="vehiclePower" value="<?php echo $vehiclePower;?>">
																			</label>
																			<span class="error">* <?php echo $vehiclePowerErr;?></span>
																		</div>
																		<div class="form-group">
																			<label class="control-label">Price
																				<input type="text" class="form-control" name="vehiclePrice" value="<?php echo $vehiclePrice;?>">
																				</label>
																				<span class="error">* <?php echo $vehiclePriceErr;?></span>
																			</div>
																			<div class="form-group">
																				<label class="control-label">Price with options
																					<input type="text" class="form-control" name="vehiclePriceWithOption" value="<?php echo $vehiclePriceWithOption;?>">
																					</label>
																					<span class="error">* <?php echo $vehiclePriceWithOptionErr;?></span>
																				</div>



																				<h3>Request information <small>(COULD come from your system)</small></h3>

																				<div class="form-group">
																					<label class="control-label">Licence plate
																						<input type="text" class="form-control" name="licenceplate" value="<?php echo $licenceplate;?>">
																						</label>
																						<span class="error">* <?php echo $licenceplateErr;?></span>
																					</div>

																					<div class="form-group">
																						<label class="control-label">Communication
																							<textarea class="form-control" name="communication"><?php echo $communication;?></textarea>
																						</label>
																					</div>


																					<br/>
																					<input type="submit" class="btn btn-primary" name="submit" value="Request green card">  
																					</form>
																				</div>
																			</div>
																			<br/>
																			<?php
// if($communication != ""){
	// echo "<h2>Your Input:</h2>";
	// echo $communication;
// }
?>

																		</div>

																		<?php include("includes/footer.php");?>

																	</body>
																</html>
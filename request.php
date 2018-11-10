<?php 
session_start();
//session_unset ();
$bearer = '';
$page_size = 50;
$page_number = 0;

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SESSION['ASSURBOX_BEARERTOKEN'])) {
    $bearer = $_SESSION['ASSURBOX_BEARERTOKEN'];

	if(isset($_REQUEST['page']))
	{
		$page_number = $_REQUEST['page'];
	}
    $ch = curl_init('https://devslot.assurbox.net/api/v1.0/GreenCard/Car/Requests/' . $page_number . '/' . $page_size);

    header('Content-Type: application/json');
    $authorization = "Authorization: Bearer ". $bearer;
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);

    curl_close($ch);

	$requestresult=json_decode($result,true);
    $listRequest=$requestresult[Data];
	
	$totalitems = $requestresult[Total];
	$currentpagenumber = $requestresult[PageNumber];
	$pagesize = $requestresult[PageSize];

  //  $_SESSION['listRequest'] = $listRequest[Data];

    header('Content-Type: text/html; charset=utf-8');
}
else {
    header("Location: /");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests : 20 - AssurBox ASP.NET Demo</title>
    <link href="/assets/css/style.css" rel="stylesheet"/>

    <script src="/assets/js/modernizr.js"></script>
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Demo Dealer SI interacting with AssurBox</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/request.php">Requests</a></li>
                    <li><a href="/about.php">About</a></li>
                    <li><a href="/contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container body-content">

        


<a href="/create.php" class="btn btn-primary">Create</a>
<br />
<table class="table stripped">
    <thead>
        <tr>
            <th>Licence plate</th>
            <th>CustomerName</th>
            <th>RequestDate</th>
            <th>HasResponse</th>
            <th>InsuranceName</th>
            <th>SenderOrganizationName</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <?php
                
                
if (isset($listRequest)) {
    if (!isset($listRequest->Message)) {
        $tabRequest = array();
        $i = 0;
        while ($i < count($listRequest)){
            if (isset($listRequest[$i])) {
                $html = '
                <tr>
                        <td>
                        '
                            . $listRequest[$i]['LicencePlate'] .
                        '
                        </td>
                        <td>
                        '
                            . $listRequest[$i]['CustomerName'] .
                        '
                        </td>
                        <td>
                        '
                            . $listRequest[$i]['RequestDate'] .
                        '
                        </td>
                        <td>
                        '
                            . $listRequest[$i]['HasResponse'] .
                        '
                        </td>
                        <td>
                        '
                            . $listRequest[$i]['InsuranceName'] .
                        '
                        </td>
                        <td>
                        '
                            . $listRequest[$i]['SenderOrganizationName'] .
                        '
                        </td>
                        <td>
        ';

        $html .= '<a href="/DownloadSNCADoc.php?correlationId=' . $listRequest[$i]['CorrelationId'] . '">doc snca</a>';

        $html .= '                    
                        </td>
                        <td>
                            <a href="/detail.php?correlationId=' . $listRequest[$i]['CorrelationId'] . '">Detail</a> |
                            <a href="/edit.php?correlationId=' . $listRequest[$i]['CorrelationId'] . '&requestDate=' . $listRequest[$i]['RequestDate'] .'">Edit</a> |
                            <a href="/delete.php?correlationId=' . $listRequest[$i]['CorrelationId'] . '">Delete</a>
                        </td>
                </tr>
                
        ';
        echo $html;
            }
            $i++;
        }



      }
}

                ?>
            </tr>
    </tbody>
</table>

        <hr />
		
		
		
		<nav aria-label="Page navigation">
    <ul class="pagination">
        <li>
            <a href="?request?page=<?php echo($currentpagenumber-1) ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        
		<?php
            $pages = $totalitems /$pagesize;
        

			for (int i = 0; i < pages; i++)
			{
				//@(i == Model.PageNumber ? "class=active" : "")>
			   echo  '<li> <a href="?request?page='.i.'">'.i.'</a></li>'
			}

        ?>
        <li>
            <a href="?request?page=<?php echo($currentpagenumber+1) ?>"  aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
		<hr />
        <footer>
            <p>&copy; 2018 - AssurBox Demo</p>
        </footer>
    </div>

    <script src="/assets/js/jquery.js"></script>

    <script src="/assets/js/bootstrap.js"></script>

    
</body>
</html>

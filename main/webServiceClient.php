<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<body>
<?php
		require_once("../lib/nusoap.php");
        $client = new nusoap_client("http://localhost/SakonScan/main/webServiceServer.php?wsdl",true); 
        $params = array(
                   'strName' => "Weerachai Nukitram",
				   'strEmail' => "is_php@hotmail.com"
        );
       $data = $client->call("HelloWorld",$params);
       echo $data;
?>
</body>
</html>
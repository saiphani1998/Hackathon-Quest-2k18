<?php
/* subject and email*/

	$emailSubject = $_POST['Subject'];
	$webMaster = 'saiphanikrishna1@gmail.com';
		
/*gathering data */
 
	    $nameField = $_POST['FullName'];
	    $phoneField = $_POST['Phone'];
	    $emailField = $_POST['Email'];
 	    $messageField = $_POST['Message'];
		
		$body = <<<EOD
<br><hr><br>
Email: $emailField <br>
Name: $nameField <br>
Message: $messageField <br>
EOD;

$headers = "from: $emailField\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);

$theResults = <<<EOD
<html>
<head>
<title>Thanks you</title>
<link rel="stylesheet" type="text/css" href="css/hyperlink.css">
</head>
<body>
<br><br><center><img src="images/waiting.jpg" alt="Thank you for your response."/></center><br>
<h1><center>Thank you for the reponse. We will get back to you as soon as possible</center></h1><br>
<center><a href="contactUs.html" title="contactUs">Go back</a><br><br></center>
<center><a href="index.html" title="home">Home</a><br><br></center>
</body>
</html>
EOD;

echo $theResults;	
?>
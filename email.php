<?php
$to = "junrol69@gmail.com";

$message = '<html>
<head>
<title>Contact Us</title>
</head>
<body>
<p>'.$_POST['message'].'</p>
<table>
<tr>
<th>Name</th>
</tr>
<tr>
<td>'.$_POST['name'].'</td>
</tr>
</table>
</body>
</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= "From: <".$_POST['email'].">" . "\r\n";

$test = mail($to,$_POST['subject'],$message,$headers);
echo $test;
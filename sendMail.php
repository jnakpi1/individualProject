<?php
$subject = 'Bill Report';
$emailTo = $_POST['email'];
echo $emailTo;

$message .= $_POST['nameBilling1'] + $_POST['billResult1'];


mail($emailTo, $subject, $message);
?>

<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
<h1>Email Sent</h1>
</body>
</html


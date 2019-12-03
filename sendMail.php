<?php
$subject = 'Bill Report';
$emailTo = $_POST['email'];
echo $emailTo;
$billOne = $_POST['nameBilling'] + $_POST['billResult1'];
$billTwo = $_POST['nameBilling2'] + $_POST['billResult2'];
$paypalLink= $_POST['unPaypal'];


$message .= 'Bill 1: '.$billOne. + " Bill 2: "  .$billTwo. " ";
$message .= 'Link to pay ' .$paypalLink;


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


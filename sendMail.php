<?php
$subject = 'Bill Report';
$message .='Email has been sent to:  ';
$emailTo = $_POST['email'];
echo $emailTo;

$billname1 = $_POST['nameBilling'];
$bill1 = $_POST['billResult1'];

$billname2 = $_POST['nameBilling2'];
$bill2 = $_POST['billResult2'];

$billname3 = $_POST['nameBilling3'];
$bill3 = $_POST['billResult3'];

$billname4 = $_POST['nameBilling4'];
$bill4 = $_POST['billResult4'];

$billname5 = $_POST['nameBilling5'];
$bill5 = $_POST['billResult5'];

$billname6 = $_POST['nameBilling6'];
$bill6 = $_POST['billResult6'];

$billname7 = $_POST['nameBilling7'];
$bill7 = $_POST['billResult7'];

$billname8 = $_POST['nameBilling8'];
$bill8 = $_POST['billResult8'];


$paypalLink= $_POST['unPaypal'];

$message .='Bills shown are divided by the amount of roomates';
$message .= '    Bill 1: '.$billname1;
$message .= '    Bill Amount: '.$bill1;

$message .= '    Bill 2: '.$billname2;
$message .= '    Bill Amount: '.$bill2;

$message .= '   Bill 3: '.$billname3;
$message .= '   Bill Amount: '.$bill3;

$message .= '   Bill 4: '.$billname4;
$message .= '   Bill Amount: '.$bill4;

$message .= '   Bill 5: '.$billname5;
$message .= '   Bill Amount: '.$bill5;

$message .= '   Bill 6: '.$billname6;
$message .= '   Bill Amount: '.$bill6;

$message .= '   Bill 7: '.$billname7;
$message .= '   Bill Amount: '.$bill7;

$message .= '   Bill 8: '.$billname8;
$message .= '   Bill Amount: '.$bill8;

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


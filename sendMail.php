<?php
$subject = 'Bill Report';
$emailTo = $_POST['email'];
echo $emailTo;
echo $_POST['nameBilling'];


$bill1 = $_POST['nameBilling'] + $_POST['billResult1']+ '<br>';
$bill2 = $_POST['nameBilling2'] + $_POST['billResult2'];
$bill3 = $_POST['nameBilling3'] + $_POST['billResult2'];
$bill4 = $_POST['nameBilling4'] + $_POST['billResult2'];
$bill5 = $_POST['nameBilling5'] + $_POST['billResult2'];
$bill6 = $_POST['nameBilling6'] + $_POST['billResult2'];
$bill7 = $_POST['nameBilling7'] + $_POST['billResult2'];
$bill8 = $_POST['nameBilling8'] + $_POST['billResult2'];
$paypalLink= $_POST['unPaypal'];

$message .='Bills shown are divided by the amount of roomates';
$message .= 'Bill 1: '.$bill1;
$message .= 'Bill 2: '.$bill2;
$message .= 'Bill 3: '.$bill3;
$message .= 'Bill 4: '.$bill4;
$message .= 'Bill 5: '.$bill5;
$message .= 'Bill 6: '.$bill6;
$message .= 'Bill 7: '.$bill7;
$message .= 'Bill 8: '.$bill8;
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


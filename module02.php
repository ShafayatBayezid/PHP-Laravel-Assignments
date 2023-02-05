<?php
$tuition_fee = 12000;

$commission = ($tuition_fee > 20000) ? 0.25 * $tuition_fee :
(($tuition_fee > 10000) ? 0.20 * $tuition_fee :
    (($tuition_fee > 7000) ? 0.15 * $tuition_fee :
        "Invalid data"));

echo "25% Commission on above 20000 dollars \n";
echo "20% Commission on above 10000 dollars \n";
echo "15% Commission on above 7000 dollars \n \n";
echo "Your Commission of {$tuition_fee} dollars is {$commission} dollars \n";

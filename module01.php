<?php
$num = 5;

$result = (0 < $num) ? "Positive" : ( (0 > $num) ? ( (-10 > $num) ? "value is below -10" : "Negative" ) : "its zero" );

echo $result;
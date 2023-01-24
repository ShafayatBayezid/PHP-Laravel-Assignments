<?php
$num = -110;
// Using if statement
if ($num > 0) {
  echo $result = 'positive';
}
elseif ($num < 0 ){
  echo $result = 'negative';
  if( $num < -10) {
    echo $result = 'value is below -10';
  }
}
else {
  echo $result = 'its zero';
}

echo "\n";

$result = (0 < $num) ? "Positive" : ( (0 > $num) ? ((-10 > $num) ? "value is below -10" : "Negative") : "its zero" );

echo $result;
<?php
$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        $sum += $i; 
    }
}

echo "The sum of odd numbers from 1 to 10 is: " . $sum;
?>

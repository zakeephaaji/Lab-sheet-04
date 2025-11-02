<?php
$hour = date("H");

if ($hour >= 5 && $hour < 12) {
    echo "Good Morning!";
} elseif ($hour >= 12 && $hour < 17) {
    echo "Good Afternoon!";
} elseif ($hour >= 17 && $hour < 20) {
    echo "Good Evening!";
} else {
    echo "Good Night!";
}
?>
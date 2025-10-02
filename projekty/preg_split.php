 <?php
$date = "2025-01-01 00:00:00";
$pattern = "/[-\s:]/";
$components = preg_split($pattern, $date);
print_r($components);
?> 

<?php
$food = array("Pizza", "Chines rice", "Biryani");
sort($food);

$foodlength = count($food);
for($x = 0; $x < $foodlength; $x++) {
echo $food[$x];
echo "<br>";
}
?>
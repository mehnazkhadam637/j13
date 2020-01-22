<?php 
$str = 'WXYZ';
$strReversed = '';
$length = strlen($str);
for($i=$length-1; $i >= 0; $i--){
    $strReversed .= $str[$i];
}
echo $strReversed;
 ?>
<?php
$input = array(1,2,3,4,5,6,7,8,9,10);
rsort($input);

var_dump($input);
?>
<p>
array(10) { [0]=> int(10) [1]=> int(9) [2]=> int(8) [3]=> int(7) [4]=> int(6) [5]=> int(5) [6]=> int(4) [7]=> int(3) [8]=> int(2) [9]=> int(1) }
</p>
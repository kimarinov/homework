<?php  
$arr = array('rwerwerwe', 'werwrwe', 'rewrwe', 'weq', 'fefefefe', 'efe', 'fefefewq',);
$lengths = array_map('strlen', $arr);
echo "The shortest string is of  " . min($lengths) ." symbols .The longest is " . max($lengths);

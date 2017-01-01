//cast arrays(array mix)

<?php

$keys = array(
  1 => 'a',
  '1' =>'b',
  1.5=> 'c',
  true => 'd'
);

//result is 'd'  because every keys are cast to 1 and the last key is equals to 'd'


var_dump($keys);
//var du to $keys

<?php
//show all errors
error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

print $arr['fruit'];
print $arr['veggie'];

//fruit not yet defined as 'fruit', so there is an error (E_NOTICE) level
print $arr[fruit];

define('fruit', 'fruit');

print $arr['fruit'];
print $arr[fruit] . "<br>";

print "Hello" . $arr[fruit] .  "<br>";

?>

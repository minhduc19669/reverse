<?php
include 'Stack.php';
use Reverse\Stack;
$arr=[1,2,3,4,5,6,7];
$stack=new Stack(count($arr));
for ($i=0;$i<count($arr);$i++){
    $stack->push($arr[$i]);
}
$stack->pop();
echo $stack->getStack();






<?php

echo "Enter a number: ";
$number = (int)readline();

if($number<0){
    echo "The number is negative";
}elseif($number>0){
    echo "The number is positive";
}else{
    echo "The number is zero";
}

?>
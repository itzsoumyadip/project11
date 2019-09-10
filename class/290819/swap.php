<?php 

function swap($num1,$num2){
$temp=$num1;
$num1=$num2;
$num2=$temp; 
echo " $num1 "."$num2";
}

swap(20,9);
?>
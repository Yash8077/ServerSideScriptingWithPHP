<?php
function factorialIterative($n){
    $result=1;
    for($i=1;$i<=$n;$i++){
        $result*=$i;
    }
    echo "The factorial of $n is: "."$result\n<br>"; 
} 
$n=5;
factorialIterative($n);
?>
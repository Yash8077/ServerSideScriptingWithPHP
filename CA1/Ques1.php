<?php 
    $courses=array("C++"=>array("name"=>"Beginning with C","copies"=>8),"PHP"=>array("name"=>"Basics of PHP","copies"=>10),
    "Laravel"=>array("name"=>"MVC","copies"=>3));
    foreach($courses as $key1=>$value1){
        echo "$key1\n"."<br>";
        foreach($value1 as $key2=>$value2){
            echo "".$key2." = ".$value2."<br>";
        }
        echo "<br>";
    }
?>
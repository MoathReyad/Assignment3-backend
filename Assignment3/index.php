<?php
    echo "<h1> Task Three </h1>";
    echo "<p>The exercises in page 54 and 55</p>";

    // 1
    $x = 655;
    echo "1) ";
    var_dump(is_int($x));
    echo "<br>";

    // 2
    $x = 4.1;
    echo "2) ";
    var_dump(is_int($x));
    echo "<br>";
    
    // 3
    $x = 2000.5;
    echo "3) ";
    var_dump(is_float($x));
    echo "<br>";

    // 4
    $x = "moath";
    echo "4) ";
    var_dump(is_numeric($x));
    echo "<br>";

    // 5
    echo "5)<br>";
    echo "-min num = <b>" . min(10, 17, -12, 40, -36) . "</b><br>";
    echo "-max num = <b>" . max(10, 17, -12, 40, -36) . "</b><br>";

    // 6
    echo "6) absolute(Positive) value of a number= <b>" . abs(-1656) . "</b><br>";

    // 7
    echo "7)<br>";
    echo "-rounding down = <b>" . (round(6.1)) . "</b><br>"; 
    echo "-rounding up = <b>" . (round(6.6)) . "</b><br>"; 

    // 8
    echo "8)<br>";
    echo "-rand number: <b>" . (rand()) . "</b><br>";
    echo "-rand number from 10 to 100: <b>" . (rand(10 , 100)) . "</b><br>";


?>
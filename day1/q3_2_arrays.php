<?php
    $a=array(array(5,2),array(15,7));
    $b=array(array(8,3),array(2,5));

    echo "Matrix Addition <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }
?>
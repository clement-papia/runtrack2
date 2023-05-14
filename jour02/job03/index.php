<?php
    
    for ($i=0; $i <= 100; $i++) {
        if ($i == 42) {
            echo "La PLateforme_";
        } elseif ($i <= 20) {
            echo "<i>";
            echo $i;
            echo "</i>";
        } elseif ($i >= 25 && $i <= 50) {
            echo "<u>";
            echo $i;
            echo "</u>";
        } else {
            echo $i;
        }
        echo "<br>";
    }

?>
<?php
    $heading = "Multiplication Table: 100x100";
    echo "<h1>" . $heading . "</h1>";
    echo "<table>";
        for($i = 1; $i < 101; $i++)
        {
            echo "<td></td>";
                for($j = 1; $j < 101; $j++)
                {
                    $x = $i*$j;
                    echo "<td>$x</td>";
                }
            echo "</tr>";
        }
    echo "</table>";
?>

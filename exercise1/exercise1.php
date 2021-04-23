<?php
    $heading = "Multiplication Table: 100x100";
    echo "<h1>" . $heading . "</h1>";
    echo "<table>";

	echo "<td></td>";

        for($i = 1; $i <=100; $i++)
        {
          echo "<td>" . $i . "</td>";
        }
        echo "</tr>";
        for($i = 1; $i <= 100; $i++)
        {
          echo "<tr>" . "<td>" . $i . "</td>";
          for($j = 1; $j <= 100; $j++)
          {
            $x=$i*$j
            echo "<td>" . $x . "</td>";
          }
          echo "</tr>";
        }
    echo "</table>";
?>

<?php
        $n = isset($_GET['n']) ? intval($_GET['n']) : 0;

        if ($n > 0) {
                echo "<h2>Times Table for $n</h2>";
                echo "<table border='1' cellpadding='5' cellspacing='0'>";
                
                for ($i = 1; $i <= 15; $i++) {
                        $result = $i * $n;
                        echo "<tr><td>$i x $n = $result</td></tr>";
                }

                echo "</table>";
        } else {
                echo "Please provide a valid positive number 'n' in the query string. Example: times.php?n=3";
        }
?>
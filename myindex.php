<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }

        table, th, td {
            margin-top: 15px;
            margin-left: 20px;
            border: 1px solid black;
            padding: 15px;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $values = array(0, 1); // Possible values for A and B

                foreach ($values as $a) {
                    foreach ($values as $b) {
                        $notA = !$a ? 0 : 1;
                        $orAB = $a || $b ? 1 : 0;
                        $andAB = $a && $b ? 1 : 0;
                        $xorAB = $a xor $b ? 1 : 0; // Corrected calculation for A xor B

                        echo "<tr>";
                        echo "<td>$a</td>";
                        echo "<td>$b</td>";
                        echo "<td>$notA</td>";
                        echo "<td>$orAB</td>";
                        echo "<td>$andAB</td>";
                        echo "<td>$xorAB</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>

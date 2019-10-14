<?php

    $data = 0;
    echo "<table border='1'>";
    for ($x = 1; $x <= 10; $x++) {
        echo "<tr>";
        for ($col = 1; $col <= 10; $col++) {
            ++$data;
            echo "<td>$data</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    $data1 = 0;
    echo "<table border='1'>";
    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 10; $col++) {
            echo "<td>$row * $col = " . $row * $col . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<table border='1' cellpadding = '20'>";
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $chess = $row + $col;
            if ($chess % 2 == 0) {
                echo "<td bgcolor='white'></td>";
            } else {
                echo "<td bgcolor='black'></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php foreach ($data as $key => $value){ ?>
            <tr>
                <td> <?php echo $key; ?></td>
                <td> <?php echo $value; ?></td>
            </tr>
        <?php } ?>
    </table>
    <?php
    echo "<table border='1'>";
        echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Mobile</th>";
            echo "<th>Email</th>";
        echo "</tr>";
        foreach ($data as $value){
            echo "<tr>";

            echo "</tr>";
        }
    echo "</table>";


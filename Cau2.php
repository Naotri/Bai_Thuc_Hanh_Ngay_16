<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng cửu chương</title>
</head>
<body>

    <table border="1" align="center">
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>Chương $i</th>";
            }
            ?>
        </tr>
        <?php
        for ($j = 1; $j <= 10; $j++) {
            echo "<tr>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<td>$i x $j = " . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
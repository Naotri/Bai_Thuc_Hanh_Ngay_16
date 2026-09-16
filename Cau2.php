<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng cửu chương</title>
</head>
<body>

    <h2 align="center">BẢNG CỬU CHƯƠNG</h2>

    <table border="1" align="center" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>Bảng $i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
           
            for ($j = 1; $j <= 10; $j++) {
                echo "<tr>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<td>$i x $j = " . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
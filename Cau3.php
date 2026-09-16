<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $N = rand(-100, 100);
    echo "Số ngẫu nhiên N = $N <br>";

    // Hàm kiểm tra số nguyên tố (đã sửa điều kiện <= sqrt)
    function isPrime($n){
        if($n < 2) return false;
        for($i = 2; $i <= sqrt($n); $i++){
            if($n % $i == 0) return false;
        }
        return true;
    }

    if($N > 0){
        echo "$N là số nguyên dương <br>";
        
        // 1. In ra các ước số
        echo "Các ước số của $N: ";
        for($i = 1; $i <= $N; $i++){
            if($N % $i == 0){
                echo "$i ";
            }
        }
        echo "<br>";

        // 2. Kiểm tra N là số nguyên tố
        if(isPrime($N)){
            echo "$N là số nguyên tố <br>";
        } else {
            echo "$N không phải là số nguyên tố <br>";
        }

        // 3. Tính tổng các số nguyên tố < N (đã sửa điều kiện < $N)
        $tongPrime = 0;
        for($i = 2; $i < $N; $i++){
            if(isPrime($i)){
                $tongPrime += $i;
            }
        }
        echo "Tổng các số nguyên tố nhỏ hơn $N là: $tongPrime <br>";

        // 4. Kiểm tra số chính phương
        $sq = sqrt($N);
        if ($sq == (int)$sq) {
            echo "- $N là số chính phương.<br>";
        } else {
            echo "- $N KHÔNG phải là số chính phương.<br>";
        }

    } else {
        echo "$N KHÔNG phải là số dương (N <= 0). Bỏ qua các bước tính toán.";
    }
    ?>
</body>
</html>
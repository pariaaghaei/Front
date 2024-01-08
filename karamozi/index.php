<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_page3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
</head>

<body>
    <div class="wrapper">
        <form action="login.php" method="post">
            <h1> Login </h1>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <button type="submit" name="submit" class="btn"> Login </button>
        </form>
    </div>

</body>
</html>


<?php

// مشخصات پایگاه داده
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "my_site";

// اتصال به پایگاه داده
$conn = mysqli_connect($servername, $username, $password, $dbname);

// بررسی اتصال
if (!$conn) {
    die("خطا در اتصال به پایگاه داده: " . mysqli_connect_error());
}

// اتصال با موفقیت برقرار شد
echo "";

// اتصال را قطع می‌کنیم
mysqli_close($conn);

?>
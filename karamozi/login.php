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

// دریافت نام کاربری و رمز عبور از فرم
$username = $_POST['username'];
$password = $_POST['password'];

// بررسی وجود کاربر در پایگاه داده
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

// بررسی نتیجه
if ($result && mysqli_num_rows($result) > 0) {
    // کاربر وجود دارد
    // نمایش پیام موفقیت
    echo "وارد شدید";
} else {
    // کاربر وجود ندارد
    // نمایش پیام خطا
    echo "نام کاربری یا رمز عبور اشتباه است";
}

// اتصال را قطع می‌کنیم
mysqli_close($conn);

?>
<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = ''; //Lab room 408 or 409 - 12345678
$dbname = 'business';

//โปรแกรมนี้ใช้ในสำหรับการเชื่อมระหว่าง web server กับ dtabase verver

try {
    $conn = new PDO(
        "mysql:host=$serverName;dbname=$dbname;charset=UTF8",
        $userName,
        $userPassword
    );

    echo "ประเทศทั้งหมด";
} catch (PDOException $e) {
    echo 'Sorry! You cannot connect to database: ' . $e->getMessage();
}

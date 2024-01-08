<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require 'connect.php';

    $sql = 'SELECT CustomerID,Birthdate,OutstandingDebt
FROM customer';
    $stmt = $conn->prepare($sql);
    $stmt->execute();



    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<br>' . 'รหัสลูกค้า' . $result['CustomerID'] . 'วันเกิด' . $result['Birthdate'] . 'ยอดหนี้' . $result['OutstandingDebt'];
    }
    ?>
</body>

</html>
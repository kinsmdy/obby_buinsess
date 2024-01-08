<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select</title>
</head>

<body>


    <?php
    require 'connect.php';

    $sql = 'SELECT * FROM customer,country where customer.CountryCode = country.CountryCode';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>
    <!-- // while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     echo '<br>' .
    //         'รหัสลูกค้าของฉันแบบที่ 1 : ' .
    //         $result['CustomerID'] .
    //         ' วันเกิด : ' .
    //         $result['Birthdate'] .
    //         ' ยอดหนี้ : ' .
    //         $result['OutstandingDebt'];
    // }

// while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo "รหัสลูกค้า : ". $result['CustomerID'].
//     "วันเกิด : " . $result['Birthdate'].
//     "ยอดหนี้ : " . $result['OutstandingDebt'];

// }

while ($result = $stmt->fetch(PDO::FETCH_NUM)){
    echo"<br>" . "ชื่อลูกค้า : " . $result[1] . " Email : "
    . $result[3];

} -->
    <table border="1">
        <tr>
            <th> รหัสลูกค้า </th>
            <th> ชื่อลูกค้า </th>
            <th> อีเมลล์ลูกค้า </th>
            <th> ประเทศ </th>
            <th> ยอดหนี้ </th>
        </tr>

        <?php
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>

            <tr>
                <td>
                    <a href="detail.php?CustomerID=<?php echo $result['CustomerID']; ?>">

                        <?php echo $result['CustomerID']; ?>

                    </a>

                </td>
                <td>
                    <?php echo $result['Name'];              ?>
                </td>
                <td>
                    <?php echo $result['Email'];            ?>
                </td>
                <td>
                    <?php echo $result['CountryName'];      ?>
                </td>
                <td>
                    <?php echo $result['OutstandingDebt'];  ?>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>






</body>

</html>
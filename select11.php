<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
require'connect.php';
$sql='select * from customer';
$stmt=$conn->prepare($sql);
$stmt->execute();
echo'<br/>';
$result=$stmt->fetchAll();
//print_r($result);

foreach($result as $r) {
    print $r['CustomerID'].'--'.$r['Name'].'<br>';
}
?>
</body>
</html>
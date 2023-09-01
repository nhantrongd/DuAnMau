<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Mã đơn</th>
            <th>Tên</th>
            <th>Mã đơn</th>
            <th>Mã đơn</th>
            <th>Mã đơn</th>
        </thead>
    </table>
    <?php 
        foreach($tcdonhang as $donhang){
            print_r($donhang);

        }
    ?>
</body>
</html>
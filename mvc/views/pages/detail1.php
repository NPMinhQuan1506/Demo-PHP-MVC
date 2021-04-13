<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $data["Data"]. "<br/>";
    while($row = mysqli_fetch_array($data["DataSQL"])){
        echo $row["ID"]." : ". $row["Name"]." : ". $row["Age"]." : ". $row["Gender"]." : ". $row["Note"]."<br/>";
    }
     ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" name="tien">
    <select name="chuyentien">
        <option value="a">chuyen tu tien viet sang do</option>
        <option value="b">chuyen tu tien do sang viet</option>
    </select>
    <input type="submit" value="doi tien">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $tien = $_POST["tien"];
    $chuyentien = $_POST["chuyentien"];
    if($chuyentien === "b"){
        echo $tien*23000;
    }
    elseif ($chuyentien === "a"){
        echo $tien/23000;
    }
}
?>
</body>
</html>
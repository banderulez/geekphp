<?php
include 'result.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="x1" value="<? echo $_POST['x1']; ?>">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="x2" value="<? echo $_POST['x2']; ?>">
    <input type="submit" name="res" value="=">
    <input type="text" name="result" value="<? echo $result; ?>">

</form>

</body>
</html>


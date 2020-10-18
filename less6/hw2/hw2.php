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
    <input id="x1" type="text" name="x1" value="<? echo $_POST['x1']; ?>">
    <samp><? echo $_POST['submit']; ?></samp>
    <input type="text" name="x2" value="<? echo $_POST['x2']; ?>">
<!--    <input type="submit" name="res" value="=">-->
    <samp>=</samp>
    <input type="text" name="result" value="<? echo $result; ?>">
    <br>
    <br>
    <input type="submit" name="submit" value="+">
    <input type="submit" name="submit" value="-">
    <input type="submit" name="submit" value="*">
    <input type="submit" name="submit" value="/">


</form>

</body>
</html>


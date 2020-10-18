<?php
include 'config.php';
include 'comment.php';
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

<div style="border: 1px solid black; width: 400px;">
<?php
$all = "SELECT * FROM comm";
$result = mysqli_query( $connect, $all );

//$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Выводим данные каждой строки
    while($row = $result->fetch_assoc()) {
        echo "Время ". $row["data_time"]. "<br>". " Имя: ". $row["author"]. " email: " .$row["email"]. "<br>". " Сообщение: " . $row["message"].   "<br>".   "<hr>";
    }
} else {
    echo "Записей нет";
}

?>
</div>
<br>
<form action="" method="post">
    <input type="text" placeholder="Имя" name="fname" />
    <input type="email" placeholder="E-mail" name="email" />
    <br>
    <textarea placeholder="Сообщение" name="message" rows="10" cols="45"></textarea>
    <input type="submit" name="set" value="Отправить" />
</form>
</body>
</html>

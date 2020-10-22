<?php
include 'config.php';
include 'comment.php';
?>
<h1>
    Отзывы о сайте
</h1>
<div class="sreview" >
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
    <br>
    <input type="submit" name="set" value="Отправить" />
</form>




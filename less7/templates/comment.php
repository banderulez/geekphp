<?php
include 'config.php';

if (isset($_POST['set'])) {
    $date = date("Y-m-d H:i:s");
    $fname_u = $_POST['fname'];
    $email_u = $_POST['email'];
    $message_u = $_POST['message'];
    $insertComm = "INSERT INTO comm (author, message,data_time, email) VALUES ( '$fname_u', '$message_u', '$date', '$email_u')";
    if(mysqli_query($connect, $insertComm)){
        echo "Запись в БД успешно осуществлена";
    } else{
        echo "Ошибка при записи $insertComm. " . mysqli_error($connect);
    }
    echo "Сообщение отправлено";
}
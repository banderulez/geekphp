
<?php

include 'config.php';

$small = "./small/";
$big = "./big/";
//print_r($_FILES);
$path = $big.$_FILES['photo']['name'];
//$tmp_path = 'tmp/';
if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    echo $_FILES['photo']['name']."Успешно загружен!";
    $smaller = imagescale(imagecreatefromjpeg($path),300);
    imagejpeg($smaller, $small.$_FILES['photo']['name']);

    $name = $_FILES['photo']['name'];
    $size = $_FILES['photo']['size'];

    $insert_image="INSERT INTO shop1 (img, size, address) VALUES ( '$name', $size, '$path')";
    if(mysqli_query($connect, $insert_image)){
        echo "Запись в БД успешно осуществлена";
    } else{
        echo "Ошибка при записи $insert_image. " . mysqli_error($connect);
    }

}


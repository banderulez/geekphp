<?php
require_once "image.php";
require_once "config.php";
require_once "db_shop.php";
if ($_POST['submit']) {
    $name = trim(strip_tags($_POST['name']));
    $desccription= trim(strip_tags($_POST['desc']));
    $price = (int)trim(strip_tags($_POST['price']));




    $filePath = $_FILES['img']['tmp_name'];
    $fileName = translate($_FILES['img']['name']);
    $type = $_FILES['img']['type'];
    $size = $_FILES['img']['size'];
    $DIR_SMALL = "./images/small/";
    $DIR_BIG = "./images/big/";

    if ($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif') {
        if ($size > 0 and $size < 1000000) {
            if (copy($filePath,  $DIR_BIG . $fileName)) {
                image_resize( $DIR_BIG . $fileName,  $DIR_SMALL . $fileName, 250, 150);
                $img = $DIR_BIG.$_FILES['img']['name'];
                $img_small = $DIR_SMALL. $_FILES['img']['name'];
                if (isset($_POST["edit"])) {
                    $id = (int)trim(strip_tags($_POST['edit']));
                   product_edit($connect, $id, $name, $desccription, $img , $img_small , $price);
                  //  header("Location: http://less7/index.php?page=admin");
                } else {
                   product_new($connect, $name, $desccription, $img, $img_small, $price);
                   // header("Location: test.php");
                    //header("Location: admin.php");
                    echo "Товар успешно добавлен!". "<br>"."<a href='index.php?page=admin'> <- Вернуться в Админ панель</a>";
                }

                $message = "<h3>Файл успешно загружен на сервер</h3>";
            } else {
                $message = "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
                exit;
            }
        } else {
            $message = "<b>Ошибка - картинка превышает 1 Мб.</b>";
        }
    } else {
        $message = "<b>Картинка не подходит по типу! Картинка должна быть в формате JPEG, PNG или GIF</b>";
    }
}
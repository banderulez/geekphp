<?php
require_once "config.php";
require_once "admin.php";
function product_new($connect, $name, $desccription, $img, $img_small, $price)
{
    $add="INSERT INTO mobshop (name, desccription, img, img_small, price ) VALUES ('%s','%s','%s','%s','%s')";

   $query = sprintf($add, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $desccription),
       mysqli_real_escape_string($connect, $img), mysqli_real_escape_string($connect, $img_small), mysqli_real_escape_string($connect, $price));

    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    return true;
}

function products_all($connect)
{
    $query = "SELECT * FROM mobshop order by id desc";
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $products = [];

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $products[] = $row;
    }

    return $products;
}

function product_get($connect, $id)
{
    $query = sprintf("SELECT * FROM mobshop where id=%d ", (int)$id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $product = mysqli_fetch_assoc($result);

    return $product;
}

function product_delete($connect, $id)
{
    $id = (int)$id;

    if ($id == 0)
        return false;

    $query = sprintf("DELETE FROM mobshop where id='%d'", $id);
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}
//function func_delete($_GET['id'])
//{
//    if($_GET[id]){
//        $id= $_GET[id];
//        product_delete($connect, $id);
//        header("Location: admin.php");
//    }
//}
function product_edit($connect, $id, $name, $desccription, $img, $img_small, $price)
{
    $id = (int)$id;

    $sql = "UPDATE mobshop SET name='%s',desccription='%s',img='%s',img_small='%s',price='%s' WHERE id='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $desccription), mysqli_real_escape_string($connect, $img), mysqli_real_escape_string($connect, $img_small), mysqli_real_escape_string($connect, $price), $id);

    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
}
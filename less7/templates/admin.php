<?php
include_once "db_shop.php";
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Админка</title>
<!--    <link rel="stylesheet" href="../public/css/styles.css" type="text/css" media="all">-->
</head>
<body>
<div id="container">
    <div class="leftblock">
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="index.php" class="active">Главная</a></li>
                    <li><a href=index.php?page=add_product>Добавить товар</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
        <h1>Админка</h1>
        <?
        $products = products_all($connect);
        if($products){
            foreach ($products as $product){?>
                <div class="item">
                    <img src="<?=$product['img_small']?>" alt="<?=$product['name']?>" title="<?=$product[name]?>">
                    <h3 class="item-name"><?=$product['name']?></h3>
<!--                 <p class="add-to-basket"><a href="edit_goods.php?id=--><?//=$good[id]?><!--" title="Редактировать">Редактировать</a></p><br>-->
                    <p class="add-to-basket"><a href="db_shop.php?id=<?=$product['id']?>" title="Удалить">Удалить</a></p>
                </div>
            <?}
        }
        ?>
    </div>
</div>
</body>
</html>

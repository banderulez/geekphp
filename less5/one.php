<?php
include 'config.php';
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

<?php
$all = "SELECT * FROM shop1";
$res = mysqli_query( $connect, $all );
if ( mysqli_num_rows( $res ) > 0 )
    while( $img = mysqli_fetch_array( $res ) )

        echo '<a  target="_blank" href="data:image/jpeg;base64,'.base64_encode($img['img']).'" ><img src="data:image/jpeg;base64,'.base64_encode($img['img']).'" " width="10%"/></a>';
?>


<form action="hw2.php" enctype="multipart/form-data" method="post">
    <input name="photo" type="file" accept="image/*"/>
    <input type="submit" value="Загрузить"  />
</form>
</body>
</html>

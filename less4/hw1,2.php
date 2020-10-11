
<?php
$images = scandir("img");
for ($i=2; $i<count($images);$i++):?>

<a  target="_blank" href="img/<?= $images[$i]?>" ><img src="img/<?= $images[$i]?>" width="30%" ></a>
<?php
endfor;
?>

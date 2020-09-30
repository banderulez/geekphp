<?php 
$file = 'newpage.html';

$current = file_get_contents($file);

$current .= "<!doctype html><html>
<head><meta charset='utf-8'>
<title>new file</title>
</head><body><h3>New HTML file</h3>
</body></html>
";

file_put_contents($file, $current);
?>
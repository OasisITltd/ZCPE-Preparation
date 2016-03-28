<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Basic syntax</h1>
<ul>
    <li>PHP tags</li>
    <li>Escaping from HTML</li>
    <li>Instruction separation</li>
    <li>Comments</li>
</ul>


<?php echo phpversion();?>
<br>
<? echo" Again! " // This will not work unless short_open_tag is on in .ini file ?>

<?="hello!" // this will always work since versin 5.4 regardless the short_open_tag is on or off! ?>
</body>
</html>
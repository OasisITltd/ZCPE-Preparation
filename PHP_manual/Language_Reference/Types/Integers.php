<pre>
    Integers can be specified in
    decimal (base 10),
    hexadecimal (base 16),
    octal (base 8) or
    binary (base 2) notation,

    optionally preceded by a sign (- or +).
    Binary integer literals are available since PHP 5.4.0.
</pre>

<?php
$int = 123; var_dump($int); // 123

$negInt = -123; var_dump($negInt); // -123

$octInt = 0123; var_dump($octInt); // 83

$hexInt = 0x123; var_dump($hexInt); // 291

$binInt = 0b111; var_dump($binInt);


$intSize =  PHP_INT_SIZE;
$intMax =  PHP_INT_MAX;
echo "<hr>";
var_dump($intSize);
?>
<p>Integer can turn in to a float value if it exceeds the limit!</p>
<?php
$mil = 100000;
$bigNum = $mil*$mil;
var_dump($mil); // integer
var_dump($bigNum); // float
?>

<p> To convert Integer, read <a href="#">Type Juggling</a>.</p>

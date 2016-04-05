<h1>type-juggling</h1>
<pre>
<?php
$foo = '0';
var_dump($foo);
$foo +=2;
var_dump($foo);
$foo +=1.3;
var_dump($foo);
$foo = $foo + "3 Eggs.";
var_dump($foo);
$foo = "4 Eggs"+9;
var_dump($foo);
?>
</pre>

<h1>type-casting</h1>
<pre>
    <?php
    $foo = 111;
    $bar = 0;
    var_dump((binary)$foo);
    ?>
The casts allowed are:
(int), (integer) - cast to integer
(bool), (boolean) - cast to boolean
(float), (double), (real) - cast to float
(string) - cast to string
(array) - cast to array
(object) - cast to object
(unset) - cast to NULL (PHP 5)
(binary) casting and b prefix forward support was added in PHP 5.2.1
</pre>

<?php
$b = "binary";
$bb = (binary)$b; echo $bb;
$bbb = b'This is binary!';
echo $bbb;
?>
<!-- To Be Continued -->

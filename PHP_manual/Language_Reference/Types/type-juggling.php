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

<h1>type-juggling</h1>
<pre>
    <?php
    $foo = NULL;
    $bar = 0;
    var_dump((int)$foo);
    ?>

</pre>
<!-- To Be Continued -->

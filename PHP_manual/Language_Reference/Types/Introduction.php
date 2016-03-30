<!-- PHP Manual > Language Reference > Types -->
<?php
    $bool = TRUE;
    $int = 50;
    $float = 22.22;
    $string = "String";
?>
<pre>
PHP supports eight primitive types.

Four scalar types:

boolean = <?php var_dump($bool); ?>
integer = <?php var_dump($int); ?>
float (floating-point number, aka double)=<?php var_dump($float) ?>
string = <?php var_dump($string)?>
Two compound types:

array
object
And finally two special types:

resource
NULL
This manual also introduces some pseudo-types for readability reasons:

mixed
number
callback (aka callable)
array|object
void
And the pseudo-variable $....

Some references to the type "double" may remain in the manual. Consider double the same as float; the two names exist only for historic reasons.

The type of a variable is not usually set by the programmer; rather, it is decided at runtime by PHP depending on the context in which that variable is used.
</pre>

<?php
var_dump($bool);
?>
<!-- PHP Manual > Language Reference > Types -->
<?php
// some variable of different type to work with.
    $bool = TRUE; // booean
    $int = 50; // integer
    $float = 22.22; // floating poing
    $string = "String"; // String
?>
<pre>
PHP supports eight primitive types.

Four scalar types:
<strong> scalar values are values that you can't 'break' into smaller pieces, unlike arrays, for instance)
    </strong>
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
/**/
/**
 * Will generate a HTML line break.
 */
function br(){
    echo"<br>";
}
    echo gettype($bool); br();
    echo gettype($int); br();
    echo gettype($float); br();
    echo gettype($string);br();

// If this si an integer, Increment it by 4
if(is_int($int)){
    $int+=4;
    echo $int;
}

// if $bool is a string, print it out
// (dose not print out anything)

if(is_string($bool)){ // becomes false and will not execute!
    echo "String: $bool";
} else echo "<br> a boolean value will not execute this if"
?>
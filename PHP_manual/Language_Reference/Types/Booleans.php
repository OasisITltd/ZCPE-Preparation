<h1>Booleans</h1>
<?php

// Boolean are 'True' or 'False' and case insensitive.
$bool = true;
$bool2 = True;

$bool3 = False;
$bool4 = false;

if($bool == $bool2 && $bool3 == $bool4 ){
    echo "Both conditions are equal <br>";
}

if($bool){
    echo "It will evaluate! <br>";
}

if($bool3){
    echo "Condition is false!";
} else echo"Condition is not 'true' so Else is printing here"

?>

<h2>Checking 'bool' values with var_dump()</h2>
<pre>
<?php
var_dump((bool) "");    // false
var_dump((bool)0);      // false
var_dump((bool)1);      // true
var_dump((bool) -2);    // true
var_dump((bool) "foo"); // true
var_dump((bool)22.22);  // true
var_dump((bool)$bool);  // true
var_dump((bool) $bool4);// false

// take a close look at below examples
var_dump((bool) 'false');// true
var_dump((bool) 'False');// true

var_dump((bool) true);  //true
var_dump((bool) false);  //false
?>
</pre>
    <hr>
<pre>
<?php
var_dump(0);// int(0)
var_dump(0==(bool)'all'); // false
var_dump(0==True);// false
var_dump((bool)'all'); // true
var_dump((int)"all");// int(0)
var_dump(0=='all');
?>
</pre>
<hr>
<pre>
<?php
    $t = !0; // This will === true;
    $f = !1; // This will === false;

    var_dump($t);
    var_dump($f);
?>

</pre>
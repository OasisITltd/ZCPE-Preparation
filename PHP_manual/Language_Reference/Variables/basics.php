<h1>PHP Variable Basics</h1>
<p>
Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.
    </p>
<p>

Variable names follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thus: '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*'
</p>

<?php

$var = "a variable";

// $var_?? = "will not work!"; // is not a valid variable!

 echo $var;
// echo $var_??;
?>


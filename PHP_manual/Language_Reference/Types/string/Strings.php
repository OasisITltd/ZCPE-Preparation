<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 17-Apr-16
 * Time: 11:09 PM
 */

function html($a,$b ){
    echo "<$b> $a </$b>";
}
function br(){echo "<br>";}
$b = 'Learning about "String".';

html($b,"h1"); // <h1> Learning about "String".</h1>

echo 'This is a simple string.';
br();
echo " A string can
have multiple
line like this with newlines,
but will display in one line
on the browser.";

br();
echo ' Showing quote is \' tricky\' here!';
br();
echo 'To write a multiy line comment in
 php you have to use \\* commentd text *\\';

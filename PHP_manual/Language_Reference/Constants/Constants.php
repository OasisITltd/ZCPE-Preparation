<h1>Constant</h1>
<p>
    A constant is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). A constant is case-sensitive by default. By convention, constant identifiers are always uppercase.<br>

    The name of a constant follows the same rules as any label in PHP. A valid constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regular expression, it would be expressed thusly: [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*
</p>
<p>Example</p>

<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 10-Apr-16
 * Time: 12:47 AM
 */

define('FOO', 'Constant Foo!');
var_dump(FOO);
?>

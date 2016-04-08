<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 08-Apr-16
 * Time: 11:43 PM
 */

# normal declaration
$a = 'Hello';

var_dump($a);

#
$$a = 'World!';

var_dump($$a);

# My Try

$b = 'World!';

$$b = 'Where we live!';

echo '<br>';
echo '$$b = '. $$b;

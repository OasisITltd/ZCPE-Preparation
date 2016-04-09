
<p>PHP provides a large number of predefined constants to any script which it runs. Many of these constants, however, are created by various extensions, and will only be present when those extensions are available, either via dynamic loading or because they have been compiled in.</p>
<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 10-Apr-16
 * Time: 1:06 AM
 */

function br(){
    echo "<br>";
}

echo 'PHP_VERSION'; br();
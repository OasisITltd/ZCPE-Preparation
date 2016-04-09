
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
/*
 * First 2 will not work!*/
echo 'PHP_VERSION'; br();// PHP_Version
echo "PHP_VERSION"; br();// PHP_Version
echo 'PHP_VERSION = '.PHP_VERSION; br();// [shows current PHP version]
echo 'PHP_MAJOR_VERSION = '. PHP_MAJOR_VERSION ; br();
echo "PHP_MINOR_VERSION = ".PHP_MINOR_VERSION; br();
echo "PHP_RELEASE_VERSION = ".PHP_RELEASE_VERSION; br();
echo 'PHP_VERSION_ID = '.PHP_VERSION_ID; br();
echo 'PHP_EXTRA_VERSION = '.PHP_EXTRA_VERSION; br();
echo 'PHP_OS = '.PHP_OS; br();
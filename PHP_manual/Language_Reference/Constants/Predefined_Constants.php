<p>PHP provides a large number of predefined constants to any script which it runs. Many of these constants, however, are created by various extensions, and will only be present when those extensions are available, either via dynamic loading or because they have been compiled in.</p>
<?php
/**
 * Created by PhpStorm.
 * User: Mobarak
 * Date: 10-Apr-16
 * Time: 1:06 AM
 */

// on 12.56 AM April 13, 2016
// Error reporting constant
// //
br();
br();
echo 'E_ERROR = '. E_ERROR;  br();// 1 if TRUE
echo 'E_WARNING = '. E_WARNING;  br();//
echo 'E_ALL = '. E_ALL;  br();//

br();
br();
// on 12.00 AM April 12, 2016
br();
br();
echo 'PHP_CONFIG_FILE_PATH = '. PHP_CONFIG_FILE_PATH;  br();//
echo 'PHP_CONFIG_FILE_SCAN_DIR = '. PHP_CONFIG_FILE_SCAN_DIR;  br();//
echo 'PHP_SHLIB_SUFFIX = '. PHP_SHLIB_SUFFIX;  br();//

br();
br();

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

// on April 11, 2016 (Midnight of 10 April)
br();br();
echo 'PHP_ZTS = '.PHP_ZTS; br();//??
echo 'PHP_DEBUG = '.PHP_DEBUG; br();//??
echo 'PHP_MAXPATHLEN = '.PHP_MAXPATHLEN; br();//??
echo 'PHP_SAPI = '.PHP_SAPI; br();//??
echo 'PHP_EOL = '.PHP_EOL; br();//makes a line break in out put
echo 'PHP_INT_MAX = '.PHP_INT_MAX; br();//Max Integer value by a php, depends on machine
echo 'PHP_INT_MAX = '.PHP_INT_MAX; br();//Max Int

br(); br();
// Form April 11.30 PM
echo 'DEFAULT_INCLUDE_PATH = '.DEFAULT_INCLUDE_PATH; br();//
echo 'PEAR_INSTALL_DIR = '.PEAR_INSTALL_DIR; br();//
echo 'PEAR_EXTENSION_DIR = '. PEAR_EXTENSION_DIR;  br();//
echo 'PHP_PREFIX = '. PHP_PREFIX;  br();//
echo 'PHP_BINDIR = '. PHP_BINDIR;  br();//
echo 'PHP_MANDIR = '. PHP_MANDIR;  br();//
/*
 * PHP_MANDIR (string)
Specifies where the manpages were installed into. Available since PHP 5.3.7.
Don't have any idea about this.

*/

echo 'PHP_LIBDIR = '. PHP_LIBDIR;  br();//
echo 'PHP_DATADIR = '. PHP_DATADIR;  br();//
echo 'PHP_DATADIR = '. PHP_DATADIR;  br();//
echo 'PHP_SYSCONFDIR = '. PHP_SYSCONFDIR;  br();//
echo 'PHP_LOCALSTATEDIR = '. PHP_LOCALSTATEDIR;  br();//






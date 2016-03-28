<h1>Something Useful</h1>
<h3>Example #1 Printing a variable (Array element)</h3>
<?php echo $_SERVER['HTTP_USER_AGENT'];?>
<h3>Example #2 Example using control structures and functions</h3>
<?php
    if(strpos($_SERVER['HTTP_USER_AGENT'],'msie')!==false){
        echo"You are using Internet Explorer.";
    }


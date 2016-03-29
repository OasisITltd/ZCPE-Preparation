<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.';?>
<p> This will also be ignored by PHP and displayed by the browser.</p>

<!-- Example 1  Advanced escaping using condition -->
<?php if($expression == true): ?>
    This will show if the expressing is true.
<?php else: ?>
    Otherwise this will show.
<?php endif;?>

<!-- Example 2  PHP opening and closing Tags-->
1. <?php echo 'if you want to serve PHP cone in XHTML or XML docunents,
use these tags';?>
2.You can use teh short echo tag to <?='print this string' ?>.
It's always enable in PHP 5.4.0 and later, and is equivalent to
<?php echo'print this string' ?>.

3. <? echo 'this code is within short tags, but will only work '.
    'if short_open_tag is enabled';?>

4. <script language="php">
    echo 'some editors (like FrontPage) don\'t
    like processing instructions within these tags';
</script>
This syntax is removed in PHP 7.0.0.
5. <% echo 'You may optionally use ASP-style tags'; %>
Code within these tags <% = $variable; %> is a shortcut fot this code
<% echo $variable;%>
Both of these syntaxes are removed in PHP 7.0.0.

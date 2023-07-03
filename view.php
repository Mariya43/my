<?php
if(isset($_COOKIE['username']) && isset ($_COOKIE['userpass']))
{
    echo $_COOKIE['username'];
    echo '<br>';
    echo $_COOKIE['userpass'];
}
else
{
    echo 'not set';
}

?>
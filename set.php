<?php
if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['remember']))
{
    setcookie('username',$_POST['user'],time()+20);
    setcookie('userpass',$_POST['pass'],time()+20);
    setcookie('checkbox',$_POST['checked'],time()+20);

    header('location:view.php');

}
?>

<form action="set.php" method="post">
    Name:<input type="text" name="user" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>"/>
    <br><br>
    Pass:<input type="text" name="user" value="<?php if(isset($_COOKIE['userpass'])){echo $_COOKIE['userpass'];}?>"/>
    <br><br>
    Remember Me:<input type="checkbox" name="remember" value="<?php if(isset($_COOKIE ['checkbox'])){echo $_COOKIE['checkbox']}?>"/>
<br><br>
<input type="submit" name="submit" value="Submit"/>
</form>
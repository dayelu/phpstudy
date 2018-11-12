<?php
setcookie("cookieName1","cookieValue1",time()+3600);
setcookie("cookieName2","cookieValue2",time()+7200);
echo $_COOKIE['cookieName2']."<br/>";
print_r($_COOKIE);
?>
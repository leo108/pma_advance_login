<?php
if(!defined('PMA_ADVANCE_LOGIN')){
    echo "Attack";
    exit;
}
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>phpMyAdmin setup</title>
<link href="../favicon.ico" rel="icon" type="image/x-icon" />
<link href="../favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="../phpmyadmin.css.php" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../js/jquery/jquery-ui-1.11.4.min.js">
</script>
</head>
<body id='loginform'><div id="page_content">
    <div class="container">
    <a href="../url.php?url=https%3A%2F%2Fwww.phpmyadmin.net%2F" target="_blank" class="logo"><img src="../themes/pmahomme/img/logo_right.png" id="imLogo" name="imLogo" alt="phpMyAdmin" border="0" /></a>
       <h1>欢迎使用 <bdo dir="ltr" lang="en">phpMyAdmin</bdo></h1>
    <br />
    <!-- Login form -->
    <form method="post" action="index.php" name="login_form" class="disableAjax login">
        <fieldset>
        <legend>登录</legend>
        <div class="item">
            <label for="input_username">用户名：</label>
            <input type="text" name="pma_username" id="input_username" value="root" size="24" class="textfield"/>
        </div>
        <div class="item">
            <label for="input_password">密码：</label>
            <input type="password" name="pma_password" id="input_password" value="" size="24" class="textfield" />
        </div>   
        </fieldset>
        <fieldset class="tblFooters">
            <input value="执行" type="submit" id="input_go" />
        </fieldset>
    </form>
</div>
</div>
</body>
</html>

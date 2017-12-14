<!DOCTYPE html>
        <html lang="en">
        <head>
        <title>QSCMS - Panel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="Shortcut icon" href="../../assets/cms/qs2.ico" />
        <style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
        <script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
        </head>
        <body><center>
<div class="container">
    <div class="login_box">
        <div class="logo">
        <font color="#F05F40">QSCMS</font><font color="white" size="1px"> {$smarty.const.CMS_VERSION}</font>
        </div>
        <br>
        <form method="POST">
            <input type="text" name="user" class="form-control inp" id="usr"><br>
            <input type="password" name="pass" class="form-control inp" id="pwd"><br>
            <button type="submit" class="btn btn-default inp">Zaloguj</button>
        </form>
    </div>
</div>
</center>
</body>
</html>
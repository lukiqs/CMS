<?php /* Smarty version 3.1.24, created on 2017-06-02 07:57:22
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:819659311a6256ad40_90889931%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950c67541e4149fe90791c56780d1e76f770498e' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_login.tpl',
      1 => 1496390064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '819659311a6256ad40_90889931',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59311a6261a9e0_18423034',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59311a6261a9e0_18423034')) {
function content_59311a6261a9e0_18423034 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '819659311a6256ad40_90889931';
?>
<!DOCTYPE html>
        <html lang="en">
        <head>
        <title>QSCMS - Panel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <link rel="Shortcut icon" href="../../assets/cms/qs2.ico" />
        <style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
        <?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
        </head>
        <body><center>
<div class="container">
    <div class="login_box">
        <div class="logo">
        <font color="#F05F40">QSCMS</font><font color="white" size="1px"> <?php echo @constant('CMS_VERSION');?>
</font>
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
</html><?php }
}
?>
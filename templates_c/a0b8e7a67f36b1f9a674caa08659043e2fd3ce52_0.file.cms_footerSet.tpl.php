<?php /* Smarty version 3.1.24, created on 2017-06-01 22:16:07
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_footerSet.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56065930922770ee74_28097255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0b8e7a67f36b1f9a674caa08659043e2fd3ce52' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_footerSet.tpl',
      1 => 1496355344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56065930922770ee74_28097255',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5930922783bb39_61629655',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5930922783bb39_61629655')) {
function content_5930922783bb39_61629655 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56065930922770ee74_28097255';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-eject"></span> Stopka</h1>

<div class="input-group input-group-sm" title='Podpis będzie widoczny na stopce strony'>
    <span class="input-group-addon" id="sizing-addon3">Podpis</span>
    <input value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['description'];?>
" id='description'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Facebooku'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-facebook-official facebook" aria-hidden="true"></i></span>
    <input value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['facebook'];?>
" id='facebook'
        type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Twitter'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-twitter-square twitter" aria-hidden="true"></i></span>
    <input value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['twitter'];?>
" id='twitter'
        type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Google +'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-google-plus-square googlep" aria-hidden="true"></i></span>
    <input value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['googlep'];?>
" id='googlep'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Pinterest'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-pinterest-square pinterest" aria-hidden="true"></i></span>
    <input value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['pinterest'];?>
" id='pinterest'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Instagram'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-instagram insta" aria-hidden="true"></i></span>
    <input value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['instagram'];?>
" id='instagram'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Youtube'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-youtube-square youtube" aria-hidden="true"></i></span>
    <input value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['youtube'];?>
" id='youtube'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br><br>
<button type="button" class="btn btn-primary btn-xs" id='action_save'>
                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
<button type="button" class="btn btn-info btn-xs" title="Stopka znajduję się na dole strony" onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
index.php/article/contact')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>

<div class="ui-dialog-danger" id="dialog" title="Zapis">
  <center>
      <br>
    <p>Dane zostały zapisane</p>
    <br>  
  </center>
</div><?php }
}
?>
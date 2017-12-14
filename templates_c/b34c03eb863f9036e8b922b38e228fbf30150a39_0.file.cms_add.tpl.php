<?php /* Smarty version 3.1.24, created on 2017-05-29 16:19:05
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8133592c49f9a3f384_32910589%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34c03eb863f9036e8b922b38e228fbf30150a39' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_add.tpl',
      1 => 1496074744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8133592c49f9a3f384_32910589',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c49f9d11eb1_19932767',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c49f9d11eb1_19932767')) {
function content_592c49f9d11eb1_19932767 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8133592c49f9a3f384_32910589';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
 <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['art']['id'])) {?> edit = <?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['art']['id'];?>
; <?php }?>
<?php echo '</script'; ?>
>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<h1 class="page-header"><span class="glyphicon glyphicon-plus"></span> Dodaj/Edytuj artykuł</h1>
<br>
<input id='nameArt' type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['art']['name'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['art']['name'];
}?>" maxlength='250' aria-describedby="sizing-addon3" class="form-control" placeholder="Nazwa artykułu (nie widoczna na stronie)"><br>
<select id='categoryArt' aria-describedby="sizing-addon3" class="form-control">
    <option value='0'>Wybierz kategorię</option>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['per']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
        <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['per'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['name'])) {?>
            <option value='<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['per'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
' <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['art']['category']) && $_smarty_tpl->tpl_vars['_ci_vars']->value['art']['category'] == $_smarty_tpl->tpl_vars['_ci_vars']->value['per'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['per'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
        <?php }?>
    <?php endfor; endif; ?>
</select>
<div id="editor">
    <div id='edit' style="margin-top: 30px;">
        <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['art']['text'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['art']['text'];
}?>
    </div>

    <div id="preview" class="fr-view"></div>
  </div>
<br><br>
<button type="button" class="btn btn-success btn-small" id='action_addArticle'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>

<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"><?php echo '</script'; ?>
><?php }
}
?>
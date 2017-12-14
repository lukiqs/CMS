<?php /* Smarty version 3.1.24, created on 2017-05-29 15:42:43
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_report.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12509592c4173142ad3_27091447%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4df7c47a94e733f5fb6c7dbb8899776977124cce' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_report.tpl',
      1 => 1491422121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12509592c4173142ad3_27091447',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c41732ec7b3_57025031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c41732ec7b3_57025031')) {
function content_592c41732ec7b3_57025031 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12509592c4173142ad3_27091447';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Zgłoś błąd</h1>
<font size="1px">
Zgłaszając błąd opisz:<br>
- dokładnie problem<br>
- miejsce (np: link, podstronę, itp)
</font>

<br><br>
<textarea cols="70" rows="10" id='from_report'></textarea>
<br><br>

<button type="button" class="btn btn-primary btn-xs" id='action_send'>
    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Wyślij</button>
    
<div class="ui-dialog-danger" id="dialog" title="Zgłosznie">
   <center><br>
  <p>Wysłano zgłoszenie</p>
   </center>
</div><?php }
}
?>
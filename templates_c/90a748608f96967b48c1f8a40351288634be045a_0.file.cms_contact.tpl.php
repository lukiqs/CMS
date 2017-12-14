<?php /* Smarty version 3.1.24, created on 2017-06-02 08:31:05
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2909959312249c699b9_75706462%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90a748608f96967b48c1f8a40351288634be045a' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_contact.tpl',
      1 => 1496392263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2909959312249c699b9_75706462',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59312249db9907_27128375',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59312249db9907_27128375')) {
function content_59312249db9907_27128375 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2909959312249c699b9_75706462';
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
 src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ibgulg6qkbcn81a1rqkhzasi9yxx8pz0505gtnn12d6o5wik"><?php echo '</script'; ?>
>
<h1 class="page-header"><i class="fa fa-fax" aria-hidden="true"></i> Kontakt</h1>
<h3 class="">Kontakt (główny - pierwsza strona)</h3>
<font size='1px'>Kliknij w dany przycisk, aby edytować.</font><br><br>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('main_contact_home')">
        <font size='4px'><i class="fa fa-home" aria-hidden="true"></i></font></button>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('main_contact_phone')">
        <font size='4px'><i class="fa fa-phone" aria-hidden="true"></i></font></button>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('main_contact_envelope')">
        <font size='4px'><i class="fa fa-envelope-o" aria-hidden="true"></i></font></button>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('main_contact_bank')">
        <font size='4px'><i class="fa fa-university" aria-hidden="true"></i></font></button>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('main_contact_card')">
        <font size='4px'><i class="fa fa-credit-card" aria-hidden="true"></i></font></button>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('main_contact_clock')">
        <font size='4px'><i class="fa fa-clock-o" aria-hidden="true"></i></font></button>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('main_contact_text')">
        <font size='4px'><i class="fa fa-file-text-o" aria-hidden="true"></i></font></button>
<br><br>
<button type="button" class="btn btn-info btn-xs" onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
index.php/article/contact')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
<br>
<h3 class="">Kontakt (nasz zespół)</h3>
<font size='1px'>Zakładka nasz zespół jest podzielona na dwie kolumny. Należy edytować każdą kolumnę z osobna</font><br><br>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('team_contact_left')">
        <font size='4px'><i class="fa fa-columns" aria-hidden="true"></i> Kolumna lewa</font></button>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('team_contact_right')">
        <font size='4px'><i class="fa fa-columns" aria-hidden="true"></i> Kolumna prawa</font></button>    
<br><br>
<button type="button" class="btn btn-info btn-xs" onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
index.php/article/contact')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
<br>
<h3 class="">Kontakt (Pełnomocnicy SPSM w sprawie 1% odpisów)</h3>
    <button type="button" class="btn btn-warning btn-small" onclick="editMain('proxy_contact')">
        <font size='4px'><i class="fa fa-pencil" aria-hidden="true"></i> Edytuj</font></button>
<br><br>
<button type="button" class="btn btn-info btn-xs" onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
index.php/article/contact')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
        
<div class="ui-dialog-danger" id="dialog" title="Edytuj">
    
    <textarea id='edit'></textarea>
    <br>
    
   <button type="button" class="btn btn-warning btn-xs" id='action_saveEdit'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
    
<?php }
}
?>
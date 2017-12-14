<?php /* Smarty version 3.1.24, created on 2017-06-02 08:36:34
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_personalContact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:150275931239202fcf2_13114833%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea1affbfa112105c3d2ccccad97c8d0542fe0072' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_personalContact.tpl',
      1 => 1496392202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150275931239202fcf2_13114833',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5931239210e7b2_16431258',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5931239210e7b2_16431258')) {
function content_5931239210e7b2_16431258 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '150275931239202fcf2_13114833';
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

<h1 class="page-header"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Kontakt</h1>
<h3>Edycja</h3><br>
<div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Oddział</span>
        <input type="text" id='name' value="" class="form-control" placeholder='Oddział ... ' aria-describedby="sizing-addon3">
    </div>

<br>
<textarea id='edit'></textarea>
<h3>Mapa</h3>

<div id="googleMap" style="width:50%;height:400px;"></div>

<br> 
<button type="button" class="btn btn-primary btn-xs" id='action_save'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
    
<button type="button" title="Wybierz zakładkę odziały i odszukaj swój" class="btn btn-info btn-xs" onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
index.php/article/contact')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
        
<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARFHyntxWN8piyEnpvqO6hokTnKKb9Cms"><?php echo '</script'; ?>
><?php }
}
?>
<?php /* Smarty version 3.1.24, created on 2017-06-01 15:13:07
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/faq_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1860159302f0324f7d9_90841167%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d4b7c610cebe96e70d46be50253e0e6bdc18ec' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/faq_add.tpl',
      1 => 1496053892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860159302f0324f7d9_90841167',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59302f033b6e26_07721509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59302f033b6e26_07721509')) {
function content_59302f033b6e26_07721509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1860159302f0324f7d9_90841167';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-book"></span> FAQ</h1>
<h2>Dodaj artykuł</h2>
<img src="../../assets/faq/faq17.png" width="100%" /><br><br>

<div class="bor">
    Opis interfejsu. <strong>A</strong> - Nazwa artykułu (tylko w panelu), <strong>B</strong> - kategoria pod jaką ma 
    zostać podpięty artykuł, <strong>C</strong> - edytor, <strong>D</strong> - szybki podgląd, 
    <strong>E</strong> - przycisk dodawania.
</div>

<h2>Lista artykułów</h2>
<img src="../../assets/faq/faq18.png" width="100%" /><br><br>
<div class="bor">
    <strong>A</strong> - Podgląd artykułu , <strong>B</strong> - odpiecie (w przypadku kiedy nie chcemy usuwać i sprawić
    aby art. nie był widoczny), <strong>C</strong> - edycja, <strong>D</strong> - usuwanie.
</div>
<img src="../../assets/faq/faq19.png" width="100%" /><br><br>
<div class="bor">
    Na czerwono, artykuł.
</div>

<br><br>
 
 <button type="button" class="btn btn-info btn-xs" onclick="window.location='<?php echo @constant('URL_DOMAIN');?>
index.php/Tutorial/';">
        <i class="fa fa-reply" aria-hidden="true"></i> Powrót do dokumentacji</button><br><br><?php }
}
?>
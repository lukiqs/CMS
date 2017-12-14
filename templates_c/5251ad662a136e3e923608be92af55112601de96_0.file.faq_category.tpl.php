<?php /* Smarty version 3.1.24, created on 2017-05-29 15:42:30
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/faq_category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9607592c41667eece9_30038640%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5251ad662a136e3e923608be92af55112601de96' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/faq_category.tpl',
      1 => 1496053886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9607592c41667eece9_30038640',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c41668ae395_24590178',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c41668ae395_24590178')) {
function content_592c41668ae395_24590178 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9607592c41667eece9_30038640';
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
<h2>Kategorie</h2><br>

<img src="../../assets/faq/faq10.png"  width="100%"  /><br><br>

<div class="bor">
    Opis elementów interfejsu. <strong>A</strong> - nazwa kategorii, <strong>B</strong> - kategoria (w główym menu na stronie),
    <strong>C</strong> - adres URL, <strong>D</strong> - podgląd kategori na stronie, <strong>E</strong> - edycja kategorii,
    <strong>F</strong> - usuwanie kategorii.
</div>



<h3>Dodawanie kategorii</h3><br>
<img src="../../assets/faq/faq11.png"  width="100%"  /><br><br>
<div class="bor">
    Uzupełniamy nazwę <strong>A</strong>, następnie podpinamy pod kategorię (główną na stronie) <strong>B</strong> 
    i zatwierdzamy przyciskiem <strong>C</strong>.
</div>
<br>
<img src="../../assets/faq/faq12.png"  width="100%"  /><br><br>
<img src="../../assets/faq/faq13.png" width="100%" /><br><br>

<div class="bor">
    W niebieskiej ramce kategorie użytkownika podpięte do "MYŚLENICE" (głównej w menu). Na czerwono zaznaczona nowa 
    kategoria.
</div>

<h3>Dodawanie kategorii z linkiem (odnośnik)</h3><br>
<img src="../../assets/faq/faq14.png" width="100%" /><br><br>
<div class="bor">
    <font color="red">Artykuły podpiete pod taką kategorie nie będą widoczne !!! </font>
</div>
<br><br>
 
 <button type="button" class="btn btn-info btn-xs" onclick="window.location='<?php echo @constant('URL_DOMAIN');?>
index.php/Tutorial/';">
        <i class="fa fa-reply" aria-hidden="true"></i> Powrót do dokumentacji</button><br><br><?php }
}
?>
<?php /* Smarty version 3.1.24, created on 2017-05-29 15:42:26
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/faq_howStart.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25030592c4162429033_94955597%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53c6a4e93ed51f7bd326ff1b9ff06e9f7d740116' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/faq_howStart.tpl',
      1 => 1496053859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25030592c4162429033_94955597',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c4162507af6_65380320',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c4162507af6_65380320')) {
function content_592c4162507af6_65380320 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25030592c4162429033_94955597';
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
<h2>Jak zacząć ?</h2><br>

<h4>Menu górne</h4><br>
<img src="../../assets/faq/faq7.png" width="100%" /><br>

<br>

<div class="bor">
    Opis elementów. <strong>A</strong>- aktualna wersja aplikacji,
    <strong>B</strong> - FAQ Zbiór najważniejszych pytań i odpowiedzi (dokumentacja),
    <strong>C</strong> - Lista przebiegu aktualizacji, <strong>D</strong> - Formularz zgłaszania błędu, 
    <strong>E</strong> - informacje o aplikacji, <strong>F</strong> - przycisk wyloguj. 
</div>

 <br><br>
 
 <h4>Menu boczne</h4>
 <img src="../../assets/faq/faq8.png"    /><br><br>
 
 <div class="bor">
    Opis elementów. <strong>A</strong> - Zakładka kontakt 
    <font color="red">Uwaga jeżeli nie posiadasz kontaktu w swoim menu, oznacza to że nie posiadasz odpowiednich uprawnień!! 
    W kwesti zmiany uprawnień skontaktuj się z administratorem.</font> <strong>B</strong> - Dodawanie artykułu, 
    <strong>C</strong> -  Lista kategorii/ dodawanie kategorii, <strong>D</strong> - zarządzanie artykułami,
    <strong>E</strong> - dysk (dodawanie plików), <strong>F</strong> - ważne linki.
 </div>
 
 <br><br>
 
 <p><strong>Aby dowiedzieć się wiecej o zarządzaniu treścią, kliknij 'powrót do dokumentacji'.</strong></p>
 <br><br>
 
 <button type="button" class="btn btn-info btn-xs" onclick="window.location='<?php echo @constant('URL_DOMAIN');?>
index.php/Tutorial/';">
        <i class="fa fa-reply" aria-hidden="true"></i> Powrót do dokumentacji</button><br><br><?php }
}
?>
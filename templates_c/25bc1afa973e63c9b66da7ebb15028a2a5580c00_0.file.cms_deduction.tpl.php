<?php /* Smarty version 3.1.24, created on 2017-05-29 16:57:55
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_deduction.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30247592c5313073d29_91630258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25bc1afa973e63c9b66da7ebb15028a2a5580c00' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_deduction.tpl',
      1 => 1495564213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30247592c5313073d29_91630258',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c53131b4271_88892234',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c53131b4271_88892234')) {
function content_592c53131b4271_88892234 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30247592c5313073d29_91630258';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><i class="fa fa-pencil" aria-hidden="true"></i> Odpisy</h1>

<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Lp.</th>
                  <th>Dane benef.</th>
                  <th>Dane rachunku</th>               
                  <th>Dane rep.</th>
                  <th>Inne dane</th>
                  <th>Plik</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td><font size="1px">
                          <strong>IMIE NAZWISKO:</strong> Łukasz Kowalski <br>
                          <strong>NAZWA:</strong> Firma coś <br>
                          <strong>REGON:</strong>  <br>
                          <strong>NIP:</strong> 155-662-85-02<br>
                          <strong>ADRES:</strong> ul.Bobrownicza 2/34 <br>
                          <strong>TELEFON:</strong> 798106396<br>
                          <strong>WOJEWÓDZTWO:</strong> śląskie<br>
                          <strong>MIASTO:</strong> Katowice<br>
                          <strong>KOD POCZTOWY:</strong> 41-208<br>
                          <strong>EMAIL:</strong> lukiqs@gmail.com<br>
                          <strong>WWW:</strong> <br>
                          </font>
                      </td>
                      <td><font size="1px">
                          <strong>BANK:</strong> BZWBK - Bank Zachodni <br>
                          <strong>NAZWA:</strong> Firma cos fff <br>
                          <strong>NUMER:</strong> 8547 9658 9666 2214 5849 9685 7554 <br>
                          </font>
                      </td>
                      <td><font size="1px">
                          <strong>IMIE NAZWISKO:</strong> Łukasz Kowalski <br>
                          <strong>FUNKCJA:</strong> Dyrektor<br>
                          <strong>TELEFON:</strong> 798106396<br>
                          <strong>EMAIL:</strong> lukiqs@gmail.com<br>
                          </font>
                      </td>
                      <td><font size="1px">
                          <strong>REJ. JAKO:</strong> Klub sportowy (UKS) <br>
                          <strong>DOWIEDZIAŁ SIĘ:</strong> od osob uczestnicząych w akcji <br>
                          </font>
                      </td>
                      <td>
                          <button type="button" class="btn btn-info btn-xs" id=''>
                            <i class="fa fa-file-o" aria-hidden="true"></i></button>
                      </td>
                      <td>
                          <button type="button" class="btn btn-warning btn-xs" id=''>
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                      </td>
                      <td>
                          <button type="button" class="btn btn-danger btn-xs" id=''>
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                      </td>
                      <td>
                          <button type="button" class="btn btn-success btn-xs" id=''>
                            <i class="fa fa-check" aria-hidden="true"></i></button>
                      </td>
                  </tr>        
              </tbody>
            </table>
          </div><?php }
}
?>
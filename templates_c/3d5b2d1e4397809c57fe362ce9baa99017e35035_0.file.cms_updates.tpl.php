<?php /* Smarty version 3.1.24, created on 2017-06-02 07:49:31
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_updates.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:294245931188baf9059_12409343%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d5b2d1e4397809c57fe362ce9baa99017e35035' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_updates.tpl',
      1 => 1496389769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294245931188baf9059_12409343',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5931188bbd7b07_85237418',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5931188bbd7b07_85237418')) {
function content_5931188bbd7b07_85237418 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '294245931188baf9059_12409343';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-saved"></span> Aktualizacje</h1>
    
    <br><br>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Lp.</th>
                  <th>Nazwa</th>
                  <th>Wersja</th>
                  <th>Data utworzenia</th>  
                  <th>Data wdrożenia</th>                 
                  <th>Dostęp</th>
                  <th>Wsparcie techniczne</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="info">
                  <td></td>
                  <td>QSCMS</td>
                  <td>1.2.3.0</td>
                  <td>-</td> 
                  <td>-</td>
                  <td><span class="glyphicon glyphicon-remove"></span></td>
                  <td><span class="glyphicon glyphicon-remove"></span></td>
                  <td></td>
                </tr>
                <tr class="info">
                  <td></td>
                  <td>QSCMS</td>
                  <td>1.2.2.0</td>
                  <td>-</td> 
                  <td>-</td>
                  <td><span class="glyphicon glyphicon-remove"></span></td>
                  <td><span class="glyphicon glyphicon-remove"></span></td>
                  <td></td>
                </tr>
                <tr class="active">
                  <td>8</td>
                  <td>QSCMS</td>
                  <td>1.2.1.0</td>
                  <td>01-06-2017</td>   
                  <td>01-06-2017</td>
                  <td><span class="glyphicon glyphicon-ok"></span></td>
                  <td><span class="glyphicon glyphicon-ok"></span></td>
                  <td></td>
                </tr>
                <tr class="warning">
                  <td>7</td>
                  <td>QSCMS</td>
                  <td>1.1.9.0</td>
                  <td>06-01-2017</td> 
                  <td>01-04-2017</td>
                  <td><span class="glyphicon glyphicon-remove"></span></td>
                  <td><span class="glyphicon glyphicon-ok"></span></td>
                  <td></td>
                </tr>
                <tr class="warning">
                  <td>6</td>
                  <td>QSCMS</td>
                  <td>1.1.7.0</td>
                  <td>03-10-2016</td>     
                  <td>-</td>
                  <td><span class="glyphicon glyphicon-remove"></span></td>
                  <td><span class="glyphicon glyphicon-ok"></span></td>
                  <td></td>
                </tr>
                <tr class="danger">
                  <td>5</td>
                  <td>QSCMS</td>
                  <td>1.1.5.0</td>
                  <td>16-08-2016</td> 
                  <td>-</td>
                  <td><span class="glyphicon glyphicon-remove"></span></td>
                  <td><span class="glyphicon glyphicon-remove"></span></td>
                  <td></td>
                </tr>
                
              </tbody>
            </table>
          </div>

<?php }
}
?>
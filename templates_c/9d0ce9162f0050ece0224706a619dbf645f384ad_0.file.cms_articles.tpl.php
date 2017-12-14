<?php /* Smarty version 3.1.24, created on 2017-05-29 15:47:27
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_articles.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3325592c428f1a45d9_43983889%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0ce9162f0050ece0224706a619dbf645f384ad' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_articles.tpl',
      1 => 1496072845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3325592c428f1a45d9_43983889',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c428f4adc15_68656221',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c428f4adc15_68656221')) {
function content_592c428f4adc15_68656221 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3325592c428f1a45d9_43983889';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-duplicate"></span> Artykuły</h1>
<br>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Nazwa</th>                 
                  <th>W kategorii</th>
                  <th>Autor</th>
                  <th>Utworzone</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </thead> 
                <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['id'])) {?>
                <tr class="<?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['block'] == 0 && $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['error'] == FALSE) {?>
                    success<?php } elseif ($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['error'] == TRUE) {?>danger<?php }?>">
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['error'] == TRUE) {?>
                            <font color='red'>
                            <i title='Artykuł nie może być widoczny na stronie ponieważ, kategoria do której był podpięty 
                            została usunięta. Edytuj artukuł i nadaj mu istniejącą kategorię.' 
                            class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            </font>
                        <?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name_category'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name_user'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['created'];?>
</td>
                    <td>
                        <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['id_category']) && $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['block'] == 0) {?>
                        <button type="button" class="btn btn-info btn-xs" onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
index.php/Article/index/<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_category'];?>
')">
                        <i class="fa fa-search" aria-hidden="true"></i></button>
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['block'] == 1) {?>
                                <button title='Podepnij' onclick='link(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)' class="btn btn-success btn-xs">
                                <i class="fa fa-link" aria-hidden="true"></i> 
                                </button>
                        <?php } else { ?>
                        <button title='Opodepnij' onclick='block(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)' class="btn btn-danger btn-xs">
                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                        </button>
                        <?php }?>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-warning btn-xs" onclick="window.location='<?php echo @constant('URL_DOMAIN');?>
index.php/Add/index/<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
';">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-xs" onclick="deleteArt(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)" >
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
                    </td>
                </tr>
                <?php }?>
                <?php endfor; endif; ?>                           
              </tbody>
            </table>
</div>

<div class="ui-dialog-danger" id="dialog" title="Odepnij">
  <p style='line-height:90%;margin-top: 10px;'><strong>Chcesz odpiąć artykuł ?</strong><br><br>
  <font size='2px'>Po odpięciu, artykuł nie będzie widoczny na stronie. Zawsze możesz powrócić do ustawień, 
  klikając zieloną ikonę podpięcia.</font>
  </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_linkArt'>
    <i class="fa fa-chain-broken" aria-hidden="true"></i> Odepnij</button>
  <button type="button" class="btn btn-info btn-xs" id='action_link_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>

<div class="ui-dialog-danger" id="dialog2" title="Usuń">
  <p style='line-height:90%;margin-top: 10px;'><strong>Chcesz usunąć artykuł ?</strong><br><br>
  <font size='2px'>Po usunięciu, artykuł nie będzie widoczny na stonie i w panelu.
  Tej operacji nie da się cofnąć.</font>
  </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div><?php }
}
?>
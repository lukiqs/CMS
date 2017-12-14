<?php /* Smarty version 3.1.24, created on 2017-05-29 15:37:15
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_subCategory.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26896592c402b883300_14527751%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29749369ed9d3e50089d90cb9eca3a49e402db6b' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_subCategory.tpl',
      1 => 1495662479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26896592c402b883300_14527751',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c402bacd288_85515436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c402bacd288_85515436')) {
function content_592c402bacd288_85515436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26896592c402b883300_14527751';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-th-list"></span> Kategorie</h1>

<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nazwa podkategori</th>
                  <th>Podpięte pod</th>
                  <th>Link</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['list']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <tr>
                  <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parent_name'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
</td>
                  <td>
                      <button type="button" class="btn btn-info btn-xs" onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
index.php/Article/index/<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parent_id'];?>
')">
                        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
                  </td>
                  <td><button type="button" class="btn btn-warning btn-xs" 
                                                    onclick="editMenu(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
','','<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
',false)">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj</button></td>
                 <td><button type="button" class="btn btn-danger btn-xs" 
                                                    onclick="deleteMenu(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
                      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button></td>
                </tr>
                <?php endfor; endif; ?>
              </tbody>
            </table>
<br>
<button type="button" class="btn btn-success btn-xs" id='action_addDialog'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
                    
<div class="ui-dialog-danger" id="dialog" title="Dodaj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='addName' class="form-control" placeholder='Nazwa kategorii' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Podepnij do:</span>
    <select aria-describedby="sizing-addon3" class="form-control" id="addSubCat">
        <option></option>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['option']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['option'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']])) {?>
                <option><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['option'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option>
            <?php }?>
        <?php endfor; endif; ?>
    </select>
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Link</span>
    <input type="text" id='addUrl' class="form-control" placeholder='http://' aria-describedby="sizing-addon3">
  </div>

  <br><br>
  <button type="button" class="btn btn-success btn-xs" id='action_addCategory'>
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
</div>
    
<div class="ui-dialog-danger" id="dialog2" title="Edytuj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='editName' class="form-control" placeholder='Nazwa kategorii' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm" id="editSubCatV">
    <span class="input-group-addon" id="sizing-addon3">Dodaj do:</span>
    <select aria-describedby="sizing-addon3" class="form-control" id="editSubCat">
        <option></option>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['option']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['option'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']])) {?>
                <option><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['option'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option>
            <?php }?>
        <?php endfor; endif; ?>
    </select>
  </div><br>
  <div class="input-group input-group-sm" id='editUrlV'>
    <span class="input-group-addon" id="sizing-addon3">Link</span>
    <input type="text" id='editUrl' class="form-control" placeholder='http://' aria-describedby="sizing-addon3">
  </div>

  <br><br>
  <button type="button" class="btn btn-warning btn-xs" id='action_saveEdit'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
    
<div class="ui-dialog-danger" id="dialog3" title="Usuń">
    <p>Chcesz usunąć tą podkategorie ? </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div><?php }
}
?>
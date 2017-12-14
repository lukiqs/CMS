<?php /* Smarty version 3.1.24, created on 2017-05-29 16:58:35
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_events.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19907592c533b1ad771_44135303%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa84144f7a18f1a093e74552f027d9a65ab75421' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_events.tpl',
      1 => 1495661844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19907592c533b1ad771_44135303',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c533b3d4475_96802998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c533b3d4475_96802998')) {
function content_592c533b3d4475_96802998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19907592c533b1ad771_44135303';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-calendar"></span> Wydarzenia</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Tytuł</th>                 
                  <th>Treść</th>
                  <th>Data</th>
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
                    <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>
</td>
                    <td><button type="button" class="btn btn-warning btn-xs" 
                                onclick="editEvent(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
','<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
','<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>
')">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj</button>
                    </td>
                    <td><button type="button" class="btn btn-danger btn-xs" onclick="deleteEvent(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
                    </td>
                    </tr>                
                    <?php }?>
                <?php endfor; endif; ?>
              </tbody>
            </table>
          </div>
              <button type="button" class="btn btn-success btn-xs" id="action_addEvent">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
              <button type="button" class="btn btn-info btn-xs" title="Odszukaj slajd z wtyczką wydarzenia." onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
                    
<div class="ui-dialog-danger" id="dialog" title="Usuń">
  <p>Usunąć wydarzenie ?</p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_deleteCancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>

<div class="ui-dialog-danger" id="dialog2" title="Dodaj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Tytuł</span>
    <input maxlength="50" type="text" id='addTitle' class="form-control" placeholder='Tytuł' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm" style="height: 100px">
    <span class="input-group-addon" id="sizing-addon3">Treść:</span>
    <textarea maxlength="250" style="height: 100px" aria-describedby="sizing-addon3" class="form-control" id="addContent"></textarea>
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Data</span>
    <input type="date" id='addDate' class="form-control" placeholder='' aria-describedby="sizing-addon3">
  </div>

  <br><br>
  <button type="button" class="btn btn-success btn-xs" id='action_add'>
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
</div>
              
<div class="ui-dialog-danger" id="dialog3" title="Edytuj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input maxlength="50" type="text" id='editTitle' class="form-control" placeholder='Nazwa kategorii' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm" style="height: 100px">
    <span class="input-group-addon" id="sizing-addon3">Treść:</span>
    <textarea maxlength="250" style="height: 100px" aria-describedby="sizing-addon3" class="form-control" id="editContent"></textarea>
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Data</span>
    <input type="date" id='editDate' class="form-control" placeholder='' aria-describedby="sizing-addon3">
  </div>

  <br><br>
  <button type="button" class="btn btn-warning btn-xs" id='action_editEvent'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div><?php }
}
?>
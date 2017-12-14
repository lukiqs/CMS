<?php /* Smarty version 3.1.24, created on 2017-05-29 16:57:52
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_users.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4326592c5310a79b42_21733462%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc260eb136fa99545a19bb3898ac290f696c8f0e' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_users.tpl',
      1 => 1495716607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4326592c5310a79b42_21733462',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c5310f0da60_49858643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c5310f0da60_49858643')) {
function content_592c5310f0da60_49858643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4326592c5310a79b42_21733462';
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
>
    var idsCategory = [0
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['permissions']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
        <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['name'])) {?>
            ,<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>

            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['name'] = 'k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subCategory']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total']);
?>
            ,<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subCategory'][$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['id'];?>

            <?php endfor; endif; ?>
        <?php }?>
    <?php endfor; endif; ?>
    ];
<?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-user"></span> Użytkownicy</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Nazwa</th>
                  <th>Email</th>
                  <th>Tel</th>               
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['user']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['name'])) {?>
                    <tr class="<?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active'] == 0) {?>danger<?php } else { ?>info<?php }?>">
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'] == 1) {?><i class="fa fa-male" aria-hidden="true" title='Administrator'></i><?php }?>
                            
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['mail'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['phone'];?>
</td>                 
                        <td><button type="button" class="btn btn-warning btn-xs" 
                                    onclick="editUser(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
,
                                                '<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
',
                                                '<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['mail'];?>
','<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['phone'];?>
',<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'];?>
)">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                        </td>
                        <td>
                            <button type="button" class="btn <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contact'] == 1) {?>btn-success<?php }?> btn-xs" onclick="contact(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
,<?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contact'] == 1) {?>0<?php } else { ?>1<?php }?>)">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true" title='Osoba odpowiedzialana za kontakt'></span></button>
                        </td>
                        <td><button type="button" class="btn btn-info btn-xs" onclick="setPermissions(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true" title='Nadaj uprawnienia'></span></button>
                        </td>
                        <td>
                            <form method="POST">
                                <input type='hidden' name='<?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active'] == 0) {?>unlock<?php } else { ?>lock<?php }?>' value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
                                <button type="submit" class="btn btn-primary btn-xs">
                                <i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['active'] == 0) {?>unlock-alt<?php } else { ?>lock<?php }?>" aria-hidden="true"></i> 
                                </button>
                            </form>
                        </td>
                        <td><button type="button" class="btn btn-danger btn-xs" onclick="deleteUser(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['user'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                        </td>
                    </tr>
                    <?php }?>
                <?php endfor; endif; ?>                
              </tbody>
            </table>
          </div>
          <button type="button" class="btn btn-success btn-xs" id='action_addDialog'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj użytkownika</button>
                    
<div class="ui-dialog-danger" id="dialog" title="Usuń">
  <p>Usunąć użytkownika ?</p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>

<div class="ui-dialog-danger" id="dialog2" title="Dodaj użytkownika">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='addName' class="form-control" placeholder='Nazwa konta' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Email</span>
    <input type="text" id='addEmail' class="form-control" placeholder='email@exp.pl' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Telefon</span>
    <input type="text" id='addPhone' class="form-control" placeholder='48785242256' aria-describedby="sizing-addon3">
  </div><br>
   
  <button class="switch" id="action_setAdmin"><font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Administrator</button>
  <br><br>
  <button type="button" class="btn btn-success btn-xs" id='action_addUser'>
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
</div>
              
<div class="ui-dialog-danger" id="dialog3" title="Edycja">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='editName' class="form-control" placeholder='Nazwa konta' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Email</span>
    <input type="text" id='editEmail' class="form-control" placeholder='email@exp.pl' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Telefon</span>
    <input type="text" id='editPhone' class="form-control" placeholder='48785242256' aria-describedby="sizing-addon3">
  </div><br>
   
  <button class="switch" id="action_setAdminEdit"><font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Administrator</button>
  <br><br>
  <button type="button" class="btn btn-warning btn-xs" id='action_saveEdit'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
              
<div class="ui-dialog-danger" id="dialog4" title="Nadaj uprawnienia">
  <br>
  
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['permissions']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
  <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['name'])) {?>
    <div class="input-group">
      <span class="input-group-addon">
        <input name="per_<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" id='per_<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
' type="checkbox" aria-label="...">
      </span>
      <input readonly="" type="text" class="form-control" aria-label="" value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
">
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['name'] = 'k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subCategory']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total']);
?>
        <div class="input-group" style="margin-left:20px;">
            <span class="input-group-addon">
                <input name="per_<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subCategory'][$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['id'];?>
" id="per_<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subCategory'][$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['id'];?>
" type="checkbox" aria-label="...">
            </span>
            <input readonly="" type="text" class="form-control" aria-label="" value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['permissions'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subCategory'][$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']]['name'];?>
">
        </div>
    <?php endfor; endif; ?>
  <?php }?>
  <?php endfor; endif; ?>
  <br><br>
  <button type="button" class="btn btn-info btn-xs" id='action_savePermissions'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div><?php }
}
?>
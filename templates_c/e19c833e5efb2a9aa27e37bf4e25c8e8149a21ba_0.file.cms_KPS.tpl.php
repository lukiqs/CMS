<?php /* Smarty version 3.1.24, created on 2017-05-29 16:58:04
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_KPS.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24788592c531c2332c6_65519891%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e19c833e5efb2a9aa27e37bf4e25c8e8149a21ba' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_KPS.tpl',
      1 => 1495661000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24788592c531c2332c6_65519891',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c531c4afed2_09909640',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c531c4afed2_09909640')) {
function content_592c531c4afed2_09909640 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24788592c531c2332c6_65519891';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><i class="fa fa-users" aria-hidden="true"></i> Klub Przodujących Szkół</h1>

<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Lp.</th>
                  <th>Nazwa</th>
                  <th>Adres</th>               
                  <th>Telefon</th>
                  <th>Email</th>
                  <th>WWW</th>
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
                      <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['address'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['phone'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['mail'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['www'];?>
</td>
                      <td>
                          <button type="button" class="btn btn-warning btn-xs" 
                                  onclick="editKPS(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
,
                                              '<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
',
                                              '<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['address'];?>
',
                                              '<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['phone'];?>
',
                                              '<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['mail'];?>
',
                                              '<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['www'];?>
')">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                      </td>
                      <td>
                          <button type="button" class="btn btn-danger btn-xs" onclick="deleteKPS(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                      </td>
                  </tr>  
                  <?php }?>
                  <?php endfor; endif; ?>
              </tbody>
            </table>
          </div>

<button type="button" class="btn btn-success btn-xs" id='action_add'>
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
    

<div class="ui-dialog-danger" id="dialog" title="Dodaj">
  <br>
  <form method="POST">
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
        <input type="text" name='name' class="form-control" placeholder='Nazwa szkoły' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Adres</span>
        <input type="text" name='address' class="form-control" placeholder='Adres' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Telefon</span>
        <input type="text" name='phone' class="form-control" placeholder='Telefon' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Email</span>
        <input  type="text" name='mail' class="form-control" placeholder='Email' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">WWW</span>
        <input  type="text" name='www' class="form-control" placeholder='Adres strony WWW' aria-describedby="sizing-addon3">
    </div><br>
    
    <br><br>
    <button type="submit" class="btn btn-success btn-xs" id=''>
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
  </form>
</div>
              
<div class="ui-dialog-danger" id="dialog2" title="Edytuj">
  <br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
        <input type="text" id='name' class="form-control" placeholder='Nazwa szkoły' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Adres</span>
        <input type="text" id='address' class="form-control" placeholder='Adres' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Telefon</span>
        <input type="text" id='phone' class="form-control" placeholder='Telefon' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Email</span>
        <input  type="text" id='mail' class="form-control" placeholder='Email' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">WWW</span>
        <input  type="text" id='www' class="form-control" placeholder='Adres strony WWW' aria-describedby="sizing-addon3">
    </div><br>
    
    <br><br>
    <button class="btn btn-warning btn-xs" id='edit'>
        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
  </form>
</div>
              
<div class="ui-dialog-danger" id="dialog3" title="Usuń">
  <p style='line-height:90%;margin-top: 10px;'><strong>Chcesz usunąć ten wpis ?</strong><br><br>
  <font size='2px'>Tej operacji nie da się już cofnąć.</font>
  </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div><?php }
}
?>
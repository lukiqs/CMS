<?php /* Smarty version 3.1.24, created on 2017-05-29 16:58:31
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21874592c5337c4f627_74664038%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '181858c4b5cba4662d18446880e6a9e99d2ee183' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_slider.tpl',
      1 => 1495661753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21874592c5337c4f627_74664038',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c5337f06bc4_45781986',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c5337f06bc4_45781986')) {
function content_592c5337f06bc4_45781986 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21874592c5337c4f627_74664038';
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
    var sortArray = [0<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['id'])) {?>,<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];
}
endfor; endif; ?>];
<?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-blackboard"></span> Pokaz</h1>
          <div class="table-responsive">
            <table class="table table-striped fixed-width-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Rodzaj tła</th>
                  <th>Wtyczka</th>
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
                    <tr id='<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
'>
                        <td>Ekran <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] == 1) {?>
                                <span class="glyphicon glyphicon-picture"></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] == 2) {?>
                                <span class="glyphicon glyphicon-facetime-video"></span>
                            <?php } else { ?>
                                <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                            <?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'];?>
</td>
                        <td><button type="button" class="btn btn-warning btn-xs" onclick='editScreen(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'];?>
,"<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nameFile'];?>
","<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
")'>
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj</button>
                        </td>  
                        <td><button type="button" class="btn btn-info btn-xs" onclick="pluginScreen(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
                            <i class="fa fa-plug" aria-hidden="true"></i> Wtyczka</button></td>                  
                        <td><button type="button" class="btn btn-danger btn-xs" onclick="deleteScreen(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button></td>
                    </tr> 
                <?php }?>
                <?php endfor; endif; ?>                
              </tbody>
            </table>
          </div>
              <button type="button" class="btn btn-success btn-xs" id="action_addScreen">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj ekran</button>
          <button type="button" class="btn btn-primary btn-xs" id='action_save'>
                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz kolejność</button> 
          <button type="button" class="btn btn-info btn-xs" onclick="window.open('<?php echo @constant('URL_DOMAIN');?>
')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
          
          
          
            
                    
<div class="ui-dialog-danger" id="dialog" title="Usuń">
  <p>Usunąć ekran ?</p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id="action_delete">
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" onclick='$( "#dialog" ).dialog( "close" )'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>
          
<div class="ui-dialog-danger" id="dialog2" title="Edytuj">
  <br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Rodzaj tła</span>
        <select id='typeBgEdit' onchange='loadFileList(false)' class="form-control"  aria-describedby="sizing-addon3">
            <option value="0">Brak</option>
            <option value='1'>Zdjęcie</option>
            <option value="2">Film</option>
        </select>
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Tło</span>
        <select id='editFiles' class="form-control"  aria-describedby="sizing-addon3">
            
        </select>
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Opis</span>
        <input id="editContent" maxlength="100" type="text" name='uploadName' class="form-control" placeholder='Opis' aria-describedby="sizing-addon3">
    </div><br>
  
    

    <br><br>
    <button type="button" class="btn btn-warning btn-xs" id='edit_screen'>
        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
          
<div class="ui-dialog-danger" id="dialog3" title="Dodaj ekran">
  <br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Rodzaj tła</span>
        <select id='typeBg' onchange='loadFileList(true)' class="form-control"  aria-describedby="sizing-addon3">
            <option value="0">Brak</option>
            <option value='1'>Zdjęcie</option>
            <option value="2">Film</option>
        </select>
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Tło</span>
        <select id='addFiles' class="form-control"  aria-describedby="sizing-addon3">
            
        </select>
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Opis</span>
        <input id="addContent" maxlength="100" type="text" name='uploadName' class="form-control" placeholder='Opis' aria-describedby="sizing-addon3">
    </div><br>
  
    

    <br><br>
    <button type="button" class="btn btn-success btn-xs" id='add_screen'>
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>

</div>
          
<div class="ui-dialog-danger" id="dialog4" title="Wybór wtyczki">
  <br>
  <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Wtyczka</span>
        <select id='plug' class="form-control"  aria-describedby="sizing-addon3">
            
        </select>
    </div>
  <br>
  <button type="button" class="btn btn-info btn-xs" id="action_plugin">
      <i class="fa fa-plug" aria-hidden="true"></i> Podepnij</button>
  <button type="button" class="btn btn-danger btn-xs" id="action_plugout">
      <i class="fa fa-times" aria-hidden="true"></i> Odepnij</button>
</div>
          
          <?php }
}
?>
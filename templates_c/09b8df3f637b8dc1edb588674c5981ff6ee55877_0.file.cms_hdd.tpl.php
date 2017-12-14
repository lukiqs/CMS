<?php /* Smarty version 3.1.24, created on 2017-05-29 16:31:24
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_hdd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15642592c4cdca68ee6_38432247%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b8df3f637b8dc1edb588674c5981ff6ee55877' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/cms_hdd.tpl',
      1 => 1495656237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15642592c4cdca68ee6_38432247',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c4cdd3354c9_57353651',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c4cdd3354c9_57353651')) {
function content_592c4cdd3354c9_57353651 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15642592c4cdca68ee6_38432247';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<h1 class="page-header"><span class="glyphicon glyphicon-hdd"></span> Dysk</h1>
          
          <br>          
          <button type="button" class="btn btn-default btn-xs" 
                  onclick="location.href='<?php echo @constant('URL_DOMAIN');?>
index.php/Disc/index/fa fa-file-video-o'">
            <i class="fa fa-file-video-o" aria-hidden="true"></i> Pliki video</button>
          <button type="button" class="btn btn-default btn-xs"
                  onclick="location.href='<?php echo @constant('URL_DOMAIN');?>
index.php/Disc/index/fa fa-file-image-o'">
            <i class="fa fa-file-image-o" aria-hidden="true"></i> Pliki graficzne</button>
          <button type="button" class="btn btn-default btn-xs"
                  onclick="location.href='<?php echo @constant('URL_DOMAIN');?>
index.php/Disc/index/fa fa-file-archive-o'">
            <i class="fa fa-file-archive-o" aria-hidden="true"></i> Archiwa</button>
          <button type="button" class="btn btn-default btn-xs"
                  onclick="location.href='<?php echo @constant('URL_DOMAIN');?>
index.php/Disc/index/fa fa-file-o'">
            <i class="fa fa-file-o" aria-hidden="true"></i> Inne pliki</button>
          <br><br>
          
          <button type="button" class="btn btn-default btn-xs" 
                  onclick="location.href='<?php echo @constant('URL_DOMAIN');?>
index.php/Disc/'">
            <i class="fa fa-file" aria-hidden="true"></i> Wszystkie pliki</button>
          <br><br>
          <button type="button" class="btn btn-success btn-xs" id='action_upload'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj plik</button>
                    
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Lp.</th>
                  <th></th>                 
                  <th>Nazwa</th>
                  <th>Udostępnione</th>
                  <th>przez</th>
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
                    <tr>
                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'];?>
</td>
                    <td>  
                        <i class="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'];?>
" aria-hidden="true"></i>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['created'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['user'];?>
</td>
                    <td>
                        <?php if ($_SESSION['x9eA'] == 1) {?>
                        <button type="button" class="btn btn-danger btn-xs" onclick="deleteFile(<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
                        <?php }?>
                    </td>
                    <td><button type="button" class="btn btn-warning btn-xs" 
                                onclick="showLink('<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
','<?php echo @constant('URL_DOMAIN');?>
assets/hdd/<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
')">
                        <span class="glyphicon glyphicon-link" aria-hidden="true"></span> Link</button>
                    </td>
                    <td><button type="button" class="btn btn-primary btn-xs" onclick="location.href='<?php echo @constant('URL_DOMAIN');?>
assets/hdd/<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
'">
                        <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Pobierz</button>
                    </td>
                    </tr> 
                  <?php }?>
                <?php endfor; endif; ?>                
              </tbody>
            </table>
          </div>
          

<div class="ui-dialog-danger" id="dialog" title="Usuń">
  <p>Usunąć plik ?</p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_deleteCancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>
          
<div class="ui-dialog-danger" id="dialog2" title="Link">
   <center><br>
  <p>Skopiowano link</p>
   </center>
</div>
                
<div class="ui-dialog-danger" id="dialog3" title="Dodaj plik">
  <br>
  <form method="POST" ENCTYPE="multipart/form-data">
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
        <input maxlength="50" type="text" name='uploadName' class="form-control" placeholder='Nazwa pliku' aria-describedby="sizing-addon3">
    </div><br>
  
    <input type="file" name='uploadFile' class="form-control" placeholder='' aria-describedby="sizing-addon3">

    <br><br>
    <button type="submit" class="btn btn-success btn-xs" id='action_add'>
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
  </form>
</div><?php }
}
?>
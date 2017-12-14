<?php /* Smarty version 3.1.24, created on 2017-05-29 15:30:02
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/art_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27227592c3e7ad856c1_08649559%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906dbf61b009433ca14044bc788d7d0738dcd7e1' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/art_footer.tpl',
      1 => 1495971007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27227592c3e7ad856c1_08649559',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c3e7b010231_39740485',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c3e7b010231_39740485')) {
function content_592c3e7b010231_39740485 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:/Program Files/VertrigoServ/www/SPSM/system/libraries/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '27227592c3e7ad856c1_08649559';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<footer class="footer">
      <div class="container footer_design">
          <h3>
          
          
          <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['facebook'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['facebook'];?>
" class="sociable facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['twitter'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['twitter'];?>
" class="sociable twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['googlep'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['googlep'];?>
" class="sociable googlep"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['pinterest'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['pinterest'];?>
" class="sociable pinterest"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['instagram'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['instagram'];?>
" class="sociable insta"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['youtube'] != '') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['youtube'];?>
" class="sociable youtube"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
          <?php }?>
          <br>
          <font size="1px"><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['description'];?>
</font>
          </h3>
          <center>
              <font size="1px">
                  Copyright &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 by QS. Wszelkie prawa zastrzeżone.<br>
                  
              </font>
          </center>
      </div>
    <br>
</footer>
</body>
</html><?php }
}
?>
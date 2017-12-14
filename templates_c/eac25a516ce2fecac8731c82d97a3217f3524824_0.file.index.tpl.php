<?php /* Smarty version 3.1.24, created on 2017-05-29 20:53:51
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15574592c8a5f841e98_24585081%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eac25a516ce2fecac8731c82d97a3217f3524824' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/index.tpl',
      1 => 1496091229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15574592c8a5f841e98_24585081',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c8a5fd79ed2_35834644',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c8a5fd79ed2_35834644')) {
function content_592c8a5fd79ed2_35834644 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15574592c8a5f841e98_24585081';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['index']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['id'])) {?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']-1;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'] == 1) {?>class="active"<?php }?> ></li>
            <?php }?>
        <?php endfor; endif; ?>
      </ol>
      
      
      <div class="carousel-inner" role="listbox" >
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['_ci_vars']->value['index']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['id'])) {?>
                <div class="item<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration'] == 1) {?> active<?php }?>" style="background-color:white;">
                    <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] == 1) {?>
                        <img class="second-slide" style="height: 100%;" src="assets/hdd/<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
">
                        <div class="container">  
                            <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "Wydarzenia") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_events.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
                           
                            <?php }?>
                            <div class="carousel-caption">
                                <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "KPS") {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_KPS.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                                <?php } elseif ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "Artykuły") {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_articles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <?php }?>
                                <?php if (mb_strlen($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'], 'UTF-8') < 60) {?><h1><?php } else { ?><h3><?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>

                                <?php if (mb_strlen($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'], 'UTF-8') < 60) {?></h1><?php } else { ?></h3><?php }?>
                            </div>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] == 2) {?>
                        <video id="bg" autoplay="autoplay" muted="" loop="loop" style="width: 100%;">
                            <source src="assets/hdd/<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
"  />
                        </video>
                        <div class="container"> 
                            <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "Wydarzenia") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_events.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                            <?php }?>
                            <div class="carousel-caption">
                                <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "KPS") {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_KPS.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "Artykuły") {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_articles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <?php }?>
                                <?php if (mb_strlen($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'], 'UTF-8') < 60) {?><h1><?php } else { ?><h3><?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>

                                <?php if (mb_strlen($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'], 'UTF-8') < 60) {?></h1><?php } else { ?></h3><?php }?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="container">   
                            <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "Wydarzenia") {?>
                                <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_events.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                            <?php }?>
                            <div class="carousel-caption">
                                <?php if ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "KPS") {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_KPS.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
                                <?php } elseif ($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['plugin'] == "Artykuły") {?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('application/views/plug_articles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                <?php }?>
                                <?php if (mb_strlen($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'], 'UTF-8') < 60) {?><h1><?php } else { ?><h3><?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>

                                <?php if (mb_strlen($_smarty_tpl->tpl_vars['_ci_vars']->value['index'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'], 'UTF-8') < 60) {?></h1><?php } else { ?></h3><?php }?>
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
        <?php endfor; endif; ?>  
      </div>
          
          
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control"  href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
          
    </div><!-- /.carousel -->
    
    <?php echo '<script'; ?>
>
        var video = document.getElementById('bg');
        video.volume = 0.2;
        $('.carousel').carousel({
            interval: 1000 * 10
        }); 
    <?php echo '</script'; ?>
><?php }
}
?>
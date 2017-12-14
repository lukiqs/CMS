<?php /* Smarty version 3.1.24, created on 2017-05-29 16:42:16
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14751592c4f685dfc31_52482615%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '907c2e7d123448a15665302c1ff3fead238c6e88' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/contact.tpl',
      1 => 1496075907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14751592c4f685dfc31_52482615',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_592c4f68908679_61033333',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c4f68908679_61033333')) {
function content_592c4f68908679_61033333 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14751592c4f685dfc31_52482615';
?>
<style><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['css'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['css'];
}?></style>
<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['js'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['js'];
}?><?php echo '</script'; ?>
>
<div class="container">
    <br><br><br><br>
    
</div>

<div class="container">
    <br>
    <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Kontakt</a></li>
    <li><a href="#tabs-2">Nasz zespół</a></li>
    <li><a href="#tabs-3">Oddziały powiatowe</a></li>
    <li><a href="#tabs-4">Pełnomocnicy SPSM w sprawie 1% odpisów</a></li>
    <li><a href="#tabs-5">Napisz do nas</a></li>
  </ul>
  <div id="tabs-1">
    <br><br>
    <div class="row">
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-home" aria-hidden="true"></i></font><br>
                <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_home'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_home'];
}?>
            </center>
        </div>
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-phone" aria-hidden="true"></i></font><br>
                <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_phone'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_phone'];
}?>
            </center>
        </div>
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-envelope-o" aria-hidden="true"></i></font><br>
                <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_envelope'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_envelope'];
}?>
            </center>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-university" aria-hidden="true"></i></font><br>
                <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_bank'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_bank'];
}?>
            </center>
        </div>
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-credit-card" aria-hidden="true"></i></font><br>
                <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_card'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_card'];
}?>
            </center>
        </div>
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-clock-o" aria-hidden="true"></i></font><br>
                <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_clock'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_clock'];
}?>
            </center>
        </div>
    </div>
    <br><br>
    <div class="row">        
            <center>
                <font size='10px'><i class="fa fa-file-text-o" aria-hidden="true"></i></font><br>
                <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_text'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['main_contact_text'];
}?>
            </center>
    </div>
    <br><br><br><br><br><br>
  </div>
  <div id="tabs-2">
      <br><br>
      <div class="row">
          <div class="col-lg-5">
              <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['team_contact_left'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['team_contact_left'];
}?>
          </div>
          <div class="col-lg-5">
              <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['team_contact_right'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['team_contact_right'];
}?>
          </div>
      </div>
      <br><br><br><br><br><br>
  </div>
  <div id="tabs-3">
    <br><br>
    <select id="selectContact" class="contact" onchange="contPer()">
        <option value="0">Wybierz</option>
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
            <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['name'])) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['_ci_vars']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
            <?php }?>
        <?php endfor; endif; ?>
    </select>
    <br>
      <div class="row"> 
          <br><br>
          <div id="contactData" class="col-lg-5" >              
          </div>
          <div class="col-lg-5">
              <div id="googleMap" style="width:100%;height:400px;"></div>
          </div>
      </div>
      <br><br><br><br><br><br>
  </div>
  <div id="tabs-4">
      <br><br>
      <div class="row" style="padding-left: 20px;">  
          <?php if (isset($_smarty_tpl->tpl_vars['_ci_vars']->value['proxy_contact'])) {
echo $_smarty_tpl->tpl_vars['_ci_vars']->value['proxy_contact'];
}?>
      </div> 
      <br><br><br><br><br><br>
  </div>
  <div id="tabs-5"><br>
      <h3>Napisz do nas</h3>
      <form method="POST">
          <br>
          <input type="text" name="name" class="form-control register" placeholder="Imię i nazwisko (wymagane)" aria-describedby="basic-addon1">
          <input type="text" name="mail" class="form-control register" placeholder="Adres email (wymagane)" aria-describedby="basic-addon1">
          <input type="text" name="topic" class="form-control register" placeholder="Temat" aria-describedby="basic-addon1">
          <textarea name="message" class="register" placeholder="Wiadomość" rows="7"></textarea>
          <br>
          <button class="register">Wyślij</button>
      </from>
      <br><br><br><br><br><br>
  </div>
</div>
</div>
      
<?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARFHyntxWN8piyEnpvqO6hokTnKKb9Cms"><?php echo '</script'; ?>
><?php }
}
?>
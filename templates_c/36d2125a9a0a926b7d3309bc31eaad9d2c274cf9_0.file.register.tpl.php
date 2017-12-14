<?php /* Smarty version 3.1.24, created on 2017-06-01 18:20:35
         compiled from "C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:914759305af3647e16_29836343%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36d2125a9a0a926b7d3309bc31eaad9d2c274cf9' => 
    array (
      0 => 'C:/Program Files/VertrigoServ/www/SPSM/system/../application/views/register.tpl',
      1 => 1496341218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '914759305af3647e16_29836343',
  'variables' => 
  array (
    '_ci_vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59305af3761254_18507204',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59305af3761254_18507204')) {
function content_59305af3761254_18507204 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '914759305af3647e16_29836343';
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
    <br><br><br><br><br><br>
    
    <a class="nav_bar_fe" href="<?php echo @constant('URL_DOMAIN');?>
">Strona główna</a>
    <a class="nav_bar_fe" href="<?php echo @constant('URL_DOMAIN');?>
index.php/article/register">Rejestracja</a>
    
</div>
    <br>
<div class="container">
    
    <h3 class='register'>
        FORMULARZ REJESTRACYJNY 
        <font size='3px' class='register'>PRZYSTĄPIENIA DO PROJEKTU 1% ODPISÓW PODATKOWYCH</font>
    </h3><br>
    
    <h5>
    POROZUMIENIE zawarte pomiędzy:<br>
    <strong>Stowarzyszeniem Pomocy Szkole „Małopolska” ul. Rzeźnicza 2a , 31-540 Kraków</strong><br>
    NIP 675-10-36-800, REGON 003893234 reprezentowanym przez:<br><br>
    <ul>
        <li>BOHDANA PIOTROWICZA – Prezesa Zarządu Wojewódzkiego</li>
        <li>RENATĘ CHMIELEWSKĄ – Sekretarza Zarządu Wojewódzkiego</li>
    </ul>
    <br>
    Przedmiotem porozumienia jest ustalenie zasad współpracy pomiędzy stronami w 
    ramach przeprowadzonej przez Stowarzyszenie akcji 1% odpisów podatkowych.<br>
    
    Porozumienie zobowiązuje Stowarzyszenie do przekazania zewidencjonowanych odpisów 
    na wskazany powyżej rachunek Beneficjenta. Beneficjent zobowiązuje się do przekazania 
    informacji o sposobie wykorzystania środków z kserokopiami faktur i rachunków. Porozumienie 
    zawierane jest na zasadzie dobrowolności. Strony oświadczają, że przystąpienie do akcji oznacza 
    akceptację i stosowanie się do zapisów Regulaminu.
    oraz (patrz poniżej):
    </h5><br>
    
    <h3  class='register2'>Rejestracja jako</h3>
    <div class="form">
        <select id="registerLike" onchange="changeRegister()" class='form-control register' style='width: 70%;'>
            <option>Wybierz</option>
            <option>Pomóż dziecku</option>
            <option>Pasje</option>
            <option>Szkoła</option>
            <option>Rada rodziców</option>
            <option>Klub sportowy (UKS)</option>
        </select>
    </div>
    <br>
    <h3 id="nameDataBen" class='register2 hideR'>Dane Beneficjenta</h3>
    <div id="DataBen" class="form hideR">
        <input id="DataNameSur" onkeydown="correctField('DataNameSur')" type="text" class="form-control register hideR" placeholder="Imię Nazwisko (wymagane)" aria-describedby="basic-addon1">
        <input id="DataName" onkeydown="correctField('DataName')" type="text" class="form-control register hideR" placeholder="Nazwa (wymagane)" aria-describedby="basic-addon1">
        <input id="DataRegon" type="text" class="form-control register hideR" placeholder="REGON" aria-describedby="basic-addon1">
        <input id="DataNip" type="text" class="form-control register hideR" placeholder="NIP" aria-describedby="basic-addon1">
        <input id="DataAddressBen" onkeydown="correctField('DataAddressBen')" type="text" class="form-control register" placeholder="Adres (wymagane)" aria-describedby="basic-addon1">
        <input id="DataPhoneBen" type="text" class="form-control register" placeholder="Telefon" aria-describedby="basic-addon1">
        <select id="DataVoivodeship" onchange="changeVoivodeship()" class='form-control register' style='width: 70%;' >
            <option>Województwo</option>
            <option>dolnośląskie</option>
            <option>kujawsko-pomorskie</option>
            <option>lubelskie</option>
            <option>lubuskie</option>
            <option>łódzkie</option>
            <option>małopolskie</option>
            <option>mazowieckie</option>
            <option>opolskie</option>
            <option>podkarpackie</option>
            <option>podlaskie</option>
            <option>pomorskie</option>
            <option>śląskie</option>
            <option>świętokrzyskie</option>
            <option>warmińsko-mazurskie</option>
            <option>wielkopolskie</option>
            <option>zachodniopomorskie</option>
        </select>
        <select id="DataCity" onchange="correctField('DataCity')" class='form-control register' style='width: 70%;' >
            <option>Miasto</option>
        </select>
        <input id="DataPostCode" onkeydown="correctField('DataPostCode')" type="text" class="form-control register" placeholder="Kod pocztowy (wymagane)" aria-describedby="basic-addon1">
        <input id="DataMailBen" type="text" class="form-control register" placeholder="Email" aria-describedby="basic-addon1">
        <input id="DataWWW" type="text" class="form-control register hideR" placeholder="Strona www" aria-describedby="basic-addon1">
    </div>
    
    <h3 id="nameDataBank" class='register2 hideR'>Nazwa i numer rachunku do przekazania 1%</h3>
    <div id="nameDataBankForm" class="form hideR">
        <input id="DataBank" type="text" class="form-control register" placeholder="Bank" aria-describedby="basic-addon1">
        <input  id="DataBankName"  type="text" class="form-control register" placeholder="Nazwa rachunku" aria-describedby="basic-addon1">
        <input  id="DataBankNumber" type="text" class="form-control register" placeholder="Numer rachunku" aria-describedby="basic-addon1">
    </div>
    
    <h3 id="nameDataRep" class='register2 hideR'>Dane reprezentantów</h3>
    <div id="nameDataRepForm" class="form hideR">
        <input id="DataNameRep" onkeydown="correctField('DataNameRep')" type="text" class="form-control register" placeholder="Imię Nazwisko (wymagane)" aria-describedby="basic-addon1">
        <input id="DataFunc"  onkeydown="correctField('DataFunc')" type="text" class="form-control register hideR" placeholder="Funkcja  (wymagane)" aria-describedby="basic-addon1">
        <input  id="DataPhoneRep" type="text" class="form-control register" placeholder="Telefon" aria-describedby="basic-addon1">
        <input id="DataMailRep" type="text" class="form-control register" placeholder="E-mail" aria-describedby="basic-addon1">
    </div>
    
    <h3 id="nameDataQ" class='register2 hideR'>Jak dowiedziałeś się o akcji?</h3>
    <div id="nameDataQForm" class="form hideR">
        <select id='know' onchange="changeKnow()" class='form-control register' style='width: 70%;' >
            <option>Wybierz</option>
            <option>ze strony internetowej</option>
            <option>od osób uczestniczących w akcji</option>
            <option>z maila</option>
            <option>inne</option>
        </select>
        <input id='knowField' type="text"  class="form-control register" placeholder="" aria-describedby="basic-addon1">
    </div>
    
    <h3 id="nameDataFile" class='register2 hideR'></h3>
    <div id="nameDataFileForm" class="form hideR">
        
    </div>
    
    <h3 id="nameDataDoc" class='register2 hideR'>Dokumenty i oświadczenia</h3>
    <div id="nameDataDocForm" class="form hideR">
        <div class="row">
            <div class="col-lg-4">
                <a href="http://www.spsm.edu.pl/uploads/menu//111/POROZUMIENIE%201%20proc.%202014.2015.doc">
                    <div class="file">
                        <i class="fa fa-file-word-o" aria-hidden="true"></i> Porozumienie 1%.doc
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://www.spsm.edu.pl/uploads/menu//111/Sprawozdanie%201%20proc.%202013%20szkola.doc">
                    <div class="file">
                        <i class="fa fa-file-word-o" aria-hidden="true"></i> Sprawozdanie 1% dla szkół.doc
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://www.spsm.edu.pl/uploads/menu//111/Sprawozdanie%201%20proc.%202013_UKS.doc">
                    <div class="file">
                        <i class="fa fa-file-word-o" aria-hidden="true"></i> Sprawozdanie 1% dla UKS.doc
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://www.spsm.edu.pl/uploads/menu//111/Regulamin%201%20proc.%202014.doc">
                    <div class="file">
                        <i class="fa fa-file-word-o" aria-hidden="true"></i> Regulamin.doc
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://www.spsm.edu.pl/uploads/menu//111/POROZUMIENIE%201%20proc.%202014.2015.pdf">
                    <div class="file">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Porozumienie 1%.pdf
                    </div>
                </a>
            </div>            
            <div class="col-lg-4">
                <a href="http://www.spsm.edu.pl/uploads/menu//111/Sprawozdanie%201%20proc.%202013%20szkola.pdf">
                    <div class="file">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Sprawozdanie 1% dla szkół.pdf
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://www.spsm.edu.pl/uploads/menu//111/Sprawozdanie%201%20proc.%202013_UKS.pdf">
                    <div class="file">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Sprawozdanie 1% dla UKS.pdf
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="http://www.spsm.edu.pl/uploads/menu//111/Regulamin%201%20proc.%202014.pdf">
                    <div class="file">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Regulamin.pdf
                    </div>
                </a>
            </div>
        </div>
        <br><br>
        <h4>
            <button id='switch_1' class="switch"></button> Oświadczam, że zapoznałem się i akceptuję "Regulamin akcji".
            <br><br>
            <button id='switch_2' class="switch"><i class="fa fa-check-square-o" aria-hidden="true"></i></button> Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w formularzu na potrzeby Stowarzyszenia Pomocy Szkole Małopolska w Krakowie,
            ul. B. Chrobrego 9, zgodnie z ustawą z dnia 29.08.1997 r. o ochronie danych osobowych (Dz.U. z 1997 nr 133, poz. 883).
            Informacje zostaną przesłane do administratora strony. Stowarzyszenie Pomocy Szkole „Małopolska” zastrzega 
            sobie prawo do redagowania i publikowania nadesłanych danych.
        </h4>
    </div>
    <button id="register" class='register'>Wyślij zgłoszenie rejestracyjne</button>
    
    <br><br><br>
        
    <br><br><br><br><br><br><br>
</div>

<?php }
}
?>
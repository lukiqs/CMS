<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Kusy">
    <link rel="Shortcut icon" href="../../assets/cms/qs2.ico" />
    <title>QSCMS - Panel SPSM</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{*    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">*}
    <!-- Include Editor style. -->
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />

<!-- Include JS file. -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/js/froala_editor.min.js'></script>
    <style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
    <script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" style="color: #F05F40;" href="{$smarty.const.URL_DOMAIN}index.php/QSCMS/">QSCMS<font size="1px" color="white"> {$smarty.const.CMS_VERSION}</font>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li {if strpos($smarty.server.PHP_SELF, 'Tutorial') != false}class="active"{/if} title="FAQ">
                <a href="{$smarty.const.URL_DOMAIN}index.php/Tutorial/">
                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 
                </a>
            </li>
            <li {if strpos($smarty.server.PHP_SELF, 'Updates') != false}class="active"{/if} title="Aktualizacje">
                <a href="{$smarty.const.URL_DOMAIN}index.php/Updates/">
                    <span class="glyphicon glyphicon-saved" aria-hidden="true"></span> {*Aktualizacje*}
                </a>
            </li>
            <li {if strpos($smarty.server.PHP_SELF, 'Report') != false}class="active"{/if}  title="Zgłoś błąd">
                <a href="{$smarty.const.URL_DOMAIN}index.php/Report/">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {*Zgłoś błąd*}
                </a>
            </li>
            <li {if strpos($smarty.server.PHP_SELF, 'Info') != false}class="active"{/if} title="Informacje">
                <a href="{$smarty.const.URL_DOMAIN}index.php/Info/">
                    <span class="glyphicon glyphicon-info-sign"></span>{* Informacje*}
                </a>
            </li>
            {if $smarty.session.x9eA == 1}
            <li {if strpos($smarty.server.PHP_SELF, 'Settings') != false}class="active"{/if} title="Ustawienia">
                <a href="{$smarty.const.URL_DOMAIN}index.php/Settings/">
                    <span class="glyphicon glyphicon-cog"></span> {*Ustawienia*}
                </a>
            </li>
            {/if}
            <li title="Wyloguj">
                <a href="{$smarty.const.URL_DOMAIN}index.php/QSCMS/logout">
                    <span class="glyphicon glyphicon-off"></span> 
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          {if $smarty.session.x9eA == 1}
          <ul class="nav nav-sidebar">
            <li {if strpos($smarty.server.PHP_SELF, 'Users') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Users/">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Użytkownicy
                </a>
            </li>
            <li {if strpos($smarty.server.PHP_SELF, 'Deduction') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Deduction/">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    Odpisy
                </a>
            </li>
            <li {if strpos($smarty.server.PHP_SELF, 'KPS') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/KPS/">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    KPS
                </a>
            </li>
          </ul> 
          {/if}
          <ul class="nav nav-sidebar">            
            {if $smarty.session.x9eA == 1}
            <li {if strpos($smarty.server.PHP_SELF, 'Menu') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Menu/">
                    <span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span>
                    Menu
                </a>
            </li>
            <li {if strpos($smarty.server.PHP_SELF, 'Slider') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Slider/">
                    <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
                    Pokaz
                </a>
            </li>
{*            <li><a href="{$smarty.const.URL_DOMAIN}index.php/Sponsors/"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Sponsorzy</a></li>*}
            <li {if strpos($smarty.server.PHP_SELF, 'Events') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Events/">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    Wydarzenia
                </a>
            </li>
            <li {if strpos($smarty.server.PHP_SELF, 'Footer') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Footer/">
                    <span class="glyphicon glyphicon-eject"></span> 
                    Stopka
                </a>
            </li>            
            <li {if strpos($smarty.server.PHP_SELF, '/Contact') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Contact/">
                    <i class="fa fa-fax" aria-hidden="true"></i>
                    Kontakt
                </a>
            </li>
            {/if}
            {if $smarty.session.x9RA == 1}
            <li {if strpos($smarty.server.PHP_SELF, 'PersonalContact') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/PersonalContact/">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 
                    Kontakt
                </a>
            </li>
            {/if}
          </ul>
          
          <ul class="nav nav-sidebar">
            <li {if strpos($smarty.server.PHP_SELF, 'Add') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Add/">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                    Dodaj
                </a>
            </li> 
            <li {if strpos($smarty.server.PHP_SELF, 'SubCategory') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/SubCategory/">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 
                    Kategorie
                </a>
            </li>
            <li {if strpos($smarty.server.PHP_SELF, 'ArticlesList') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/ArticlesList/">
                    <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> 
                    Artykuły
                </a>
            </li>
          </ul>
          <ul class="nav nav-sidebar">
            {*if $smarty.session.x9eA == 1}
            <li {if strpos($smarty.server.PHP_SELF, 'Newsletter') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Newsletter/">
                    <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> 
                    Newsletter
                </a>
            </li> 
            {/if*}
            <li {if strpos($smarty.server.PHP_SELF, 'Disc') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Disc/">
                    <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> 
                    Dysk
                </a>
            </li>            
            <li {if strpos($smarty.server.PHP_SELF, 'Links') != false}class="active"{/if}>
                <a href="{$smarty.const.URL_DOMAIN}index.php/Links/">
                    <span class="glyphicon glyphicon-link" aria-hidden="true"></span> 
                    Linki
                </a>
            </li>
          </ul>
          <ul class="nav nav-sidebar">
{*            <li><a href=""><span class="glyphicon glyphicon-saved" aria-hidden="true"></span> Aktualizacje</a></li>*}
{*            <li><a href=""><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Zgłoś błąd</a></li>*}
<!--            <li><a href=""><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Informacje</a></li>
            <li><a href=""><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span> Kopie zapasowe</a></li>
            <li><a href=""><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Statystyki</a></li>
            <li><a href=""><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Raporty</a></li>
            <li><a href=""><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Śledź</a></li>
            <li><a href=""><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Ustawienia</a></li>-->
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
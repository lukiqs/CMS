<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<script>
    settings_update = {$_ci_vars.settings_update}; 
    settings_news = {$_ci_vars.settings_news};
    settings_backup = {$_ci_vars.settings_backup};
    settings_backup_out = {$_ci_vars.settings_backup_out};
    settings_backup_hdd = {$_ci_vars.settings_backup_hdd};
    settings_login = {$_ci_vars.settings_login};
    settings_active = {$_ci_vars.settings_active};
    settings_analysis = {$_ci_vars.settings_analysis};
    settings_analysis_report = {$_ci_vars.settings_analysis_report};
    {*settings_alerts = true;*}
</script>
<h1 class="page-header"><span class="glyphicon glyphicon-cog"></span> Ustawienia</h1>
<h3 class="page-header"><i class="fa fa-laptop" aria-hidden="true"></i> Ogólne</h3>
    <button class="switch" id="settings_update" title="System sam będzie dokonywał aktualizacji oprogramowania, jeśli tylko będzie to możliwe."></button>
    <br>
    <button class="switch" id="settings_news" title='Nowości oprogramowania QSCMS będą wysyłane na Twoją pocztę.'></button>
<br><br>

<h3 class="page-header"><i class="fa fa-line-chart" aria-hidden="true"></i> Analiza</h3>  
    <button class="switch" id="settings_analysis" title='System zbiera szczegółowe informacje o użytkowaniu strony. Następnie dokładnie je analizuje w celu zoptymalizowania i udoskonalenia aplikacji.'></button>
    <br>
    <button class="switch" id="settings_analysis_report" title='System poinformuje Cie o przebiegu analizy.'></button>
<br><br>
    
<h3 class="page-header"><i class="fa fa-shield" aria-hidden="true"></i> Bezpieczeństwo</h3>  
    <button class="switch" id="settings_backup" title='System tworzy kopię bazy danych na serwerze na którym się znajduje.'></button>
    <br>
    <button class="switch" id="settings_backup_out" title='System tworzy kopię bazy danych i wysyła ją na zewnęczny zautoryzowany serwer.'></button>
    <br>
    <button class="switch" id="settings_backup_hdd" title='System wysyła kopię zawartości dysku na zewnęczny zautoryzowany serwer.'></button>
    <br>
    <button class="switch" id="settings_login" title='System zapisuje każdą próbę logowania.'></button>
    <br>
    <button class="switch" id="settings_active" title='System zapisuje każdą czynność użytkownika.'>></button>
<br><br>   
  
{*<h3 class="page-header"><i class="fa fa-comment-o" aria-hidden="true"></i> Powiadomienia</h3>  
    <button class="switch" id="settings_alerts"></button>
    <br><br>*}

           <button type="button" class="btn btn-primary btn-xs" id="action_save">
                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
                    
                    
<div class="ui-dialog-danger" id="dialog" title="Zapis">
  <center><br>
  <p>Ustawienia zostały zapisane</p>
   </center>
</div>
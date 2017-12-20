<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ibgulg6qkbcn81a1rqkhzasi9yxx8pz0505gtnn12d6o5wik"></script>

<h1 class="page-header"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Kontakt</h1>
<h3>Edycja</h3><br>
<div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Oddział</span>
        <input type="text" id='name' value="" class="form-control" placeholder='Oddział ... ' aria-describedby="sizing-addon3">
    </div>
{*<div id='edit' style="margin-top: 30px;">

</div>*}
<br>
<textarea id='edit'></textarea>
<h3>Mapa</h3>

<div id="googleMap" style="width:50%;height:400px;"></div>

<br> 
<button type="button" class="btn btn-primary btn-xs" id='action_save'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
    
<button type="button" title="Wybierz zakładkę odziały i odszukaj swój" class="btn btn-info btn-xs" onclick="window.open('{$smarty.const.URL_DOMAIN}index.php/article/contact')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
        
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARFHyntxWN8piyEnpvqO6hokTnKKb9Cms"></script>
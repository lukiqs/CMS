<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<h1 class="page-header"><span class="glyphicon glyphicon-eject"></span> Stopka</h1>

<div class="input-group input-group-sm" title='Podpis będzie widoczny na stopce strony'>
    <span class="input-group-addon" id="sizing-addon3">Podpis</span>
    <input value="{$_ci_vars.description}" id='description'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Facebooku'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-facebook-official facebook" aria-hidden="true"></i></span>
    <input value="{$_ci_vars.facebook}" id='facebook'
        type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Twitter'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-twitter-square twitter" aria-hidden="true"></i></span>
    <input value="{$_ci_vars.twitter}" id='twitter'
        type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Google +'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-google-plus-square googlep" aria-hidden="true"></i></span>
    <input value="{$_ci_vars.googlep}" id='googlep'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Pinterest'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-pinterest-square pinterest" aria-hidden="true"></i></span>
    <input value="{$_ci_vars.pinterest}" id='pinterest'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Instagram'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-instagram insta" aria-hidden="true"></i></span>
    <input value="{$_ci_vars.instagram}" id='instagram'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br>
<div class="input-group input-group-sm" title='Wklej link twojej profilu na Youtube'>
    <span class="input-group-addon" id="sizing-addon3"><i class="fa fa-youtube-square youtube" aria-hidden="true"></i></span>
    <input value="{$_ci_vars.youtube}" id='youtube'
           type="text" class="form-control" placeholder='' style="width:50%;" aria-describedby="sizing-addon3">
</div>
<br><br>
<button type="button" class="btn btn-primary btn-xs" id='action_save'>
                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
<button type="button" class="btn btn-info btn-xs" title="Stopka znajduję się na dole strony" onclick="window.open('{$smarty.const.URL_DOMAIN}index.php/article/contact')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>

<div class="ui-dialog-danger" id="dialog" title="Zapis">
  <center>
      <br>
    <p>Dane zostały zapisane</p>
    <br>  
  </center>
</div>
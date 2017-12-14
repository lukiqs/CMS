<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<h1 class="page-header"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Zgłoś błąd</h1>
<font size="1px">
Zgłaszając błąd opisz:<br>
- dokładnie problem<br>
- miejsce (np: link, podstronę, itp)
</font>

<br><br>
<textarea cols="70" rows="10" id='from_report'></textarea>
<br><br>

<button type="button" class="btn btn-primary btn-xs" id='action_send'>
    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Wyślij</button>
    
<div class="ui-dialog-danger" id="dialog" title="Zgłosznie">
   <center><br>
  <p>Wysłano zgłoszenie</p>
   </center>
</div>
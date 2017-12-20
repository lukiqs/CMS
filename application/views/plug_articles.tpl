<script>
var a= 0;
var namesA = [{section name=i loop=$_ci_vars.art}{if $smarty.section.i.iteration!=1},{/if}"{$_ci_vars.art[i].text}" {/section}];
var urls = [{section name=i loop=$_ci_vars.art}{if $smarty.section.i.iteration!=1},{/if}"{$_ci_vars.art[i].id_category}" {/section}];
var lengthArray = {$_ci_vars.art[0].lenght};

{literal}
setInterval(function() {

  $("#art").fadeOut(function() {
    document.getElementById("art").innerHTML = "<h4>"+namesA[a]+"<a href='{/literal}{$smarty.const.URL_DOMAIN}index.php/Article/index/"+urls[a]+"{literal}'> ... Czytaj więcej.</a></h4>";
    });
  $("#art").fadeIn();
  if(a<lengthArray-1)a++;
  else a=0;
}, 5000);
{/literal}
</script>
<style>
    div.art{
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 5px;
    }
</style>
{if isset($_ci_vars.art[0].text)}
<div id="art" class="art">
    <h4>
    
        {$_ci_vars.art[0].text}
    
    <a href='{$smarty.const.URL_DOMAIN}index.php/Article/index/{$_ci_vars.art[0].id_category}'> ... Czytaj więcej.</a>
    </h4>
</div>
{/if}
<br><br>
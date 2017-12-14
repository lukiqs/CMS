<script>
var a= 0;
var names = [{section name=i loop=$_ci_vars.kps}{if $smarty.section.i.iteration!=1},{/if}"{$_ci_vars.kps[i].name}" {/section}];
var address = [{section name=i loop=$_ci_vars.kps}{if $smarty.section.i.iteration!=1},{/if}"{$_ci_vars.kps[i].address}" {/section}];
var mail = [{section name=i loop=$_ci_vars.kps}{if $smarty.section.i.iteration!=1},{/if}"{$_ci_vars.kps[i].mail}" {/section}];
var phone = [{section name=i loop=$_ci_vars.kps}{if $smarty.section.i.iteration!=1},{/if}"{$_ci_vars.kps[i].phone}" {/section}];
var www = [{section name=i loop=$_ci_vars.kps}{if $smarty.section.i.iteration!=1},{/if}"{$_ci_vars.kps[i].www}" {/section}];
var lengthArray = {$_ci_vars.kps[0].lenght};

{literal}
setInterval(function() {

  $("#kps").fadeOut(function() {
    document.getElementById("kps").innerHTML = "<h2>"+names[a]+
            "</h2><h3>"+address[a]+"<br>"+mail[a]+"<br>"+phone[a]+"<br><br><button class='kps' onclick=\"window.location='"+www[a]+"'\">Strona internetowa</button></h3>";
    });
    //alert(a);
  $("#kps").fadeIn();
  if(a<lengthArray-1)a++;
  else a=0;
}, 5000);
{/literal}
</script>
<style>
    div.kps{
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 5px;
    }
    button.kps{
        border: none;
        background-color: white;
        color: black;
        padding: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
        outline: none;
{*        border-radius: 5px;*}
    }
    button.kps:hover{
        background-color: black;
        color: white;
    }
</style>
<div id="kps" class="kps">
    {if isset($_ci_vars.kps[0].name)}
    <h2>{$_ci_vars.kps[0].name}</h2>
    <h3>{$_ci_vars.kps[0].address}<br>
        {$_ci_vars.kps[0].mail}<br>
        {$_ci_vars.kps[0].phone}<br><br>
        <button class='kps' onclick="window.location='{$_ci_vars.kps[0].www}'">Strona internetowa</button></h3>
    {/if}
</div>
<br><br>
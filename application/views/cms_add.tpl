<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<script>
 {if isset($_ci_vars.art.id)} edit = {$_ci_vars.art.id}; {/if}
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css"><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" /><link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<h1 class="page-header"><span class="glyphicon glyphicon-plus"></span> Dodaj/Edytuj artykuł</h1>
<br>
<input id='nameArt' type="text" value="{if isset($_ci_vars.art.name)}{$_ci_vars.art.name}{/if}" maxlength='250' aria-describedby="sizing-addon3" class="form-control" placeholder="Nazwa artykułu (nie widoczna na stronie)"><br>
<select id='categoryArt' aria-describedby="sizing-addon3" class="form-control">
    <option value='0'>Wybierz kategorię</option>
    {section name=i loop=$_ci_vars.per}
        {if isset($_ci_vars.per[i].name)}
            <option value='{$_ci_vars.per[i].id}' {if isset($_ci_vars.art.category) AND $_ci_vars.art.category==$_ci_vars.per[i].name}selected{/if} >{$_ci_vars.per[i].name}</option>
        {/if}
    {/section}
</select>
<div id="editor">
    <div id='edit' style="margin-top: 30px;">
        {if isset($_ci_vars.art.text)}{$_ci_vars.art.text}{/if}
    </div>

    <div id="preview" class="fr-view"></div>
  </div>
<br><br>
<button type="button" class="btn btn-success btn-small" id='action_addArticle'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"></script>
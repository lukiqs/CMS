<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<h1 class="page-header"><span class="glyphicon glyphicon-hdd"></span> Dysk</h1>
          
          <br>          
          <button type="button" class="btn btn-default btn-xs" 
                  onclick="location.href='{$smarty.const.URL_DOMAIN}index.php/Disc/index/fa fa-file-video-o'">
            <i class="fa fa-file-video-o" aria-hidden="true"></i> Pliki video</button>
          <button type="button" class="btn btn-default btn-xs"
                  onclick="location.href='{$smarty.const.URL_DOMAIN}index.php/Disc/index/fa fa-file-image-o'">
            <i class="fa fa-file-image-o" aria-hidden="true"></i> Pliki graficzne</button>
          <button type="button" class="btn btn-default btn-xs"
                  onclick="location.href='{$smarty.const.URL_DOMAIN}index.php/Disc/index/fa fa-file-archive-o'">
            <i class="fa fa-file-archive-o" aria-hidden="true"></i> Archiwa</button>
          <button type="button" class="btn btn-default btn-xs"
                  onclick="location.href='{$smarty.const.URL_DOMAIN}index.php/Disc/index/fa fa-file-o'">
            <i class="fa fa-file-o" aria-hidden="true"></i> Inne pliki</button>
          <br><br>
          {*<button type="button" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtruj</button>*}
          <button type="button" class="btn btn-default btn-xs" 
                  onclick="location.href='{$smarty.const.URL_DOMAIN}index.php/Disc/'">
            <i class="fa fa-file" aria-hidden="true"></i> Wszystkie pliki</button>
          <br><br>
          <button type="button" class="btn btn-success btn-xs" id='action_upload'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj plik</button>
                    
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Lp.</th>
                  <th></th>                 
                  <th>Nazwa</th>
                  <th>Udostępnione</th>
                  <th>przez</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {section name=i loop=$_ci_vars}
                  {if isset($_ci_vars[i].id)} 
                    <tr>
                    <td>{$smarty.section.i.iteration}</td>
                    <td>  
                        <i class="{$_ci_vars[i].type}" aria-hidden="true"></i>
                    </td>
                    <td>{$_ci_vars[i].name}</td>
                    <td>{$_ci_vars[i].created}</td>
                    <td>{$_ci_vars[i].user}</td>
                    <td>
                        {if $smarty.session.x9eA == 1}
                        <button type="button" class="btn btn-danger btn-xs" onclick="deleteFile({$_ci_vars[i].id})">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
                        {/if}
                    </td>
                    <td><button type="button" class="btn btn-warning btn-xs" 
                                onclick="showLink('{$_ci_vars[i].name}','{$smarty.const.URL_DOMAIN}assets/hdd/{$_ci_vars[i].url}')">
                        <span class="glyphicon glyphicon-link" aria-hidden="true"></span> Link</button>
                    </td>
                    <td><button type="button" class="btn btn-primary btn-xs" onclick="location.href='{$smarty.const.URL_DOMAIN}assets/hdd/{$_ci_vars[i].url}'">
                        <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Pobierz</button>
                    </td>
                    </tr> 
                  {/if}
                {/section}                
              </tbody>
            </table>
          </div>
          

<div class="ui-dialog-danger" id="dialog" title="Usuń">
  <p>Usunąć plik ?</p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_deleteCancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>
          
<div class="ui-dialog-danger" id="dialog2" title="Link">
   <center><br>
  <p>Skopiowano link</p>
   </center>
</div>
                
<div class="ui-dialog-danger" id="dialog3" title="Dodaj plik">
  <br>
  <form method="POST" ENCTYPE="multipart/form-data">
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
        <input maxlength="50" type="text" name='uploadName' class="form-control" placeholder='Nazwa pliku' aria-describedby="sizing-addon3">
    </div><br>
  
    <input type="file" name='uploadFile' class="form-control" placeholder='' aria-describedby="sizing-addon3">

    <br><br>
    <button type="submit" class="btn btn-success btn-xs" id='action_add'>
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
  </form>
</div>
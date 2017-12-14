<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<h1 class="page-header"><span class="glyphicon glyphicon-th-list"></span> Kategorie</h1>

<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nazwa podkategori</th>
                  <th>Podpięte pod</th>
                  <th>Link</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {section name=i loop=$_ci_vars.list}
                <tr>
                  <td>{$_ci_vars.list[i].name}</td>
                  <td>{$_ci_vars.list[i].parent_name}</td>
                  <td>{$_ci_vars.list[i].url}</td>
                  <td>
                      <button type="button" class="btn btn-info btn-xs" onclick="window.open('{$smarty.const.URL_DOMAIN}index.php/Article/index/{$_ci_vars.list[i].parent_id}')">
                        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
                  </td>
                  <td><button type="button" class="btn btn-warning btn-xs" 
                                                    onclick="editMenu({$_ci_vars.list[i].id},'{$_ci_vars.list[i].name}','','{$_ci_vars.list[i].url}',false)">
                      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj</button></td>
                 <td><button type="button" class="btn btn-danger btn-xs" 
                                                    onclick="deleteMenu({$_ci_vars.list[i].id})">
                      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button></td>
                </tr>
                {/section}
              </tbody>
            </table>
<br>
<button type="button" class="btn btn-success btn-xs" id='action_addDialog'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
                    
<div class="ui-dialog-danger" id="dialog" title="Dodaj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='addName' class="form-control" placeholder='Nazwa kategorii' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Podepnij do:</span>
    <select aria-describedby="sizing-addon3" class="form-control" id="addSubCat">
        <option></option>
        {section name=i loop=$_ci_vars.option}
            {if isset($_ci_vars.option[i])}
                <option>{$_ci_vars.option[i]}</option>
            {/if}
        {/section}
    </select>
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Link</span>
    <input type="text" id='addUrl' class="form-control" placeholder='http://' aria-describedby="sizing-addon3">
  </div>

  <br><br>
  <button type="button" class="btn btn-success btn-xs" id='action_addCategory'>
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
</div>
    
<div class="ui-dialog-danger" id="dialog2" title="Edytuj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='editName' class="form-control" placeholder='Nazwa kategorii' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm" id="editSubCatV">
    <span class="input-group-addon" id="sizing-addon3">Dodaj do:</span>
    <select aria-describedby="sizing-addon3" class="form-control" id="editSubCat">
        <option></option>
        {section name=i loop=$_ci_vars.option}
            {if isset($_ci_vars.option[i])}
                <option>{$_ci_vars.option[i]}</option>
            {/if}
        {/section}
    </select>
  </div><br>
  <div class="input-group input-group-sm" id='editUrlV'>
    <span class="input-group-addon" id="sizing-addon3">Link</span>
    <input type="text" id='editUrl' class="form-control" placeholder='http://' aria-describedby="sizing-addon3">
  </div>

  <br><br>
  <button type="button" class="btn btn-warning btn-xs" id='action_saveEdit'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
    
<div class="ui-dialog-danger" id="dialog3" title="Usuń">
    <p>Chcesz usunąć tą podkategorie ? </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>
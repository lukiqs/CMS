<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<script>
    var sortArray = [0
    {section name=i loop=$_ci_vars}
        {if isset($_ci_vars[i].name)}
            ,{$_ci_vars[i].id}
            {section name=k loop=$_ci_vars[i].subCategory}
            ,{$_ci_vars[i].subCategory[k].id}
            {/section}
        {/if}
    {/section}
    ];
    </script>
<h1 class="page-header"><span class="glyphicon glyphicon-modal-window"></span> Menu</h1>

          <div class="table-responsive">
            <table class="table table-striped fixed-width-table">
              <thead>
                <tr>
                  <th>Kategoria</th>
                  <th>Podkategoria</th>
                  <th>Link</th>  
                  <th></th>                 
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {section name=i loop=$_ci_vars}
                    {if isset($_ci_vars[i].name)}
                        <tr id="{$_ci_vars[i].id}">
                            <td>{$_ci_vars[i].name}</td>
                            <td>
                                <table class="table table-striped fixed-width-table">
                                <tbody>
                                {section name=k loop=$_ci_vars[i].subCategory}
                                    <tr id="{$_ci_vars[i].subCategory[k].id}">
                                        <td>{$_ci_vars[i].subCategory[k].name}</td>
                                        <td>
                                            {if $_ci_vars[i].subCategory[k].url != ''}
                                                <span title='{$_ci_vars[i].subCategory[k].url}' class="glyphicon glyphicon-ok"></span>
                                            {else}
                                                <span class="glyphicon glyphicon-remove"></span>
                                            {/if}
                                        </td>
                                        <td><button type="button" class="btn btn-warning btn-xs" 
                                                    onclick="editMenu({$_ci_vars[i].subCategory[k].id},
                                                                '{$_ci_vars[i].subCategory[k].name}',
                                                                '{$_ci_vars[i].subCategory[k].name_parent}',
                                                                '{$_ci_vars[i].subCategory[k].url}',false)">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj</button></td>
                                        <td><button type="button" class="btn btn-danger btn-xs" 
                                                    onclick="deleteMenu({$_ci_vars[i].subCategory[k].id})">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button></td>
                                    </tr>
                                {/section}
                                </tbody>
                                </table>
                            </td>
                            <td>
                                {if $_ci_vars[i].url != ''}
                                    <span title='{$_ci_vars[i].url}' class="glyphicon glyphicon-ok"></span>
                                {else}
                                    <span class="glyphicon glyphicon-remove"></span>
                                {/if}
                            </td>                  
                            <td><button type="button" class="btn btn-warning btn-xs" 
                                        onclick="
                                        {if !isset($_ci_vars[i].subCategory[0].name)}
                                            editMenu({$_ci_vars[i].id},'{$_ci_vars[i].name}','','{$_ci_vars[i].url}',false)
                                        {else}
                                            editMenu({$_ci_vars[i].id},'{$_ci_vars[i].name}','','{$_ci_vars[i].url}',true)
                                        {/if}
                                        ">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj</button>
                            </td>
                            <td>
                                {if !isset($_ci_vars[i].subCategory[0].name)}
                                    <button type="button" class="btn btn-danger btn-xs" 
                                            onclick="deleteMenu({$_ci_vars[i].id})">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
                                {/if}
                            </td>
                        </tr>
                    {/if}
                {/section}                         
              </tbody>
            </table>
          </div>
          <button type="button" class="btn btn-success btn-xs" id='action_addDialog'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
          <button type="button" class="btn btn-primary btn-xs" id="action_save">
                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz kolejność</button>
                    
          <button type="button" class="btn btn-info btn-xs" onclick="window.open('{$smarty.const.URL_DOMAIN}')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
                   
<div class="ui-dialog-danger" id="dialog" title="Usuń">
    <p>Chcesz usunąć tą kategorie ? </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>
          
<div class="ui-dialog-danger" id="dialog2" title="Zapis">
  <p>Dane zostały zapisane</p>
  <br>
  <button type="button" class="btn btn-info btn-xs">
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> OK</button>
</div>
              
<div class="ui-dialog-danger" id="dialog3" title="Dodaj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='addName' class="form-control" placeholder='Nazwa kategorii' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Dodaj do:</span>
    <select aria-describedby="sizing-addon3" class="form-control" id="addSubCat">
        <option></option>
        {section name=i loop=$_ci_vars}
            {if isset($_ci_vars[i].name)}
                <option>{$_ci_vars[i].name}</option>
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
    
<div class="ui-dialog-danger" id="dialog4" title="Edytuj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='editName' class="form-control" placeholder='Nazwa kategorii' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm" id="editSubCatV">
    <span class="input-group-addon" id="sizing-addon3">Dodaj do:</span>
    <select aria-describedby="sizing-addon3" class="form-control" id="editSubCat">
        <option></option>
        {section name=i loop=$_ci_vars}
            {if isset($_ci_vars[i].name)}
                <option>{$_ci_vars[i].name}</option>
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
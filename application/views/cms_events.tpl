<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<h1 class="page-header"><span class="glyphicon glyphicon-calendar"></span> Wydarzenia</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Tytuł</th>                 
                  <th>Treść</th>
                  <th>Data</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {section name=i loop=$_ci_vars}
                    {if isset($_ci_vars[i].id)} 
                    <tr>
                    <td>{$_ci_vars[i].title}</td>
                    <td>{$_ci_vars[i].content}</td>
                    <td>{$_ci_vars[i].date}</td>
                    <td><button type="button" class="btn btn-warning btn-xs" 
                                onclick="editEvent({$_ci_vars[i].id},'{$_ci_vars[i].title}','{$_ci_vars[i].content}','{$_ci_vars[i].date}')">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj</button>
                    </td>
                    <td><button type="button" class="btn btn-danger btn-xs" onclick="deleteEvent({$_ci_vars[i].id})">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
                    </td>
                    </tr>                
                    {/if}
                {/section}
              </tbody>
            </table>
          </div>
              <button type="button" class="btn btn-success btn-xs" id="action_addEvent">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
              <button type="button" class="btn btn-info btn-xs" title="Odszukaj slajd z wtyczką wydarzenia." onclick="window.open('{$smarty.const.URL_DOMAIN}')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
                    
<div class="ui-dialog-danger" id="dialog" title="Usuń">
  <p>Usunąć wydarzenie ?</p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_deleteCancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>

<div class="ui-dialog-danger" id="dialog2" title="Dodaj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Tytuł</span>
    <input maxlength="50" type="text" id='addTitle' class="form-control" placeholder='Tytuł' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm" style="height: 100px">
    <span class="input-group-addon" id="sizing-addon3">Treść:</span>
    <textarea maxlength="250" style="height: 100px" aria-describedby="sizing-addon3" class="form-control" id="addContent"></textarea>
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Data</span>
    <input type="date" id='addDate' class="form-control" placeholder='' aria-describedby="sizing-addon3">
  </div>

  <br><br>
  <button type="button" class="btn btn-success btn-xs" id='action_add'>
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
</div>
              
<div class="ui-dialog-danger" id="dialog3" title="Edytuj">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input maxlength="50" type="text" id='editTitle' class="form-control" placeholder='Nazwa kategorii' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm" style="height: 100px">
    <span class="input-group-addon" id="sizing-addon3">Treść:</span>
    <textarea maxlength="250" style="height: 100px" aria-describedby="sizing-addon3" class="form-control" id="editContent"></textarea>
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Data</span>
    <input type="date" id='editDate' class="form-control" placeholder='' aria-describedby="sizing-addon3">
  </div>

  <br><br>
  <button type="button" class="btn btn-warning btn-xs" id='action_editEvent'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
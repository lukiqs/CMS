<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<h1 class="page-header"><i class="fa fa-users" aria-hidden="true"></i> Klub Przodujących Szkół</h1>

<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Lp.</th>
                  <th>Nazwa</th>
                  <th>Adres</th>               
                  <th>Telefon</th>
                  <th>Email</th>
                  <th>WWW</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  {section name=i loop=$_ci_vars}
                  {if isset($_ci_vars[i].id)}
                  <tr>
                      <td>{$smarty.section.i.iteration}</td>
                      <td>{$_ci_vars[i].name}</td>
                      <td>{$_ci_vars[i].address}</td>
                      <td>{$_ci_vars[i].phone}</td>
                      <td>{$_ci_vars[i].mail}</td>
                      <td>{$_ci_vars[i].www}</td>
                      <td>
                          <button type="button" class="btn btn-warning btn-xs" 
                                  onclick="editKPS({$_ci_vars[i].id},
                                              '{$_ci_vars[i].name}',
                                              '{$_ci_vars[i].address}',
                                              '{$_ci_vars[i].phone}',
                                              '{$_ci_vars[i].mail}',
                                              '{$_ci_vars[i].www}')">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                      </td>
                      <td>
                          <button type="button" class="btn btn-danger btn-xs" onclick="deleteKPS({$_ci_vars[i].id})">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                      </td>
                  </tr>  
                  {/if}
                  {/section}
              </tbody>
            </table>
          </div>

<button type="button" class="btn btn-success btn-xs" id='action_add'>
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
    

<div class="ui-dialog-danger" id="dialog" title="Dodaj">
  <br>
  <form method="POST">
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
        <input type="text" name='name' class="form-control" placeholder='Nazwa szkoły' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Adres</span>
        <input type="text" name='address' class="form-control" placeholder='Adres' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Telefon</span>
        <input type="text" name='phone' class="form-control" placeholder='Telefon' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Email</span>
        <input  type="text" name='mail' class="form-control" placeholder='Email' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">WWW</span>
        <input  type="text" name='www' class="form-control" placeholder='Adres strony WWW' aria-describedby="sizing-addon3">
    </div><br>
    
    <br><br>
    <button type="submit" class="btn btn-success btn-xs" id=''>
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
  </form>
</div>
              
<div class="ui-dialog-danger" id="dialog2" title="Edytuj">
  <br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
        <input type="text" id='name' class="form-control" placeholder='Nazwa szkoły' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Adres</span>
        <input type="text" id='address' class="form-control" placeholder='Adres' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Telefon</span>
        <input type="text" id='phone' class="form-control" placeholder='Telefon' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Email</span>
        <input  type="text" id='mail' class="form-control" placeholder='Email' aria-describedby="sizing-addon3">
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">WWW</span>
        <input  type="text" id='www' class="form-control" placeholder='Adres strony WWW' aria-describedby="sizing-addon3">
    </div><br>
    
    <br><br>
    <button class="btn btn-warning btn-xs" id='edit'>
        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
  </form>
</div>
              
<div class="ui-dialog-danger" id="dialog3" title="Usuń">
  <p style='line-height:90%;margin-top: 10px;'><strong>Chcesz usunąć ten wpis ?</strong><br><br>
  <font size='2px'>Tej operacji nie da się już cofnąć.</font>
  </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>
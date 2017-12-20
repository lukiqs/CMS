<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<script>
    var idsCategory = [0
    {section name=i loop=$_ci_vars.permissions}
        {if isset($_ci_vars.permissions[i].name)}
            ,{$_ci_vars.permissions[i].id}
            {section name=k loop=$_ci_vars.permissions[i].subCategory}
            ,{$_ci_vars.permissions[i].subCategory[k].id}
            {/section}
        {/if}
    {/section}
    ];
</script>
<h1 class="page-header"><span class="glyphicon glyphicon-user"></span> Użytkownicy</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Nazwa</th>
                  <th>Email</th>
                  <th>Tel</th>               
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {section name=i loop=$_ci_vars.user}
                    {if isset($_ci_vars.user[i].name)}
                    <tr class="{if $_ci_vars.user[i].active == 0}danger{else}info{/if}">
                        <td>
                            {if $_ci_vars.user[i].status == 1}<i class="fa fa-male" aria-hidden="true" title='Administrator'></i>{/if}
                            {*$smarty.section.i.iteration*}
                        </td>
                        <td>{$_ci_vars.user[i].name}</td>
                        <td>{$_ci_vars.user[i].mail}</td>
                        <td>{$_ci_vars.user[i].phone}</td>                 
                        <td><button type="button" class="btn btn-warning btn-xs" 
                                    onclick="editUser({$_ci_vars.user[i].id},
                                                '{$_ci_vars.user[i].name}',
                                                '{$_ci_vars.user[i].mail}','{$_ci_vars.user[i].phone}',{$_ci_vars.user[i].status})">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                        </td>
                        <td>
                            <button type="button" class="btn {if $_ci_vars.user[i].contact == 1}btn-success{/if} btn-xs" onclick="contact({$_ci_vars.user[i].id},{if $_ci_vars.user[i].contact == 1}0{else}1{/if})">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true" title='Osoba odpowiedzialana za kontakt'></span></button>
                        </td>
                        <td><button type="button" class="btn btn-info btn-xs" onclick="setPermissions({$_ci_vars.user[i].id})">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true" title='Nadaj uprawnienia'></span></button>
                        </td>
                        <td>
                            <form method="POST">
                                <input type='hidden' name='{if $_ci_vars.user[i].active == 0}unlock{else}lock{/if}' value="{$_ci_vars.user[i].id}">
                                <button type="submit" class="btn btn-primary btn-xs">
                                <i class="fa fa-{if $_ci_vars.user[i].active == 0}unlock-alt{else}lock{/if}" aria-hidden="true"></i> 
                                </button>
                            </form>
                        </td>
                        <td><button type="button" class="btn btn-danger btn-xs" onclick="deleteUser({$_ci_vars.user[i].id})">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                        </td>
                    </tr>
                    {/if}
                {/section}                
              </tbody>
            </table>
          </div>
          <button type="button" class="btn btn-success btn-xs" id='action_addDialog'>
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj użytkownika</button>
                    
<div class="ui-dialog-danger" id="dialog" title="Usuń">
  <p>Usunąć użytkownika ?</p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>

<div class="ui-dialog-danger" id="dialog2" title="Dodaj użytkownika">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='addName' class="form-control" placeholder='Nazwa konta' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Email</span>
    <input type="text" id='addEmail' class="form-control" placeholder='email@exp.pl' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Telefon</span>
    <input type="text" id='addPhone' class="form-control" placeholder='48785242256' aria-describedby="sizing-addon3">
  </div><br>
   
  <button class="switch" id="action_setAdmin"><font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Administrator</button>
  <br><br>
  <button type="button" class="btn btn-success btn-xs" id='action_addUser'>
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>
</div>
              
<div class="ui-dialog-danger" id="dialog3" title="Edycja">
  <br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Nazwa</span>
    <input type="text" id='editName' class="form-control" placeholder='Nazwa konta' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Email</span>
    <input type="text" id='editEmail' class="form-control" placeholder='email@exp.pl' aria-describedby="sizing-addon3">
  </div><br>
  <div class="input-group input-group-sm">
    <span class="input-group-addon" id="sizing-addon3">Telefon</span>
    <input type="text" id='editPhone' class="form-control" placeholder='48785242256' aria-describedby="sizing-addon3">
  </div><br>
   
  <button class="switch" id="action_setAdminEdit"><font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Administrator</button>
  <br><br>
  <button type="button" class="btn btn-warning btn-xs" id='action_saveEdit'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
              
<div class="ui-dialog-danger" id="dialog4" title="Nadaj uprawnienia">
  <br>
  
  {section name=i loop=$_ci_vars.permissions}
  {if isset($_ci_vars.permissions[i].name)}
    <div class="input-group">
      <span class="input-group-addon">
        <input name="per_{$_ci_vars.permissions[i].id}" id='per_{$_ci_vars.permissions[i].id}' type="checkbox" aria-label="...">
      </span>
      <input readonly="" type="text" class="form-control" aria-label="" value="{$_ci_vars.permissions[i].name}">
    </div>
    {section name=k loop=$_ci_vars.permissions[i].subCategory}
        <div class="input-group" style="margin-left:20px;">
            <span class="input-group-addon">
                <input name="per_{$_ci_vars.permissions[i].subCategory[k].id}" id="per_{$_ci_vars.permissions[i].subCategory[k].id}" type="checkbox" aria-label="...">
            </span>
            <input readonly="" type="text" class="form-control" aria-label="" value="{$_ci_vars.permissions[i].subCategory[k].name}">
        </div>
    {/section}
  {/if}
  {/section}
  <br><br>
  <button type="button" class="btn btn-info btn-xs" id='action_savePermissions'>
    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
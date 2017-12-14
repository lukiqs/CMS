<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<script>
    var sortArray = [0{section name=i loop=$_ci_vars}{if isset($_ci_vars[i].id)},{$_ci_vars[i].id}{/if}{/section}];
</script>
<h1 class="page-header"><span class="glyphicon glyphicon-blackboard"></span> Pokaz</h1>
          <div class="table-responsive">
            <table class="table table-striped fixed-width-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Rodzaj tła</th>
                  <th>Wtyczka</th>
                  <th></th>                     
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {section name=i loop=$_ci_vars}
                {if isset($_ci_vars[i].id)}
                    <tr id='{$_ci_vars[i].id}'>
                        <td>Ekran {$smarty.section.i.iteration}</td>
                        <td>
                            {if $_ci_vars[i].type == 1}
                                <span class="glyphicon glyphicon-picture"></span>
                            {elseif $_ci_vars[i].type == 2}
                                <span class="glyphicon glyphicon-facetime-video"></span>
                            {else}
                                <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                            {/if}
                        </td>
                        <td>{$_ci_vars[i].plugin}</td>
                        <td><button type="button" class="btn btn-warning btn-xs" onclick='editScreen({$_ci_vars[i].id},{$_ci_vars[i].type},"{$_ci_vars[i].nameFile}","{$_ci_vars[i].content}")'>
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj</button>
                        </td>  
                        <td><button type="button" class="btn btn-info btn-xs" onclick="pluginScreen({$_ci_vars[i].id})">
                            <i class="fa fa-plug" aria-hidden="true"></i> Wtyczka</button></td>                  
                        <td><button type="button" class="btn btn-danger btn-xs" onclick="deleteScreen({$_ci_vars[i].id})">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button></td>
                    </tr> 
                {/if}
                {/section}                
              </tbody>
            </table>
          </div>
              <button type="button" class="btn btn-success btn-xs" id="action_addScreen">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj ekran</button>
          <button type="button" class="btn btn-primary btn-xs" id='action_save'>
                    <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz kolejność</button> 
          <button type="button" class="btn btn-info btn-xs" onclick="window.open('{$smarty.const.URL_DOMAIN}')">
        <i class="fa fa-search" aria-hidden="true"></i> Podgląd</button>
          {*<br><br><br>
          <h4 class="page-header"><span class="glyphicon glyphicon-cog"></span> Ustawienia</h4>
          
          <button class="switch">
              <font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font>
              Przejścia ekranu
          </button>
          <br>
          <button class="switch">
              <font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font>
              Przejścia ekranu
          </button>
          
          <br><br>
          <div class="input-group input-group-sm" >
            <span class="input-group-addon" id="sizing-addon3">Czas przejścia ekranu</span>
            <input type="text" class="form-control" placeholder="2" style="width:40px" aria-describedby="sizing-addon3">
          </div>
          <br><br>*}
          
          
            
                    
<div class="ui-dialog-danger" id="dialog" title="Usuń">
  <p>Usunąć ekran ?</p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id="action_delete">
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" onclick='$( "#dialog" ).dialog( "close" )'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>
          
<div class="ui-dialog-danger" id="dialog2" title="Edytuj">
  <br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Rodzaj tła</span>
        <select id='typeBgEdit' onchange='loadFileList(false)' class="form-control"  aria-describedby="sizing-addon3">
            <option value="0">Brak</option>
            <option value='1'>Zdjęcie</option>
            <option value="2">Film</option>
        </select>
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Tło</span>
        <select id='editFiles' class="form-control"  aria-describedby="sizing-addon3">
            
        </select>
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Opis</span>
        <input id="editContent" maxlength="100" type="text" name='uploadName' class="form-control" placeholder='Opis' aria-describedby="sizing-addon3">
    </div><br>
  
    

    <br><br>
    <button type="button" class="btn btn-warning btn-xs" id='edit_screen'>
        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Zapisz</button>
</div>
          
<div class="ui-dialog-danger" id="dialog3" title="Dodaj ekran">
  <br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Rodzaj tła</span>
        <select id='typeBg' onchange='loadFileList(true)' class="form-control"  aria-describedby="sizing-addon3">
            <option value="0">Brak</option>
            <option value='1'>Zdjęcie</option>
            <option value="2">Film</option>
        </select>
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Tło</span>
        <select id='addFiles' class="form-control"  aria-describedby="sizing-addon3">
            
        </select>
    </div><br>
    <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Opis</span>
        <input id="addContent" maxlength="100" type="text" name='uploadName' class="form-control" placeholder='Opis' aria-describedby="sizing-addon3">
    </div><br>
  
    

    <br><br>
    <button type="button" class="btn btn-success btn-xs" id='add_screen'>
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj</button>

</div>
          
<div class="ui-dialog-danger" id="dialog4" title="Wybór wtyczki">
  <br>
  <div class="input-group input-group-sm">
        <span class="input-group-addon" id="sizing-addon3">Wtyczka</span>
        <select id='plug' class="form-control"  aria-describedby="sizing-addon3">
            
        </select>
    </div>
  <br>
  <button type="button" class="btn btn-info btn-xs" id="action_plugin">
      <i class="fa fa-plug" aria-hidden="true"></i> Podepnij</button>
  <button type="button" class="btn btn-danger btn-xs" id="action_plugout">
      <i class="fa fa-times" aria-hidden="true"></i> Odepnij</button>
</div>
          
          
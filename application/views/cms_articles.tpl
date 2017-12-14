<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<h1 class="page-header"><span class="glyphicon glyphicon-duplicate"></span> Artykuły</h1>
<br>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th>Nazwa</th>                 
                  <th>W kategorii</th>
                  <th>Autor</th>
                  <th>Utworzone</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </thead> 
                <tbody>
                {section name=i loop=$_ci_vars}
                {if isset($_ci_vars[i].id)}
                <tr class="{if $_ci_vars[i].block==0 AND $_ci_vars[i].error==FALSE}
                    success{elseif $_ci_vars[i].error==TRUE}danger{/if}">
                    <td>
                        {if $_ci_vars[i].error==TRUE}
                            <font color='red'>
                            <i title='Artykuł nie może być widoczny na stronie ponieważ, kategoria do której był podpięty 
                            została usunięta. Edytuj artukuł i nadaj mu istniejącą kategorię.' 
                            class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            </font>
                        {/if}
                    </td>
                    <td>{$_ci_vars[i].name}</td>
                    <td>{$_ci_vars[i].name_category}</td>
                    <td>{$_ci_vars[i].name_user}</td>
                    <td>{$_ci_vars[i].created}</td>
                    <td>
                        {if isset($_ci_vars[i].id_category) AND $_ci_vars[i].block==0}
                        <button type="button" class="btn btn-info btn-xs" onclick="window.open('{$smarty.const.URL_DOMAIN}index.php/Article/index/{$_ci_vars[i].id_category}')">
                        <i class="fa fa-search" aria-hidden="true"></i></button>
                        {/if}
                    </td>
                    <td>
                        {if $_ci_vars[i].block==1}
                                <button title='Podepnij' onclick='link({$_ci_vars[i].id})' class="btn btn-success btn-xs">
                                <i class="fa fa-link" aria-hidden="true"></i> 
                                </button>
                        {else}
                        <button title='Opodepnij' onclick='block({$_ci_vars[i].id})' class="btn btn-danger btn-xs">
                            <i class="fa fa-chain-broken" aria-hidden="true"></i>
                        </button>
                        {/if}
                    </td>
                    <td>
                        <button type="submit" class="btn btn-warning btn-xs" onclick="window.location='{$smarty.const.URL_DOMAIN}index.php/Add/index/{$_ci_vars[i].id}';">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edytuj
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-xs" onclick="deleteArt({$_ci_vars[i].id})" >
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
                    </td>
                </tr>
                {/if}
                {/section}                           
              </tbody>
            </table>
</div>

<div class="ui-dialog-danger" id="dialog" title="Odepnij">
  <p style='line-height:90%;margin-top: 10px;'><strong>Chcesz odpiąć artykuł ?</strong><br><br>
  <font size='2px'>Po odpięciu, artykuł nie będzie widoczny na stronie. Zawsze możesz powrócić do ustawień, 
  klikając zieloną ikonę podpięcia.</font>
  </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_linkArt'>
    <i class="fa fa-chain-broken" aria-hidden="true"></i> Odepnij</button>
  <button type="button" class="btn btn-info btn-xs" id='action_link_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>

<div class="ui-dialog-danger" id="dialog2" title="Usuń">
  <p style='line-height:90%;margin-top: 10px;'><strong>Chcesz usunąć artykuł ?</strong><br><br>
  <font size='2px'>Po usunięciu, artykuł nie będzie widoczny na stonie i w panelu.
  Tej operacji nie da się cofnąć.</font>
  </p>
  <br>
  <button type="button" class="btn btn-danger btn-xs" id='action_delete'>
    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Usuń</button>
  <button type="button" class="btn btn-info btn-xs" id='action_delete_cancel'>
    <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Anuluj</button>
</div>
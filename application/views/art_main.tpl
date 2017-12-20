<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<div class="container">
    <br><br><br><br><br><br>
    <a class="nav_bar_fe" href="{$smarty.const.URL_DOMAIN}">Strona główna</a>
    {section name=i loop=$_ci_vars.navbar}
        <a class="nav_bar_fe" href="{$smarty.const.URL_DOMAIN}index.php/Article/index/{$_ci_vars.navbar[i].id}">{$_ci_vars.navbar[i].name}</a>
    {/section}
</div>

<div class="container">
      <div class="row">
        <br>
        <div class="col-sm-8 blog-main">
          {section name=i loop=$_ci_vars.article}
          <div class="blog-post">
              {$_ci_vars.article[i]}
          </div>
          {/section}
</div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            {*<h4>Przejdź do</h4>*}
            <br><br>
            {section name=i loop=$_ci_vars.category}
                <a class="nav_bar_lg" href="
                   {if $_ci_vars.category[i].url == ''}
                        {$smarty.const.URL_DOMAIN}index.php/Article/index/{$_ci_vars.category[i].id}
                   {else}
                        {$_ci_vars.category[i].url}
                   {/if}">
                    {$_ci_vars.category[i].name}</a><br><br>  
            {/section}
          </div>
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
<br><br><br><br>
    </div><!-- /.container -->


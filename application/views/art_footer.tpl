<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<footer class="footer">
      <div class="container footer_design">
          <h3>
          {*<font size="1px">Obserwuj Nas na: </font>*}
          
          {if $_ci_vars.facebook != ""}
            <a href="{$_ci_vars.facebook}" class="sociable facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          {/if}
          {if $_ci_vars.twitter != ""}
            <a href="{$_ci_vars.twitter}" class="sociable twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          {/if}
          {if $_ci_vars.googlep != ""}
            <a href="{$_ci_vars.googlep}" class="sociable googlep"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
          {/if}
          {if $_ci_vars.pinterest != ""}
            <a href="{$_ci_vars.pinterest}" class="sociable pinterest"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
          {/if}
          {if $_ci_vars.instagram != ""}
            <a href="{$_ci_vars.instagram}" class="sociable insta"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          {/if}
          {if $_ci_vars.youtube != ""}
            <a href="{$_ci_vars.youtube}" class="sociable youtube"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
          {/if}
          <br>
          <font size="1px">{$_ci_vars.description}</font>
          </h3>
          <center>
              <font size="1px">
                  Copyright &copy; {$smarty.now|date_format:"%Y"} by QS. Wszelkie prawa zastrzeżone.<br>
                  {*Proudly created with spsm.edu.pl .
                  Wszelkie prawa zastrzeżone*}
              </font>
          </center>
      </div>
    <br>
</footer>
</body>
</html>
<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<div class="container">
    <br><br><br><br>
    {*
    <a class="nav_bar_fe" href="{$smarty.const.URL_DOMAIN}">Strona główna</a>
    <a class="nav_bar_fe" href="{$smarty.const.URL_DOMAIN}index.php/article/register">Kontakt</a>
    *}
</div>

<div class="container">
    <br>
    <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Kontakt</a></li>
    <li><a href="#tabs-2">Nasz zespół</a></li>
    <li><a href="#tabs-3">Oddziały powiatowe</a></li>
    <li><a href="#tabs-4">Pełnomocnicy SPSM w sprawie 1% odpisów</a></li>
    <li><a href="#tabs-5">Napisz do nas</a></li>
  </ul>
  <div id="tabs-1">
    <br><br>
    <div class="row">
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-home" aria-hidden="true"></i></font><br>
                {if isset($_ci_vars.main_contact_home)}{$_ci_vars.main_contact_home}{/if}
            </center>
        </div>
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-phone" aria-hidden="true"></i></font><br>
                {if isset($_ci_vars.main_contact_phone)}{$_ci_vars.main_contact_phone}{/if}
            </center>
        </div>
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-envelope-o" aria-hidden="true"></i></font><br>
                {if isset($_ci_vars.main_contact_envelope)}{$_ci_vars.main_contact_envelope}{/if}
            </center>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-university" aria-hidden="true"></i></font><br>
                {if isset($_ci_vars.main_contact_bank)}{$_ci_vars.main_contact_bank}{/if}
            </center>
        </div>
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-credit-card" aria-hidden="true"></i></font><br>
                {if isset($_ci_vars.main_contact_card)}{$_ci_vars.main_contact_card}{/if}
            </center>
        </div>
        <div class="col-lg-4">
            <center>
                <font size='10px'><i class="fa fa-clock-o" aria-hidden="true"></i></font><br>
                {if isset($_ci_vars.main_contact_clock)}{$_ci_vars.main_contact_clock}{/if}
            </center>
        </div>
    </div>
    <br><br>
    <div class="row">        
            <center>
                <font size='10px'><i class="fa fa-file-text-o" aria-hidden="true"></i></font><br>
                {if isset($_ci_vars.main_contact_text)}{$_ci_vars.main_contact_text}{/if}
            </center>
    </div>
    <br><br><br><br><br><br>
  </div>
  <div id="tabs-2">
      <br><br>
      <div class="row">
          <div class="col-lg-5">
              {if isset($_ci_vars.team_contact_left)}{$_ci_vars.team_contact_left}{/if}
          </div>
          <div class="col-lg-5">
              {if isset($_ci_vars.team_contact_right)}{$_ci_vars.team_contact_right}{/if}
          </div>
      </div>
      <br><br><br><br><br><br>
  </div>
  <div id="tabs-3">
    <br><br>
    <select id="selectContact" class="contact" onchange="contPer()">
        <option value="0">Wybierz</option>
        {section name=i loop=$_ci_vars}
            {if isset($_ci_vars[i].name)}
                <option value="{$_ci_vars[i].id_user}">{$_ci_vars[i].name}</option>
            {/if}
        {/section}
    </select>
    <br>
      <div class="row"> 
          <br><br>
          <div id="contactData" class="col-lg-5" >              
          </div>
          <div class="col-lg-5">
              <div id="googleMap" style="width:100%;height:400px;"></div>
          </div>
      </div>
      <br><br><br><br><br><br>
  </div>
  <div id="tabs-4">
      <br><br>
      <div class="row" style="padding-left: 20px;">  
          {if isset($_ci_vars.proxy_contact)}{$_ci_vars.proxy_contact}{/if}
      </div> 
      <br><br><br><br><br><br>
  </div>
  <div id="tabs-5"><br>
      <h3>Napisz do nas</h3>
      <form method="POST">
          <br>
          <input type="text" name="name" class="form-control register" placeholder="Imię i nazwisko (wymagane)" aria-describedby="basic-addon1">
          <input type="text" name="mail" class="form-control register" placeholder="Adres email (wymagane)" aria-describedby="basic-addon1">
          <input type="text" name="topic" class="form-control register" placeholder="Temat" aria-describedby="basic-addon1">
          <textarea name="message" class="register" placeholder="Wiadomość" rows="7"></textarea>
          <br>
          <button class="register">Wyślij</button>
      </from>
      <br><br><br><br><br><br>
  </div>
</div>
</div>
      
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARFHyntxWN8piyEnpvqO6hokTnKKb9Cms"></script>
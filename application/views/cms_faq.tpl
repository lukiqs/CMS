<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<h1 class="page-header"><span class="glyphicon glyphicon-book"></span> FAQ</h1>

<p>
    
    {if $smarty.session.x9eA == 1}
        <form method="POST">
            <input type="hidden" name='faq' value="createUser">
            <button class="btn btn-info btn-xs">Jak stworzyć/edytować użytkownika ? (Panel Użytkownicy)</button>
        </form>
        <br>
        <form method="POST">
            <input type="hidden" name='faq' value="setMenu">
            <button class="btn btn-info btn-xs">Jak tworzyć/edytować kategorie ? (Menu)</button>
        </form><br>
        <form method="POST">
            <input type="hidden" name='faq' value="setFooter">
            <button class="btn btn-info btn-xs">Jak edytować stopkę strony ? (Stopka)</button>
        </form><br>
    {else}
    <form method="POST">
        <input type="hidden" name='faq' value="howStart">
        <button class="btn btn-info btn-xs">Jak zacząć ? (Intefrejs panelu)</button>
    </form><br>
    {/if}
    
    <form method="POST">
        <input type="hidden" name='faq' value="category">
        <button class="btn btn-info btn-xs">Jak zarządzać kategoriami ? (Kategorie)</button>
    </form><br>
    
    <form method="POST">
        <input type="hidden" name='faq' value="add">
        <button class="btn btn-info btn-xs">Jak utworzyć artykuł ? (Dodaj)</button>
    </form><br>
    
    <form method="POST">
        <input type="hidden" name='faq' value="hdd">
        <button class="btn btn-info btn-xs">Jak zarządzać plikami ? (Dysk)</button>
    </form><br>
    
    <form method="POST">
        <input type="hidden" name='faq' value="contactPersonal">
        <button class="btn btn-info btn-xs">Jak edytować kontakt ? (Kontakt)</button>
    </form><br>
    
    
    
</p>

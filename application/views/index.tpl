<style>{if isset($_ci_vars.css)}{$_ci_vars.css}{/if}</style>
<script>{if isset($_ci_vars.js)}{$_ci_vars.js}{/if}</script>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Indicators -->
      <ol class="carousel-indicators">
        {section name=i loop=$_ci_vars.index}
            {if isset($_ci_vars.index[i].id)}
                <li data-target="#myCarousel" data-slide-to="{$smarty.section.i.iteration - 1}" {if $smarty.section.i.iteration == 1}class="active"{/if} ></li>
            {/if}
        {/section}
      </ol>
      
      
      <div class="carousel-inner" role="listbox" >
        {section name=i loop=$_ci_vars.index}
            {if isset($_ci_vars.index[i].id)}
                <div class="item{if $smarty.section.i.iteration == 1} active{/if}" style="background-color:white;">
                    {if $_ci_vars.index[i].type == 1}
                        <img class="second-slide" style="height: 100%;" src="assets/hdd/{$_ci_vars.index[i].url}" alt="{$_ci_vars.index[i].content}">
                        <div class="container">  
                            {if $_ci_vars.index[i].plugin == "Wydarzenia"}
                                {include file='application/views/plug_events.tpl'}                           
                            {/if}
                            <div class="carousel-caption">
                                {if $_ci_vars.index[i].plugin == "KPS"}
                                    {include file='application/views/plug_KPS.tpl'} 
                                {elseif $_ci_vars.index[i].plugin == "Artykuły"}
                                    {include file='application/views/plug_articles.tpl'}
                                {/if}
                                {if $_ci_vars.index[i].content|count_characters:true <60}<h1>{else}<h3>{/if}
                                {$_ci_vars.index[i].content}
                                {if $_ci_vars.index[i].content|count_characters:true <60}</h1>{else}</h3>{/if}
                            </div>
                        </div>
                    {elseif $_ci_vars.index[i].type == 2}
                        <video id="bg" autoplay="autoplay" muted="" loop="loop" style="width: 100%;">
                            <source src="assets/hdd/{$_ci_vars.index[i].url}" {*type="video/mp4"*} />
                        </video>
                        <div class="container"> 
                            {if $_ci_vars.index[i].plugin == "Wydarzenia"}
                                {include file='application/views/plug_events.tpl'}
                            {/if}
                            <div class="carousel-caption">
                                {if $_ci_vars.index[i].plugin == "KPS"}
                                    {include file='application/views/plug_KPS.tpl'}
                                {elseif $_ci_vars.index[i].plugin == "Artykuły"}
                                    {include file='application/views/plug_articles.tpl'}
                                {/if}
                                {if $_ci_vars.index[i].content|count_characters:true <60}<h1>{else}<h3>{/if}
                                {$_ci_vars.index[i].content}
                                {if $_ci_vars.index[i].content|count_characters:true <60}</h1>{else}</h3>{/if}
                            </div>
                        </div>
                    {else}
                        <div class="container">   
                            {if $_ci_vars.index[i].plugin == "Wydarzenia"}
                                {include file='application/views/plug_events.tpl'}
                            {/if}
                            <div class="carousel-caption">
                                {if $_ci_vars.index[i].plugin == "KPS"}
                                    {include file='application/views/plug_KPS.tpl'}  
                                {elseif $_ci_vars.index[i].plugin == "Artykuły"}
                                    {include file='application/views/plug_articles.tpl'}
                                {/if}
                                {if $_ci_vars.index[i].content|count_characters:true <60}<h1>{else}<h3>{/if}
                                {$_ci_vars.index[i].content}
                                {if $_ci_vars.index[i].content|count_characters:true <60}</h1>{else}</h3>{/if}
                            </div>
                        </div>
                    {/if}
                </div>
            {/if}
        {/section}  
      </div>
          
          
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control"  href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
          
    </div><!-- /.carousel -->
    
    <script>
        var video = document.getElementById('bg');
        video.volume = 0.2;
        $('.carousel').carousel({
            interval: 1000 * 10
        }); 
    </script>
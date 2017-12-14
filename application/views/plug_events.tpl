{literal}
<script>
  $( function() {
    {/literal}
    {section name=i loop=$_ci_vars.event}
    $( "#dialog{$smarty.section.i.iteration}" ).dialog({literal}{
            position: { 
               {/literal}
                my: 'right+{($smarty.section.i.iteration*100)-100}', 
                at: 'top+{($smarty.section.i.iteration*100)+50}'
               {literal}
            },
            appendTo: "#events",
            resizable: false,
            width: 600,
            height: 100,
        }
    );
    {/literal}{/section}{literal}
  } );
</script>
{/literal}
<div class="container" id="events">
    {section name=i loop=$_ci_vars.event}
        <div id="dialog{$smarty.section.i.iteration}" title="{$_ci_vars.event[i].title} {$_ci_vars.event[i].date}">
            <p>{$_ci_vars.event[i].content}</p>
        </div>
    {/section}
</div>

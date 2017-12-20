/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    $( "#dialog" ).dialog({
        autoOpen: false,
        open: function(event, ui){
        setTimeout("$('#dialog').dialog('close')",2000);
      }
    }).prev(".ui-dialog-titlebar").css("background","#337ab7");
    
    $("#action_save").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               setFooter : true,
               setDesc :  document.getElementById("description").value,
               setFace :  document.getElementById("facebook").value,
               setTwit :  document.getElementById("twitter").value,
               setGoog :  document.getElementById("googlep").value,
               setPint :  document.getElementById("pinterest").value,
               setInst :  document.getElementById("instagram").value,
               setYout :  document.getElementById("youtube").value
            },
            success : function(json) {
                $( "#dialog" ).dialog( "open" );
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
});
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var report_text = "";

$(document).ready(function(){
    $( "#dialog" ).dialog({
      autoOpen: false,
      open: function(event, ui){
        setTimeout("$('#dialog').dialog('close')",2000);
      }
    }).prev(".ui-dialog-titlebar").css("background","#337ab7");
    
    $("#action_send").click(function() {
        report_text = document.getElementById("from_report").value;
        if(report_text != "")
            $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               from_report : report_text
            },
            success : function(json) {
                document.getElementById("from_report").value = "";
                $( "#dialog" ).dialog( "open" );
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
             

    });
});
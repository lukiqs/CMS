/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var idFileToDelete = null;

$(document).ready(function(){
    $( "#dialog" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#d9534f");
    $( "#dialog2" ).dialog({
        autoOpen: false,
        minWidth: $(window).width()*0.5,
        open: function() {
            $(this).dialog('option', 'minWidth', $(window).width()*0.5);
   }
    }).prev(".ui-dialog-titlebar").css("background","#f0ad4e");
    $( "#dialog3" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#4cae4c");
    
    $("#action_upload").click(function() {
        $( "#dialog3" ).dialog( "open" );
    });
    
    $("#action_deleteCancel").click(function() {
        $( "#dialog" ).dialog( "close" );
    });
    
    $("#action_delete").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               idFileToDelete : idFileToDelete
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
});

function showLink($name,$link){
    document.getElementById("dialog2").innerHTML = "Link do pliku '"+$name+"' :<br><br>"+$link;
    
    $( "#dialog2" ).dialog( "open" );
}

function deleteFile(id){
    idFileToDelete = id;
    
    $( "#dialog" ).dialog( "open" );
}

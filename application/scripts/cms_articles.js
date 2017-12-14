/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var idArtToBlock = null;
var idArtToDelete = null;

$(document).ready(function(){
    $( "#dialog" ).dialog({
        autoOpen: false,
        minWidth: $(window).width()*0.5
    }).prev(".ui-dialog-titlebar").css("background","#d9534f");
    $( "#dialog2" ).dialog({
        autoOpen: false,
        minWidth: $(window).width()*0.5
    }).prev(".ui-dialog-titlebar").css("background","#d9534f");
    
    $("#action_link_cancel").click(function() {
        $( "#dialog" ).dialog( "close" );
    });
    
    $("#action_linkArt").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               unlink: idArtToBlock
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
    
    $("#action_delete_cancel").click(function() {
        $( "#dialog2" ).dialog( "close" );
    });
    
    $("#action_delete").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               deleteArt : idArtToDelete
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

function block(id){
    idArtToBlock = id;
    $( "#dialog" ).dialog( "open" );
}

function link(id){
    $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
              link: id
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
}

function deleteArt(id){
    idArtToDelete = id;
    $( "#dialog2" ).dialog( "open" );
}
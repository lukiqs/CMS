/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var idEventToDelete = null;
var idEventToEdit = null;

$(document).ready(function(){
    $( "#dialog" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#d9534f");
    $( "#dialog2" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#4cae4c");
    $( "#dialog3" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#f0ad4e");
    
    $("#action_addEvent").click(function() {
        $( "#dialog2" ).dialog( "open" );
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
               deleteEvent : idEventToDelete
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
    
    $("#action_add").click(function() {
        var addTitle = document.getElementById("addTitle").value;
        var addContent = document.getElementById("addContent").value;
        var addDate = document.getElementById("addDate").value;
        
        if(addTitle != "" && addContent!="" && addDate!="")
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               addEvent : true,
               addTitle  : addTitle,
               addContent : addContent,
               addDate : addDate
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
                //the same address mail
                //document.getElementById("addName").style('color') = 'red';
            }
        });
    });
    
    $("#action_editEvent").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               editEvent : idEventToEdit,
               editTitle  : document.getElementById("editTitle").value,
               editContent : document.getElementById("editContent").value,
               editDate : document.getElementById("editDate").value
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
                //the same address mail
                //document.getElementById("addName").style('color') = 'red';
            }
        });
    });
    
});

function deleteEvent(id){
    idEventToDelete = id;
    $( "#dialog" ).dialog( "open" );
}

function editEvent(id,name,content,date){
    idEventToEdit = id;
    document.getElementById("editTitle").value = name;
    document.getElementById("editContent").value = content;
    document.getElementById("editDate").value = date;
    
    $( "#dialog3" ).dialog( "open" );
}
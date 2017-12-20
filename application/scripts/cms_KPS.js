/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var idKPSToEdit = null;
var idKPSToDelete = null;

$(document).ready(function(){
    $( "#dialog" ).dialog({
        autoOpen: false,
        minWidth: $(window).width()*0.5,
        maxHeight: $(window).height() - 200
    }).prev(".ui-dialog-titlebar").css("background","#4cae4c");
    $( "#dialog2" ).dialog({
        autoOpen: false,
        minWidth: $(window).width()*0.5,
        maxHeight: $(window).height() - 200
    }).prev(".ui-dialog-titlebar").css("background","#f0ad4e");
    $( "#dialog3" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#d9534f");
    
    $("#action_add").click(function() {
        $( "#dialog" ).dialog( "open" );
    });
    
    $("#edit").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               eId : idKPSToEdit,
               eName : document.getElementById("name").value,
               eAddress : document.getElementById("address").value,
               ePhone : document.getElementById("phone").value,
               eMail : document.getElementById("mail").value,
               eWWW : document.getElementById("www").value
            },
            success : function(json) {
                //location.reload();
            }
            ,error: function(err) {
                alert(JSON.stringify(err));
            }
        });
    });
    
    $("#action_delete_cancel").click(function() {
        $( "#dialog3" ).dialog( "close" );
    });
    
    $("#action_delete").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               deleteKPS : idKPSToDelete
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

function editKPS(id,name,address,phone,mail,www){
    idKPSToEdit = id;
    document.getElementById("name").value = name;
    document.getElementById("address").value = address;
    document.getElementById("phone").value = phone;
    document.getElementById("mail").value = mail;
    document.getElementById("www").value = www;
    
    $( "#dialog2" ).dialog( "open" );
}

function deleteKPS(id){
    idKPSToDelete = id;
    $( "#dialog3" ).dialog( "open" );
}
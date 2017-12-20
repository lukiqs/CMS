/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var action_setAdmin = false;
var idUserToDelete = null;
var idUserToEdit = null;
var idsCategory = null;
var idUserToPermissions = null;

$(document).ready(function(){
    $( "#dialog" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#d9534f");
    $( "#dialog2" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#4cae4c");
    $( "#dialog3" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#f0ad4e");
    $( "#dialog4" ).dialog({
        autoOpen: false,
        minWidth: 500,
        maxHeight: $(window).height() - 200,
        open: function() {
            $(this).dialog('option', 'maxHeight', $(window).height() - 200);
   }
    }).prev(".ui-dialog-titlebar").css("background","#46b8da");
    
    $("#action_addDialog").click(function() {
        $( "#dialog2" ).dialog( "open" );
    });
    
    $("#action_setAdmin").click(function() {
        if(action_setAdmin){
            action_setAdmin = false;
            loadSwitch();
        }
        else{
           action_setAdmin = true;
            loadSwitch(); 
        }
    });
    
    $("#action_addUser").click(function() {
        var addName = document.getElementById("addName").value;
        var addEmail = document.getElementById("addEmail").value;
        var addPhone = document.getElementById("addPhone").value;
        if(addName != "" && addEmail != "" && addPhone != "")
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               addUser : true,
               addName  : addName,
               addEmail : addEmail,
               addPhone : addPhone,
               addAdmin : action_setAdmin
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
    
    $("#action_delete_cancel").click(function() {
        $( "#dialog" ).dialog( "close" );
    });
    
    $("#action_delete").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               deleteUser : idUserToDelete
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
    
    $("#action_setAdminEdit").click(function() {
        if(action_setAdminEdit){
            action_setAdminEdit = false;
            loadSwitch();
        }
        else{
           action_setAdminEdit = true;
            loadSwitch(); 
        }
    });
    
    $("#action_saveEdit").click(function() {
        var editName = document.getElementById("editName").value;
        var editEmail = document.getElementById("editEmail").value;
        var editPhone = document.getElementById("editPhone").value;
        if(addName != "" && addEmail != "" && addPhone != "")
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               editUser : true,
               editId : idUserToEdit,
               editName  : editName,
               editEmail : editEmail,
               editPhone : editPhone,
               editAdmin : action_setAdminEdit
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
    
    $("#action_savePermissions").click(function() {
        var data = [];
        
        for (i = 1; i < idsCategory.length; i++){
            if(document.getElementById("per_"+idsCategory[i]).checked)
                data.push(idsCategory[i]);
        }     
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               setPermissions : idUserToPermissions,
               setData : data
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

function loadSwitch(){
    if(action_setAdmin)
        document.getElementById("action_setAdmin").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Administrator';
    else
        document.getElementById("action_setAdmin").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Administrator';
    
    if(action_setAdminEdit)
        document.getElementById("action_setAdminEdit").innerHTML = '<font size="4px" color="green"><i class="fa fa-toggle-on" aria-hidden="true"></i></font> Administrator';
    else
        document.getElementById("action_setAdminEdit").innerHTML = '<font size="4px" color="#d43f3a"><i class="fa fa-toggle-off" aria-hidden="true"></i></font> Administrator';
}

function deleteUser(id){
    idUserToDelete = id;
    $( "#dialog" ).dialog( "open" );
}

function editUser(id,name,mail,phone,status){
    idUserToEdit = id;
    document.getElementById("editName").value = name;
    document.getElementById("editEmail").value = mail;
    document.getElementById("editPhone").value = phone;
    action_setAdminEdit = status;
    loadSwitch();
    
    $( "#dialog3" ).dialog( "open" );
}

function setPermissions(id){
    idUserToPermissions = id;
    
    $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               permissions : id
            },
            success : function(json) {
                for (i = 1; i < idsCategory.length; i++)
                    document.getElementById("per_"+idsCategory[i]).checked = false;
                
                for (i = 0; i < json.length; i++)
                    document.getElementById("per_"+json[i]).checked = true;

                $( "#dialog4" ).dialog( "open" );
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
}

function contact(id,option){
    $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               contactId : id,
               contactOption : option
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
}
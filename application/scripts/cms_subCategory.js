/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var idCategoryToEdit = null;
var idCategoryToDelete = null;

$(document).ready(function(){
    $( "#dialog" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#4cae4c");
    $( "#dialog2" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#f0ad4e");
    $( "#dialog3" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#d9534f");
    
    $("#action_addDialog").click(function() {
        $( "#dialog" ).dialog( "open" );
    });
    
    $("#action_addCategory").click(function() {
        var addName = document.getElementById("addName").value;
        var addSubCat = document.getElementById("addSubCat").value;
        var addUrl = document.getElementById("addUrl").value;
        if(addName != "" && addSubCat  != "")
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               addCategory : true,
               addName  : addName,
               addSubCat : addSubCat,
               addUrl : addUrl
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
    
    $("#action_saveEdit").click(function() {
        var editName = document.getElementById("editName").value;
        var editSubCat = document.getElementById("editSubCat").value;
        var editUrl = document.getElementById("editUrl").value;
        if(editName != "" && editSubCat != "")
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               editCategory : true,
               editId : idCategoryToEdit,
               editName  : editName,
               editSubCat : editSubCat,
               editUrl : editUrl
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
        $( "#dialog3" ).dialog( "close" );
    });
    
    $("#action_delete").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               deleteCategory : idCategoryToDelete
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


function editMenu(id,name,category,url,main){
    idCategoryToEdit = id;
    document.getElementById("editName").value = name;
    document.getElementById("editSubCat").value = category;
    document.getElementById("editUrl").value = url;
    
    if(main){
        document.getElementById('editSubCatV').style.visibility = "hidden";
        document.getElementById('editUrlV').style.visibility = "hidden";
    }
    else{
        document.getElementById('editSubCatV').style.visibility = "visible";
        document.getElementById('editUrlV').style.visibility = "visible";
    } 
    
    $( "#dialog2" ).dialog( "open" );
}

function deleteMenu(id){
    idCategoryToDelete = id;
    $( "#dialog3" ).dialog( "open" );
}
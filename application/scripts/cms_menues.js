/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var idCategoryToDelete = null;
var idCategoryToEdit = null;
var save = [];

$(document).ready(function(){
    sortable_tables.sorting_field_table();
    $('.non-fixed-width-table tbody').sortable();
    $( "#dialog" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#d9534f");
    $( "#dialog2" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#337ab7");
    $( "#dialog3" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#4cae4c");
    $( "#dialog4" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#f0ad4e");
    
    $("#action_addCategory").click(function() {
        var addName = document.getElementById("addName").value;
        var addSubCat = document.getElementById("addSubCat").value;
        var addUrl = document.getElementById("addUrl").value;
        if(addName != "")
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
        if(editName != "")
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
    
    $("#action_delete_cancel").click(function() {
        $( "#dialog" ).dialog( "close" );
    });
    
    $("#action_addDialog").click(function() {
        $( "#dialog3" ).dialog( "open" );
    });
    
    $("#action_save").click(function() {      
        save[0]=0;
        for (i = 1; i < sortArray.length; i++) {
            var listItem = $( "#"+sortArray[i] );
            save[i] = $( "tr" ).index( listItem );
        }
        //alert(sortArray);
        //alert(save);
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               save: true,
               saveId: sortArray,
               saveSort : save
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
        //$( "#dialog" ).dialog( "close" );
    });
    
});

var sortable_tables =
{
    sorting_field_table: function()
    {
        $('.fixed-width-table tbody').sortable({
            helper: sortable_tables.fixWidthHelper
        }).disableSelection();
    },

    fixWidthHelper: function(e, ui) {
        ui.children().each(function() {
            $(this).width($(this).width());
        });
        return ui;
    }
}

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
    
    $( "#dialog4" ).dialog( "open" );
}

function deleteMenu(id){
    idCategoryToDelete = id;
    $( "#dialog" ).dialog( "open" );
}
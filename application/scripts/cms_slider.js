/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var idScreenToDelete = null;
var idScreenToEdit = null;
var idScreenToPlugin = null;
var save = [];

$(document).ready(function(){
    sortable_tables.sorting_field_table();
    $('.non-fixed-width-table tbody').sortable();
    $( "#dialog" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#d9534f");
    $( "#dialog2" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#f0ad4e");
    $( "#dialog3" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#4cae4c");
    $( "#dialog4" ).dialog({autoOpen: false}).prev(".ui-dialog-titlebar").css("background","#46b8da");
    
    $("#action_addScreen").click(function() {
        $( "#dialog3" ).dialog( "open" );
    });
    
    $("#action_save").click(function() {      
        save[0]=0;
        var saveSort = [];
        for (i = 1; i < sortArray.length; i++) {
            var listItem = $( "#"+sortArray[i] );
            save[i] = $( "tr" ).index( listItem );
        }
        
        for (i = 0; i < sortArray.length; i++) {            
            saveSort[save[i]] = sortArray[i];
            //alert(saveSort[i] + ' = ' +sortArray[save[i]]+ " save : "+save[i]);
        }
        //alert(sortArray);
        //alert(save);
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               save: true,
               saveSort : saveSort
            },
            success : function(json) {
                //alert(save);
                //alert(saveSort);
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
        //$( "#dialog" ).dialog( "close" );
    });
    
    $("#action_delete").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               idScreenToDelete : idScreenToDelete
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
    
    $("#edit_screen").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               idScreenToEdit : idScreenToEdit,
               editType : document.getElementById("typeBgEdit").value,
               editFile : document.getElementById("editFiles").value,
               editContent : document.getElementById("editContent").value
               
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
    
    $("#add_screen").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               addScreen : true,
               addType : document.getElementById("typeBg").value,
               addFile : document.getElementById("addFiles").value,
               addContent : document.getElementById("addContent").value
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
    
    $("#action_plugin").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               plugId : idScreenToPlugin,
               plugType : document.getElementById("plug").value
            },
            success : function(json) {
                location.reload();
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    });
    
    $("#action_plugout").click(function() {
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               plugIdDelete : idScreenToPlugin
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

function loadFileList(mode){
    var change = '';
    
    if(mode)
        change = document.getElementById("typeBg").value;
    else
        change = document.getElementById("typeBgEdit").value;
    
    if(change == 0){
        if(mode)
            document.getElementById("addFiles").innerHTML = "";
        else
            document.getElementById("editFiles").innerHTML = "";
        
        return;
    }
    else if(change == 1)
        change = "fa fa-file-image-o";
    else if(change == 2)
        change = "fa fa-file-video-o";
    
    $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               filterFile : change
            },
            success : function(json) {
                var option = "";
                for (i = 0; i < json.length; i++)
                    option = option + "<option>" + json[i]['name'] + "</option>";
                
                if(mode)
                    document.getElementById("addFiles").innerHTML = option;
                else
                    document.getElementById("editFiles").innerHTML = option;
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
        
}

function deleteScreen(id){
    idScreenToDelete = id;
    
    $( "#dialog" ).dialog( "open" );
}

function pluginScreen(id){
    idScreenToPlugin = id;
    
    $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               pluginList : true
            },
            success : function(json) {
                var option = "";
                for (i = 0; i < json.length; i++)
                    option = option + "<option>" + json[i] + "</option>";
                
                    document.getElementById("plug").innerHTML = option;
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
    
    $( "#dialog4" ).dialog( "open" );
}

function editScreen(id,type,bg,content){
    idScreenToEdit = id;
    document.getElementById("typeBgEdit").value = type;    
    document.getElementById("editContent").value = content;
    loadFileList(false);
    document.getElementById("editFiles").value = bg;
    
    $( "#dialog2" ).dialog( "open" );
}

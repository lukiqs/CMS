/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var edit = null;

$(document).ready(function(){
    tinymce.init({ selector:'textarea' });
    
    $( "#dialog" ).dialog({
        autoOpen: false,
        minWidth: $(window).width()*0.6,
        maxHeight: $(window).height() - 200,
        open: function() {
            $(this).dialog('option', 'maxHeight', $(window).height() - 200);
        }
    }).prev(".ui-dialog-titlebar").css("background","#f0ad4e");
    
    $("#action_saveEdit").click(function() { 
        content = tinyMCE.get('edit').getContent();
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               editMainContact : edit,
               editMainContactC : content
            },
            success : function(json) {
                $( "#dialog" ).dialog( "close" );
            }
            ,error: function(err) {
                alert(JSON.stringify(err));
            }
        });
    });
});

//$(function(){
//  $('#edit').on('froalaEditor.contentChanged froalaEditor.initialized', function (e, editor) {
//    
//  }).froalaEditor({enter: $.FroalaEditor.ENTER_BR});
//  
//});

function editMain(name){
    edit = name;
        $.ajax({
            type: "POST",
            url: "",
            dataType : "json",
            data: {
               getMainContact : edit
            },
            success : function(json) {
                //$('#edit').froalaEditor('html.set', json);
                tinyMCE.get('edit').setContent(json);
                $( "#dialog" ).dialog( "open" );
            }
            ,error: function(err) {
                //alert(JSON.stringify(err));
            }
        });
}
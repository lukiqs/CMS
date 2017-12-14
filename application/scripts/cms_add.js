/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var edit = null;

$(document).ready(function(){
    $("#action_addArticle").click(function() {
        if(document.getElementById("categoryArt").value != "0"){
          if(edit == null)
            $.ajax({
                type: "POST",
                url: "",
                dataType : "json",
                data: {
                    addArt : true,
                    nameArt : document.getElementById("nameArt").value,
                    categoryArt : document.getElementById("categoryArt").value,
                    contentArt : document.getElementById("preview").innerHTML
                },
                success : function(json) {
                    location.reload();
                }
                ,error: function(err) {
                    //alert(JSON.stringify(err));
                }
            });
          else
           $.ajax({
                type: "POST",
                url: "",
                dataType : "json",
                data: {
                    editArt : edit,
                    nameArt : document.getElementById("nameArt").value,
                    categoryArt : document.getElementById("categoryArt").value,
                    contentArt : document.getElementById("preview").innerHTML
                },
                success : function(json) {
                    location.reload();
                }
                ,error: function(err) {
                    //alert(JSON.stringify(err));
                }
            });
        }
    });
});

$(function(){
  $('#edit').on('froalaEditor.contentChanged froalaEditor.initialized', function (e, editor) {
    $('#preview').html(editor.html.get());
  }).froalaEditor({});
});


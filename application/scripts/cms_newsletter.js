/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    $( "#dialog" ).dialog().prev(".ui-dialog-titlebar").css("background","#337ab7");
});

$(function() {
    $('div#froala-editor')
      .on('froalaEditor.contentChanged froalaEditor.initialized', function (e, editor) {
        $('pre#eg-previewer').text(editor.codeBeautifier.run(editor.html.get()))
        $('pre#eg-previewer').removeClass('prettyprinted');
        prettyPrint()
      })
      .froalaEditor()
  });

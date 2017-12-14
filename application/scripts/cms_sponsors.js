/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    sortable_tables.sorting_field_table();
    $('.non-fixed-width-table tbody').sortable();
    $( "#dialog" ).dialog().prev(".ui-dialog-titlebar").css("background","#d9534f");
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

if($("#user_list_ajax").length)
{
    var sea_data = $("#msg_search").serialize();
    $('#user_list_ajax').dataTable({
            "bDestroy": true,
            "bProcessing": true,
            "bServerSide": true,
            "responsive": true,
            "sAjaxSource": "/users/manage/ajax_display_list?"+sea_data,
            "bVisible":false,    
            "iDisplayLength": 50,
            "bFilter": false,
            "sDom": "<'row'<'col-md-6'l><'col-md-12'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
            "oLanguage": {  "sSearch": "<span></span> _INPUT_" ,"sLengthMenu": ""},
            "aoColumns": [
                    { "mData": "display_name","bSortable": false},
                    { "mData": "email","bSortable": false},
                    { "mData": "active","bSortable": false}
                ],
             "aaSorting": [[2, "desc" ]],

    } );
    $("#orders_list_ajax").css("margin-top","-19px");	
}
/**
 * Work_assignments_validation_js.php
 *
 * Validate Work Assignment view,edit forms AND datatable ajax
 */

    if($("#msgs_list_ajax").length)
    {
    	var sea_data = $("#msg_search").serialize();
        $('#msgs_list_ajax').dataTable({
                "bDestroy": true,
                "bProcessing": true,
                "bServerSide": true,
                "responsive": true,
                "sAjaxSource": "/users/message/ajax_display_list?"+sea_data,
				"bVisible":false,    
                "iDisplayLength": 50,
                "bFilter": false,
                "sDom": "<'row'<'col-md-6'l><'col-md-12'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "oLanguage": {  "sSearch": "<span></span> _INPUT_" ,"sLengthMenu": ""},
                "aoColumns": [
                        { "mData": "from_user","bSortable": false},
                        { "mData": "subject","bSortable": false},
                        { "mData": "received_on","bSortable": false}
                    ],
                 "aaSorting": [[2, "desc" ]],
                         
        } );
		$("#orders_list_ajax").css("margin-top","-19px");	
    }




    var composeUsers = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      prefetch: '/users/message/myusers',
      remote: {
        url: '/users/message/myusers',
        wildcard: '%QUERY'
      }
    });

    $('#cmp_to_user').typeahead(null, {
      name: 'compose-users',
      display: 'value',
      source: composeUsers
    });
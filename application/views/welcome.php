<STYLE>

        .cvteste {
            background-color: green !important;
        }

</STYLE>
<pre>
<?php print_r($test);?>
</pre>
<script type="text/javascript">
$(function(){ 
  $("#list").jqGrid({
    url:'jgrid/test',
    datatype: 'xml',
    mtype: 'POST',
    colNames:['id','parrent_id', 'type_id','name','code','type'],
    colModel :[ 
		{name:'id', index:'id', width:10}, 
		{name:'parrent_id', index:'parrent_id', width:10}, 
		{name:'type_id', index:'type_id', width:10, align:'right'}, 
		{name:'name', index:'name', width:80, align:'right'}, 
		{name:'code', index:'code', width:180, align:'right',classes: 'cvteste'}, 
		{name:'type', index:'type', width:80,align:'right'}
    ],
    pager: '#pager',
    rowNum:50,
    rowList:[10,30,50,100,500],
    sortname: 'id',
    sortorder: 'desc',
    viewrecords: true,
    gridview: true,
    caption: 'My first grid',
	autowidth: true,
    subGrid: true,
    subGridRowExpanded: function(subgrid_id, row_id){
    // we pass two parameters
    // subgrid_id is a id of the div tag created within a table
    // the row_id is the id of the row
    // If we want to pass additional parameters to the url we can use
    // the method getRowData(row_id) - which returns associative array in type name-value
    // here we can easy construct the following
       var subgrid_table_id;
       subgrid_table_id = subgrid_id+"_t";
       jQuery("#"+subgrid_id).html("<table id='"+subgrid_table_id+"' class='scroll'></table>");
       jQuery("#"+subgrid_table_id).jqGrid({
          url:"jgrid/test/"+row_id,
          datatype: "xml",
		  mtype: 'POST',
          colNames:['id','parrent_id', 'type_id','name','code','type'],
          colModel: [
			  {name:'id', index:'id', width:10}, 
			  {name:'parrent_id', index:'parrent_id', width:10}, 
			  {name:'type_id', index:'type_id', width:10, align:'right'}, 
			  {name:'name', index:'name', width:80, align:'right'}, 
			  {name:'code', index:'code', width:180, align:'right'}, 
			  {name:'type', index:'type', width:80,align:'right'}
          ],
          height: '100%',
          rowNum:20,
          sortname: 'id',
          sortorder: "asc"
		  //autowidth: true
       });
   }
  }); 
}); 
</script>
 
</head>
<body>
<table id="list"><tr><td/></tr></table> 
<div id="pager"></div>
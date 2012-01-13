<STYLE>
.cvteste{
	background-color: gray !important;
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
    colNames:['Actions','id','parrent_id','type_id','name','code','type'],
    colModel :[ 
		{name:'act',index:'act', width:75,sortable:false},
		{name:'id', index:'id', width:10}, 
		{name:'parrent_id', index:'parrent_id', width:10}, 
		{name:'type_id', index:'type_id', width:10, align:'right'}, 
		{name:'name', index:'name', width:80, align:'right',editable:true}, 
		{name:'code', index:'code', width:180, align:'right',editable:true},//classes: 'cvteste'}, 
		{name:'type', index:'type', width:80,align:'right',editable:true}
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
	gridComplete: function(){
		var ids = jQuery("#list").jqGrid('getDataIDs');
		for(var i=0;i < ids.length;i++){
			var cl = ids[i];
			be = "<input style='height:22px;width:20px;' type='button' value='E' onclick=\"jQuery('#list').editRow('"+cl+"');\"  />";
			se = "<input style='height:22px;width:20px;' type='button' value='S' onclick=\"jQuery('#list').saveRow('"+cl+"');\"  />";
			ce = "<input style='height:22px;width:20px;' type='button' value='C' onclick=\"jQuery('#list').restoreRow('"+cl+"');\" />";
			jQuery("#list").jqGrid('setRowData',ids[i],{act:be+se+ce});
			
			//тест раскраски строки в зависимости от значения какойнибудь ячейки
			var status = jQuery("#list").getRowData(ids[i]).name;
			if(status == "Пуансон"){
				$("#"+ids[i]).find("td").css("background-color", "green");
				$("#"+ids[i]).find("td").css("color", "silver");
			}
			//alert (status);
		}
	},
	editurl: "jgrid/test",
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
			colNames:['Actions','id','parrent_id', 'type_id','name','code','type'],
			colModel: [
				{name:'act',index:'act', width:75,sortable:false},
				{name:'id', index:'id', width:10},
				{name:'parrent_id', index:'parrent_id', width:10}, 
				{name:'type_id', index:'type_id', width:10, align:'right'}, 
				{name:'name', index:'name', width:80, align:'right',editable:true}, 
				{name:'code', index:'code', width:180, align:'right',editable:true},
				{name:'type', index:'type', width:80,align:'right',editable:true}
			],
			height: '100%',
			rowNum:20,
			sortname: 'id',
			sortorder: "asc",
			autowidth: true,
			editurl: "jgrid/test",
			gridComplete: function(){
				var ids = jQuery("#"+subgrid_table_id).jqGrid('getDataIDs');
				for(var i=0;i < ids.length;i++){
					
					var cl = ids[i];
					be = "<input style='height:22px;width:20px;' type='button' value='E' onclick=\"jQuery('#list').editRow('"+cl+"');\"  />";
					se = "<input style='height:22px;width:20px;' type='button' value='S' onclick=\"jQuery('#list').saveRow('"+cl+"');\"  />";
					ce = "<input style='height:22px;width:20px;' type='button' value='C' onclick=\"jQuery('#list').restoreRow('"+cl+"');\" />";
					jQuery("#"+subgrid_table_id).jqGrid('setRowData',ids[i],{act:be+se+ce});
					
					//тест раскраски строки в зависимости от значения какойнибудь ячейки
					var status = jQuery("#"+subgrid_table_id).getRowData(ids[i]).name;
					if(status == "Электрод"){
						$("#"+ids[i]).find("td").css("background-color", "lime");
						//$("#"+ids[i]).find("td").css("color", "silver");
					}
					//alert (status);
				}
			}
       });
	}
  }); 
}); 
</script>
 
</head>
<body>
<table id="list"><tr><td/></tr></table> 
<div id="pager"></div>
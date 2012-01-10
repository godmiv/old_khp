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
      {name:'code', index:'code', width:180, align:'right'}, 
      {name:'type', index:'type', width:80,align:'right'}
    ],
    pager: '#pager',
    rowNum:50,
    rowList:[10,30,50,100,500],
    sortname: 'id',
    sortorder: 'desc',
    viewrecords: true,
    gridview: true,
    caption: 'My first grid'
  }); 
}); 
</script>
 
</head>
<body>
<table id="list"><tr><td/></tr></table> 
<div id="pager"></div>
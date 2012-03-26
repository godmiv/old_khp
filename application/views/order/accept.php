<script type="text/javascript">
$(function(){
jQuery("#startedorders").jqGrid({
    url:'<?php echo URL::base()?>order/started',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?php echo implode('","',$colnames['startedorders']);?>"],
   	colModel:[
		<?php foreach($columns['startedorders'] as $key=>$col):?>
		{name:'<?=$key;?>',
			index:'<?=$key;?>',
			width:<?=$col[1];?>,
			editable:<?php
			if($key != 'id') echo 'true';
			else echo 'false'
			?>},
		<?php endforeach;?>
   	],
   	rowNum:20,
   	rowList:[5,10,20,30],
   	pager: '#pagerstartedorders',
   	sortname: 'number',
    viewrecords: true,
    sortorder: "desc",
    caption: "Выданные заказы",
	//autowidth: true,
	height: "100%",
	//editurl: "../order/edit",
	multiselect: true
});

jQuery("#startedorders").jqGrid('navGrid','#pagerstartedorders',
	{edit:false,add:false,del:false}, //options
	{},// edit options
	{},// add options
	{},// del options
	{multipleSearch:true, sopt:['eq','ne','lt','le','gt','ge','bw','bn','ew','en','cn','nc','in','ni'], width:600}// search options
	);
});

function acceptorder(){
	s = jQuery("#startedorders").jqGrid('getGridParam','selarrrow');
	if(s != ''){
		$.ajax({
			url: "<?php echo URL::base()?>order/acceptorder/",
			data: 'ids='+s,
			type: 'POST',
			cache: false,
			success: function(data){
				//$('#detal').trigger("reloadGrid");
				$('#startedorders').trigger("reloadGrid");
				//$('#acceptorders').trigger('reloadGrid');
				//alert( "data: " + data );
			}
		});
	}
}
</script>
<h3>Приемка заказов</h3>

<table id="startedorders"></table>
<div id="pagerstartedorders"></div>
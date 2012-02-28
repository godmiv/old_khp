<script type="text/javascript">
$(document).ready(function(){
	if($("#instrument :selected").val()=='1'); $("#instrument").hide();
	$("#osin").change(
		function(){
			if(this.value != '1'){
				$.ajax({
					url: "../ajax/nextnumber/"+this.value,
					success: function(data){
						//alert( "data: " + data );
						var temp = new Array();
						temp = data.split('|');
						$("#kodinstr").val(temp[0]);
						$("#nazvdet").val(temp[1]);
					}
				});
				$("#instrument").show();
			}
			else $("#instrument").hide();
		}
	)
	
});
</script>
<script type="text/javascript">
$(function(){ 
jQuery("#grid").jqGrid({        
    url:'../jgrid/order',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?php echo implode('","',$columns);?>"],
   	colModel:[
		<?php foreach($columns as $col):?>
		{name:'<?=$col;?>',index:'<?=$col;?>',width:75,editable:true},
		<?php endforeach;?>
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pager',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    caption:"Simple data manipulation",
	autowidth: true
}).navGrid("#pager",{edit:true,add:true,del:true});
});

$("#grid").click(function(){
	var gr = jQuery("#grid").jqGrid('getGridParam','selrow');
	alert (gr);
	//if( gr != null ) jQuery("#grid").jqGrid('editGridRow',gr,{height:280,reloadAfterSubmit:false});
	//else alert("Please Select Row");
});
</script>

<?php
echo $title;
echo form::open('/order/add');
?>
<?php
foreach ($codifier_instr as $item){
	$opt[$item['id']]= $item['name'].'    ('.$item['numstart'].')';
}
echo form::select('osin', $opt, '', array('id'=>'osin'));
?>
<table>
	<?php
	/*
	foreach ($form_all as $field){
		echo '<tr><td>'.$field['attr']['desc'].'</td><td>'.form::select($field['name'],$field['options'],$field['attr']['selected'],$field['attr']).'</td></tr>';
	}
	 */
	?>
</table>
<table>
	<?php
	foreach ($form_osn as $field){
		echo '<tr><td>'.$field['attr']['desc'].'</td><td>'.form::input($field['name'], $field['value'], $field['attr']).'</td></tr>';
	}
	?>
</table>
<div id="instrument">
<table>
	<?php
	foreach ($form_ins as $field){
		echo '<tr><td>'.$field['attr']['desc'].'</td><td>'.form::input($field['name'], $field['value'], $field['attr']).'</td></tr>';
	}
	?>		
</table>
</div>
<table>
	<?php
	echo '<tr><td>'.form::submit('add','Добавить деталь').'</td></tr>';
	echo form::close();
	?>
</table>
<table id="grid"></table>
<div id="pager"></div>
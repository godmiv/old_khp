<script type="text/javascript">
$(document).ready(function(){
	if($("#instrument :selected").val()=='O'); $("#instrument").hide();
	$("#osin").change(
		function(){
			if(this.value != '0') $("#instrument").show();
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
		{name:'<?=$col;?>',index:'<?=$col;?>',width:75},
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
</script>

<?php
echo $title;
echo form::open();
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
<?php
foreach ($codifier_instr as $item){
	$opt[$item['numstart']]= $item['name'].'    ('.$item['numstart'].')';
}
echo form::select('osin', $opt, '', array('id'=>'osin'));
?>

<table id="grid"></table>
<div id="pager"></div>
<script type="text/javascript">
//$("select[name='osin']").change(
$("test").click(
	function(){
		$('#instr').show()
	}
)
</script>
<?php
echo $title;
echo form::open();
?>
<table>
	<?php
	foreach ($form_all as $field){
		echo '<tr><td>'.$field['attr']['desc'].'</td><td>'.form::select($field['name'],$field['options'],$field['attr']['selected']).'</td></tr>';
	}
	?>
</table>
<table>
	<?php
	foreach ($form_osn as $field){
		echo '<tr><td>'.$field['attr']['desc'].'</td><td>'.form::input($field['name'], $field['value'], $field['attr']).'</td></tr>';
	}
	?>
</table>
<div id="instr" style="visibility: hidden">
	<table>
	<?php
	foreach ($form_ins as $field){
		echo '<tr><td>'.$field['attr']['desc'].'</td><td>'.form::input($field['name'], $field['value'], $field['attr']).'</td></tr>';
	}
	?>		
	</table>
</div>
<input type="button" id="test" value="test"/>
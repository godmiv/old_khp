<script type="text/javascript">
$(document).ready(function(){
	//if($("#instrument :selected").val()=='1');
	$("#instrument").hide();
	$("#osin").change(
		function(){
			if(this.value != '1'){
				$.ajax({
					url: "../ajax/nextnumber/"+this.value,
					cache: false,
					success: function(data){
						//alert( "data: " + data );
						var temp = new Array();
						temp = data.split('|');
						$("#kodinstr").val(temp[0]);
						$("#nazvdet").val(temp[1]);
					}
				});
				$("#instrument").show();
			} else {
				$("#instrument").hide();
				$("#nazvdet").val('');
			}
		}
	)
	//$("#box").resizable();
	opendialog();
});

$(function(){
jQuery("#grid").jqGrid({
    url:'../order/jqgrid',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?php echo implode('","',$columns);?>"],
   	colModel:[
		<?php foreach($columns as $col):?>
		{name:'<?=$col;?>',
			index:'<?=$col;?>',
			width:75,
			editable:<?php
			if($col != 'id') echo 'true';
			else echo 'false'
			?>},
		<?php endforeach;?>
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pager',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    caption: "Детали которым не присвоен номер заказа",
	autowidth: true,
	height: "100%",
	editurl: "../order/edit",
	multiselect: true

});

jQuery("#grid").jqGrid('navGrid','#pager',
{edit:true,add:true,del:true}, //options
{}, // edit options
{}, // add options
{}, // del options
{} // search options
);
});


//jQuery("#grid").jqGrid('gridResize',{minWidth:350,maxWidth:800,minHeight:80, maxHeight:350});

$("#grid").click(function(){
	var gr = jQuery("#grid").jqGrid('getGridParam','selrow');
	alert (gr);
	//if( gr != null ) jQuery("#grid").jqGrid('editGridRow',gr,{height:280,reloadAfterSubmit:false});
	//else alert("Please Select Row");
});

$(function(){
jQuery("#orders").jqGrid({
    url:'../order/orders',
    datatype: 'xml',
    mtype: 'POST',
   	colNames:["<?php echo implode('","',$columns);?>"],
   	colModel:[
		<?php foreach($columns as $col):?>
		{name:'<?=$col;?>',
			index:'<?=$col;?>',
			width:75,
			editable:<?php
			if($col != 'id') echo 'true';
			else echo 'false'
			?>},
		<?php endforeach;?>
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pagerorders',
   	sortname: 'number',
    viewrecords: true,
    sortorder: "desc",
    caption: "Заказы",
	autowidth: true,
	height: "100%",
	//editurl: "../order/edit",
	multiselect: true
});

jQuery("#orders").jqGrid('navGrid','#pagerorders',
{edit:false,add:false,del:false}, //options
{}, // edit options
{}, // add options
{}, // del options
{} // search options
);
});

function opendialog(){
$("#dialog").dialog({
	title: "Добавление детали",  	//тайтл, заголовок окна
	width:550,				//ширина
	height: 500,			//высота
	modal: false           	//true -  окно модальное, false - нет
	/*buttons: {
		"Добавить текст в окно": function() { $("#dialog").text("опа! текст!"); },
		"Закрыть": function() { $(this).dialog("close"); }
	}*/
});
}
function addtoorder(){
	var s=s1=z='';
	s = jQuery("#grid").jqGrid('getGridParam','selarrrow');
	s1= jQuery("#orders").jqGrid('getGridParam','selarrrow');
	if(s1 != '') z = jQuery("#orders").jqGrid('getCell',s1,'number');
//alert('ids='+s+'&order='+z);
	if(s != ''){
		$.ajax({
			url: "/order/addtoorder/",
			data: 'ids='+s+'&order='+z,
			type: 'POST',
			cache: false,
			success: function(data){
				$('#grid').trigger('reloadGrid');
				$('#orders').trigger('reloadGrid');
				//alert( "data: " + data );
			}
		});
	}
}
function delfromorder(){
	s = jQuery("#orders").jqGrid('getGridParam','selarrrow');
	if(s != ''){
		$.ajax({
			url: "/order/delfromorder/",
			data: 'ids='+s,
			type: 'POST',
			cache: false,
			success: function(data){
				$('#grid').trigger("reloadGrid");
				$('#orders').trigger("reloadGrid");
				//alert( "data: " + data );
			}
		});
	}
	//alert(s);
}

</script>
<input type="button" onclick="opendialog();" value="Добавить деталь" />
<input type="button" onclick="addtoorder();" value="Добавить детали в заказ" />
<input type="button" onclick="delfromorder();" value="Удалить детали из заказа" />
<div id="dialog">
<?php if (isset($errors)): ?>
<p>Ошибка при заполнении полей, проверьте все поля.</p>
<?php foreach ($errors as $message): ?>
    <?php echo $message ?><br />
<?php endforeach ?>
<?php endif ?>
<?php
//echo form::open('/order/add');
echo form::open();
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
	echo '<tr><td>'.form::submit('add','Добавить деталь').'</td><td>'.'</td></tr>';
	echo form::close();
	?>
</table>
</div>

<table id="grid"></table>
<div id="pager"></div>

<div>Заказы</div>
<table id="orders"></table>
<div id="pagerorders"></div>

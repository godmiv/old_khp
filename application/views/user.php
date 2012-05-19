<script type="text/javascript">
/*
 *  Отправка данных по нажатию на "Enter"
 */
/*
$(document).ready(function() {
     $(document).keyup(function(event) {
        if (event.keyCode == 13) {
         userlogin();
        }
    })
});
*/
function userlogin(){
	var l = $('#login').val();
	var p = $('#pass').val();
	$.ajax({
		url: "<?php echo URL::base()?>user/login",
		data: 'login='+l+'&pass='+p,
		type: 'POST',
		cache: false,
		success: function(data){
			alert( "data: " + data );
		}
	});
}
</script>
<?php print_r(Session::instance()->as_array()); ?>
<?php echo Form::open(null,array('id'=>'login_form'));?>
<table>
	<tr>
		<td>Login:</td>
		<td><?php echo Form::input('login', '', array('id'=>'login','size'=>'30','maxlength'=>'100'));?></td>
	</tr>
	<tr>
		<td>Pass:</td>
		<td><?php echo Form::password('pass', '', array('id'=>'pass','size'=>'30','maxlength'=>'100'));?></td>
	</tr>
	<tr>
		<td><?php echo Form::input('submit', 'Войтить',array('type'=>'button', 'id'=>'btn_submit','onclick'=>'userlogin()'));?></td>
		<td>&nbsp;</td>
	</tr>
</table>
<?php echo Form::close()?>
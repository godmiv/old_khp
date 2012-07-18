<h3>Файлы</h3>
прикрепленые к детали ID: <?php echo $id?>
<table border="1">
<?php foreach ($result as $file):?>
	<tr>
		<?php foreach ($file as $val):?>
			<td><?php echo $val; ?></td>
		<?php endforeach; ?>
	</tr>
<?php endforeach; ?>
</table>
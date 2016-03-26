<div id="main">
<table class="center">
<tr>
<th>jam 0</th>
<th>jam 1</th>
<th>jam 2</th>
<th>jam 3</th>
<th>jam 4</th>
<th>jam 5</th>
<th>jam 6</th>
<th>jam 7</th>
</tr>
<?php
if (is_array($graf))
	foreach ($graf as $row)
	{
		?>
		<tr>
			<td><?php echo $row->jam0; ?></td>
			<td><?php echo $row->jam1; ?></td>
			<td><?php echo $row->jam2; ?></td>
			<td><?php echo $row->jam3; ?></td>
			<td><?php echo $row->jam4; ?></td>
			<td><?php echo $row->jam5; ?></td>
			<td><?php echo $row->jam6; ?></td>
			<td><?php echo $row->jam7; ?></td>
		</tr>
		<?php
	}
?>
</table>
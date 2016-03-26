<table>
<tr>
<td>Nama</td>
<td>NRP</td>
<td>Alamat</td>
</tr>
<?php
if (is_array($listnrp))
	foreach ($listnrp as $row)
	{
		?>
		<tr>
			<td><?php echo $row->nrp; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->alamat; ?></td>
		</tr>
		<?php
	} 


?>
</table>
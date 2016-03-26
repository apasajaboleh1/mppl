<div id="main">
<table class="center">
<tr>
<th>NRP</th>
<th>Nama</th>
<th>Alamat</th>
<th>Plat Nomor</th>
<th>Jam Masuk</th>
</tr>
<?php
if (is_array($listin))
	foreach ($listin as $row)
	{
		?>
		<tr>
			<td><?php echo $row->nrp; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->alamat; ?></td>
			<td><?php echo $row->platnomor; ?></td>
			<td><?php echo $row->jam; ?></td>
		</tr>
		<?php
	}
?>
</table>
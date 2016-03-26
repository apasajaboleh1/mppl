<?php
if (is_array($graf))
   {
		foreach ($graf as $row)
		{
			$data0=(float)$row->j11+(float)$row->ja11;
		}
   }
   echo $data0;
?>
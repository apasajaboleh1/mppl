<style>
  #chart
  {
   z-index:-10;
  }
   
</style>
 
  
 <div id="chart">
</div>
<script src="<?php echo base_url('asset/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/highcharts.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/modules/exporting.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/themes/skies.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
 new Highcharts.Chart({
  chart: {
   renderTo: 'chart',
   type: 'column',
  },
  title: {
   text: 'Sistem Parkir Teknik Informatika',
   x: -20
  },
  subtitle: {
   text: 'Monitoring Kapasitas Parkir',
   x: -20
  },
  xAxis: {
   categories: ['Masuk','Keluar']
   
  },
  yAxis: {
   title: {
    text: 'Jumlah Motor'
   }
  },
  series: [{
   name: 'Jumlah Motor',
   data: <?php
   if (is_array($graf))
   {
		foreach ($graf as $row)
		{
			$data[]=(float)$row->j0+(float)$row->ja0;
			$data[]=(float)$row->j1+(float)$row->ja1;
			$data[]=(float)$row->j2+(float)$row->ja2;
			$data[]=(float)$row->j3+(float)$row->ja3;
			$data[]=(float)$row->j4+(float)$row->ja4;
			$data[]=(float)$row->j5+(float)$row->ja5;
			$data[]=(float)$row->j6+(float)$row->ja6;
			$data[]=(float)$row->j7+(float)$row->ja7;
			$data[]=(float)$row->j8+(float)$row->ja8;
			$data[]=(float)$row->j9+(float)$row->ja9;
			$data[]=(float)$row->j10+(float)$row->ja10;
			$data[]=(float)$row->j11+(float)$row->ja11;
			$data[]=(float)$row->j12+(float)$row->ja12;
			$data[]=(float)$row->j13+(float)$row->ja13;
			$data[]=(float)$row->j14+(float)$row->ja14;
			$data[]=(float)$row->j15+(float)$row->ja15;
			$data[]=(float)$row->j16+(float)$row->ja16;
			$data[]=(float)$row->j17+(float)$row->ja17;
			$data[]=(float)$row->j18+(float)$row->ja18;
			$data[]=(float)$row->j19+(float)$row->ja19;
			$data[]=(float)$row->j20+(float)$row->ja20;
			$data[]=(float)$row->j21+(float)$row->ja21;
			$data[]=(float)$row->j22+(float)$row->ja22;
			$data[]=(float)$row->j23+(float)$row->ja23;
			echo json_encode($data);
		}
   }
   ?>
  }]
 });
}); 
</script>
   <br>
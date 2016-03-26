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
   if (is_array($grafik))
   {
		foreach ($grafik as $row)
		{
			$data[]=(float)$row->total;
			$data[]=(float)$row->totalkeluar;
			echo json_encode($data);
		}
   }
   //echo json_encode($grafik);
   ?>
  }]
 });
}); 
</script>
   <br>
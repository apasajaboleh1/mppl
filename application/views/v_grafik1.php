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
   categories: []
   
  },
  yAxis: {
   title: {
    text: 'Jumlah Motor'
   }
  },
  series: [{
   name: 'Jumlah Motor',
   data: <?php
   if (is_array($grafik1))
   {
		foreach ($grafik1 as $row)
		{
			$data1[]=(float)$row->jam0;
			$data1[]=(float)$row->jam1;
			$data1[]=(float)$row->jam2;
			$data1[]=(float)$row->jam3;
			$data1[]=(float)$row->jam4;
			$data1[]=(float)$row->jam5;
			$data1[]=(float)$row->jam6;
			$data1[]=(float)$row->jam7;
			$data1[]=(float)$row->jam8;
			$data1[]=(float)$row->jam9;
			$data1[]=(float)$row->jam10;
			$data1[]=(float)$row->jam11;
			$data1[]=(float)$row->jam12;
			$data1[]=(float)$row->jam13;
			$data1[]=(float)$row->jam14;
			$data1[]=(float)$row->jam15;
			$data1[]=(float)$row->jam16;
			$data1[]=(float)$row->jam17;
			$data1[]=(float)$row->jam18;
			$data1[]=(float)$row->jam19;
			$data1[]=(float)$row->jam20;
			$data1[]=(float)$row->jam21;
			$data1[]=(float)$row->jam22;
			$data1[]=(float)$row->jam23;
			//$data1=array ('Masuk'=>$row->total , 'Keluar'=>$row->totalkeluar);
			echo json_encode($data1);
		}
   }
   //echo json_encode($grafik);
   ?>
  }]
 });
}); 
</script>
   <br>
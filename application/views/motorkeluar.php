<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Data Motor Keluar</title>
 </head>
 <body>
   <h1>Motor Keluar</h1>
   <div id="login">
   <?php echo form_open('motorkeluar'); ?>
	 <label for="platnomor">Plat nomor:</label>
     <?php echo form_input('platkeluar');?>
     <br/>
	 <?php echo form_submit('submit','submit');?>
	 <?php echo form_close();?>
	</form>
	</div>
 </body>
</html>
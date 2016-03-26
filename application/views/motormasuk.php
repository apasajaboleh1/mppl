<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Data Motor Masuk</title>
 </head>
 <body>
   <h1>Motor Masuk</h1>
   <div id="login">
   <?php echo form_open('platnomor'); ?>
	 <label for="platnomor">Plat nomor:</label>
     <?php echo form_input('platnomor');?>
     <br/>
	 <?php echo form_submit('submit','submit');?>
	 <?php echo form_close();?>
	</form>
	</div>
 </body>
</html>
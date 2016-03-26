<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>New Biodata</title>
 </head>
 <body>
 <div id="login">
   <h1>Insert New Biodata</h1>
   <?php echo form_open('biodata'); ?>
     <label for="nrp">NRP:</label>
     <?php echo form_input('nrp');?>
     <br/>
     <label for="nama">Nama:</label>
     <?php echo form_input('nama');?>
     <br/>
	 <label for="nama">Alamat:</label>
     <?php echo form_input('alamat');?>
     <br/>
	 <label for="nama">Plat Nomor:</label>
     <?php echo form_input('plat');?>
     <br/>
     <?php echo form_submit('submit','submit');?>
	 <?php echo form_close();?>
	</form>
	</div>
 </body>
</html>
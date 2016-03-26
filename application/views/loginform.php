<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Login</title>
 </head>
 <body>
  <div id="login">
   <h1>Login</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <?php echo form_input('username');?>
     <br/>
     <label for="password">Password:</label>
     <input type="password" name="password">
     <br/>
     <?php echo form_submit('submit','submit');?>
	 <?php echo form_close();?>
	</form>
</div>
 </body>
</html>
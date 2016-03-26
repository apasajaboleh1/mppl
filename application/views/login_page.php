<br><br><br>
<html>
<?php echo validation_errors(); ?><br><br>
<h3>Login with Username and Password : </h3>

   <form action="<?php echo base_url('verifylogin');?> method=post">
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
<br><br>
</html>
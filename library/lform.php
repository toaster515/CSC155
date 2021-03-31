<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
<label for="username">Username:</label> 
<br> 
<input type="text" name="username" placeholder="username"> 
<br> 
<label for="password">Password:</label> 
<br> 
<input type="password" name="password" placeholder="password"> 
<br>
<input type="submit" name="submit" value="Login"> 
<input type="submit" name="submit" value="Register"> 
<input type="submit" name="submit" value="Forgot Password?">
</form>

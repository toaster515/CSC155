<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="username">Username:</label>
<br>
<input type="text" name="username" placeholder="username" required>
<br>
<label for="password">Password:</label>
<br>
<input type="password" name="password" placeholder="password" required>
<br>
<input type="submit" name="login" value="Submit">
</form>

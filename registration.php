<?php
include 'navbar.php';
?>
<link rel="stylesheet" href="css/registration.css">
<div class="registration-Form">
  <h2>registration</h2>
  <form action="models/auth.php" method="post">
 <div class="container">
   <label for="uname"><b>email</b></label>
<input type="email" placeholder="email" name="email" required >
   <label for="password"><b>Password</b></label>
<input type="password" placeholder="password" name="password" required>
<button type="submit" name="action" value="register">register</button>
 <!-- <label> <input type="checkbox" checked="checked" name="remember"> Remember me </label> -->
 </div>
<!-- <div class="container" style="background-color:#f1f1f1">
<button type="button" class="cancelbtn">Cancel</button>
<span class="psw">Forgot <a href="#">password?</a></span>
 </div> -->
</form>
</div>
<?php include 'footer.php'; ?>

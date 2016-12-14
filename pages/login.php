<div class="container-fluid" id="login-container">
	<h1>Login</h1>
	<div class="input-group">
		<form name="login" method="post" action="index.php?page=admin">
			<p>Username <input type="text" name="username" maxlength="100" class="form-control" /></p>
			<p>Password <input type="password" name="password" maxlength="100" class="form-control" /></p>
			<?php 
				if(isset($_POST['login']) && !isset($_SESSION['admin'])){
					?>
					<p><span class="error">Incorrect username or password </span></p>
					<?php
				}
			?>
			<p>
			<p><input type="submit" name="login" value="submit" class="btn btn-default" /></p>
		</form>
	</div>
</div>
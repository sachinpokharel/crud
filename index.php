<?php  include('server.php'); ?>




<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<form method="post" action="server.php" >
		<div class="input-group">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
			<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
			<?php endif ?>
		</div>
	</form>
	<button class="btn"  onclick="location.href='view.php'" style="background: #556B2F; type="button">
				         view database</button>
</body>
</html>


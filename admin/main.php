<?php

	echo '<h2>O mnie</h2><hr class="style-one"></hr>';
	if(!empty($_POST['send'])) {
		alert(1, 'Dane zostały zapisane!');
		$db->query("INSERT INTO `subjects` (`name`, `kierunek_id`) VALUES ('".$_POST['name']."', '".(int)$_POST['id']."');");
	}
?>

<form action="" method="POST">
	<input type="hidden" name="send" value="1"/>
	<div class="row">
		<div class="col-lg-12">
			<div class="form-group">
				<label>Imię i nazwisko</label>
				<input name="name" value="" class="form-control">
			</div>
			<div class="form-group">
				<label>Kim jesteś!?</label>
				<input name="job" value="" class="form-control">
			</div>
			<input type="submit" class="btn btn-primary btn-ls" value="Zapisz"/>
		</div>
	</div>
</form>
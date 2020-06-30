<?php

	echo '<h2>O mnie</h2><hr class="style-one"></hr>';
	if(!empty($_POST['send'])) {
		alert(1, 'Dane zostały zapisane!');

		foreach ($_POST as $key => $val) {
			$db->query('INSERT INTO `ABOUT` (`CODE`, `VALUE`) VALUES ("'.$key.'", "'.$val.'")
							ON DUPLICATE KEY UPDATE VALUE = "'.$val.'";');
		}
	}

	$aAbout = $db->select_multi('SELECT * FROM ABOUT');

	foreach ($aAbout as $val) {
		$about[$val['CODE']] = $val['VALUE'];
	}
?>

<form action="" method="POST">
	<input type="hidden" name="send" value="1"/>
	<div class="row">
		<div class="col-lg-12">
			<div class="form-group">
				<label>Imię i nazwisko</label>
				<input name="name" value="<?php echo $about['name'];?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Kim jesteś!?</label>
				<input name="job" value="<?php echo $about['job'];?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Adres</label>
				<input name="address" value="<?php echo $about['address'];?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Kraj</label>
				<input name="country" value="<?php echo $about['country'];?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Telefon</label>
				<input name="phone" value="<?php echo $about['phone'];?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input name="email" value="<?php echo $about['email'];?>" class="form-control">
			</div>
			<div class="form-group">
				<label>WWW</label>
				<input name="www" value="<?php echo $about['www'];?>" class="form-control">
			</div>
			<div class="form-group">
				<label>Opis</label>
				<textarea class="form-control" name="text"><?php echo $about['text'];?></textarea>
			</div>
			<input type="submit" class="btn btn-primary btn-ls" value="Zapisz"/>
		</div>
	</div>
</form>
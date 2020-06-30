<?php

if (empty($_GET['action']) === true) {
	echo '<h2>Umiejętności</h2><hr class="style-one"></hr>';
	$list = $db->select_multi('SELECT * FROM SKILLS');

	echo '<table class="table table-bordered table-hover"><thead><tr>
						<th>Nazwa</th>
						<th>Procent</th>
						<th width="120px"></th>
					  </tr></thead><tbody>';

	if (empty($list) === true) {
		echo '<tr><td colspan="5">Brak</td></tr>';
	} else {
		foreach ($list as $u) {
			echo '<tr><td>'.$u['NAME'].'</td><td>'.$u['PERCENT'].'</td>
			<td><a href="?page=skills&action=edit&id='.$u['ID'].'"><input type="submit" class="btn btn-xs btn-primary" value="Edytuj"></a> <a href="?page=skills&action=delete&id='.$u['ID'].'"><input type="submit" class="btn btn-xs btn-danger" value="Usuń"></a></td>
			</tr>';
		}
	}

	echo '</tbody></table>';

	echo '<a href="?page=skills&action=add"><input type="submit" class="btn btn-primary" value="Dodaj"></a>';
} else if ($_GET['action'] === 'delete') {
	$db->query('DELETE FROM SKILLS WHERE ID = '.(int) $_GET['id']);
	header('Location: ?page=skills');
} else if ($_GET['action'] === 'edit') {
	if (empty($_POST) === false) {
		$db->query("UPDATE SKILLS SET NAME = '".$_POST['name']."', PERCENT = '".$_POST['percent']."' WHERE ID = ".(int) $_GET['id']);
		alert(1, 'Dane zostały zmienione');
	}//end if

	$var = $db->select_single('SELECT * FROM SKILLS WHERE ID = '.(int) $_GET['id']);
?>
<form action="" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3>Edytuj umiejętność</h3><hr class="style-one"></hr>
			<div class="form-group">
				<label>Nazwa</label>
				<input class="form-control" type="text" name="name" value="<?php echo $var['NAME'];?>"/>
				<label>Procent</label>
				<input class="form-control" type="text" name="percent" value="<?php echo $var['PERCENT'];?>"/>
			</div>
			<input type="submit" class="btn btn-primary btn-ls" value="Edytuj"/>
			<a href="?page=skills"><button type="button" class="btn btn-warning btn-ls">Powrót</button></a>
		</div>
	</div>
</form>
<?php
} else if ($_GET['action'] === 'add') {
	if (empty($_POST) === false) {
		if (empty($_POST['name']) === false) {
			$db->query("INSERT INTO `SKILLS` (`NAME`, `PERCENT`) VALUES ('".$_POST['name']."', '".$_POST['percent']."');");
			echo alert(1, 'Umiejętność została dodana!');
		} else {
			alert(2, 'Uzupełnij wszystkie pola!');
		}
	}
?>
<form action="" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3>Dodaj umiejętność</h3><hr class="style-one"></hr>
			<div class="form-group">
				<label>Nazwa</label>
				<input class="form-control" type="text" name="name" value=""/>
				<label>Procent</label>
				<input class="form-control" type="text" name="percent" value=""/>
			</div>
			<input type="submit" class="btn btn-primary btn-ls" value="Dodaj"/>
			<a href="?page=skills"><button type="button" class="btn btn-warning btn-ls">Powrót</button></a>
		</div>
	</div>
</form>
<?php
}

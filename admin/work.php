<?php

if (empty($_GET['action']) === true) {
	echo '<h2>Praca</h2><hr class="style-one"></hr>';
	$list = $db->select_multi('SELECT * FROM ITEMS WHERE TYPE = "JOB"');

	echo '<table class="table table-bordered table-hover"><thead><tr>
						<th>Nazwa</th>
						<th>Opis</th>
						<th>Lata</th>
						<th width="120px"></th>
					  </tr></thead><tbody>';

	if (empty($list) === true) {
		echo '<tr><td colspan="5">Brak</td></tr>';
	} else {
		foreach ($list as $u) {
			echo '<tr><td>'.$u['TITLE'].'</td><td>'.$u['TEXT'].'</td><td>'.$u['YEARS'].'</td>
			<td><a href="?page=work&action=edit&id='.$u['ID'].'"><input type="submit" class="btn btn-xs btn-primary" value="Edytuj"></a> <a href="?page=work&action=delete&id='.$u['ID'].'"><input type="submit" class="btn btn-xs btn-danger" value="Usuń"></a></td>
			</tr>';
		}
	}

	echo '</tbody></table>';

	echo '<a href="?page=work&action=add"><input type="submit" class="btn btn-primary" value="Dodaj"></a>';
} else if ($_GET['action'] === 'delete') {
	$db->query('DELETE FROM ITEMS WHERE ID = '.(int) $_GET['id']);
	header('Location: ?page=work');
} else if ($_GET['action'] === 'edit') {
	if (empty($_POST) === false) {
		$db->query("UPDATE ITEMS SET TITLE = '".$_POST['name']."', YEARS = '".$_POST['years']."', TEXT = '".$_POST['text']."' WHERE ID = ".(int) $_GET['id']);
		alert(1, 'Dane zostały zmienione');
	}//end if

	$var = $db->select_single('SELECT * FROM ITEMS WHERE ID = '.(int) $_GET['id']);
?>
<form action="" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3>Edytuj zawód</h3><hr class="style-one"></hr>
			<div class="form-group">
				<label>Nazwa</label>
				<input class="form-control" type="text" name="name" value="<?php echo $var['TITLE'];?>"/>
				<label>Lata</label>
				<input class="form-control" type="text" name="years" value="<?php echo $var['YEARS'];?>"/>
				<label>Opis</label>
				<textarea class="form-control" name="text"><?php echo $var['TEXT'];?></textarea>
			</div>
			<input type="submit" class="btn btn-primary btn-ls" value="Edytuj"/>
			<a href="?page=work"><button type="button" class="btn btn-warning btn-ls">Powrót</button></a>
		</div>
	</div>
</form>
<?php
} else if ($_GET['action'] === 'add') {
	if (empty($_POST) === false) {
		if (empty($_POST['name']) === false) {
			$db->query("INSERT INTO `ITEMS` (`TITLE`, `YEARS`, `TEXT`, `TYPE`) VALUES ('".$_POST['name']."', '".$_POST['years']."', '".$_POST['text']."', 'JOB');");
			echo alert(1, 'Umiejętność została dodana!');
		} else {
			alert(2, 'Uzupełnij wszystkie pola!');
		}
	}
?>
<form action="" method="POST">
	<div class="row">
		<div class="col-lg-12">
			<h3>Dodaj zawód</h3><hr class="style-one"></hr>
			<div class="form-group">
				<label>Nazwa</label>
				<input class="form-control" type="text" name="name" value=""/>
				<label>Lata</label>
				<input class="form-control" type="text" name="years" value=""/>
				<label>Opis</label>
				<textarea class="form-control" name="text"></textarea>
			</div>
			<input type="submit" class="btn btn-primary btn-ls" value="Dodaj"/>
			<a href="?page=work"><button type="button" class="btn btn-warning btn-ls">Powrót</button></a>
		</div>
	</div>
</form>
<?php
}

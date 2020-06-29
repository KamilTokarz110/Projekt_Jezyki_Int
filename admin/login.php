<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title><?php echo $config['page_title'];?></title>
  	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="css/login.css">
</head>
	<body>
	  <form class="login-form" action="" method="POST">
			<div class="header">
				<h1>Witamy</h1>
			</div>
				<?php
				if (empty($_POST['action']) === false) {
					if (empty($_POST['l_login']) === true || empty($_POST['l_pass']) === true) {
						alert(2, 'Uzupełnij wszystkie pola!');
					} else {
						$check = $db->select_single("SELECT * FROM USERS WHERE UPPER(LOGIN) = UPPER('".$_POST['l_login']."') AND PASSWORD = '".$_POST['l_pass']."'");
						if (empty($check) === false) {
							$_SESSION['user'] = $check;
							header('Location: /admin');
						} else {
							alert(2, 'Podano niepoprawne dane!');
						}//end if
					}// end if
				}//end if
				?>
			<input type="hidden" name="action" value="2"/>
			<div class="content">
			<input name="l_login" type="text" class="input username" placeholder="Username" />
			<div class="user-icon"></div>
			<input name="l_pass" type="password" class="input password" placeholder="Password" />
			<div class="pass-icon"></div>	
				<a href="?page=lostaccount">Zapomniałeś hasła?</a>	
			</div>
			<div class="footer">
				<input type="submit" class="button" value="Zaloguj"/>
			</div>
		
		</form>
	</body>
</html>

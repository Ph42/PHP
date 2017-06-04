<?php
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body bgcolor="#f3a3b3">
	<form action="index.php" method="get">
		<input type="text" name="fio"
		 value="<?php
		  if (isset($_REQUEST['fio'])){
		  	echo $_REQUEST['fio'];
		  }
		  ?>"><br>
		<input type="password" name="pass" value=""><br>

		<input type="checkbox" name="check[1]" value="1"
		<?php
		if( isset($_REQUEST['check'][1])){
			echo "checked";
		}
		?>	
		><br>
		<input type="checkbox" name="check[2]" value="2"
		<?php
		if( isset($_REQUEST['check'][2])){
			echo "checked";
		}
		?>
		><br>
		<input type="checkbox" name="check[3]" value="3"
		<?php
		if( isset($_REQUEST['check'][3])){
			echo "checked";
		}
		?>
		><br>
		<input type="radio" name="rad" value="1"
		<?php
		if( isset($_REQUEST['rad']) && ($_REQUEST['rad'] == 3)){
			echo "checked";
		}
		?>
		><br>
		<input type="radio" name="rad" value="2"><br>
		<input type="radio" name="rad" value="3"><br>

		<textarea name="text"></textarea>
		<select name="day">
			<?php
				$select = "";
				for ($i=0; $i <= 30 ; $i++) {
					if (($_REQUEST['day']) && ($_REQUEST['day'] == $i)){
						$select = " selected ";
					}
					echo "<option value='".$i."'>".$i."</option>";
					}	
			?>
		</select>
		<input type="hidden" name="hid" value="hello"><br>
		<input type="submit" name="ok" value="Отправить">
	</form>
<?php
	if ( isset($_REQUEST['ok'])){
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";	
	}
?>	
</body>
</html>

<!-- ДОМА ЧИТАТЬ ГЛАВУ 8,9,10, стр 61-67, глава 11,12,13  (Костарев php5)-->
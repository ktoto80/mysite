<?php
	include "model.php";
	$rows=get_all_rows();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Индексная страница (front controller)</title>
</head>
<body>
	<h1>Список всех записей в таблице</h1>
		<ol>

			<li>
				<?php echo $rows['title'].'<br>'.$rows['text']; ?>
			</li>
		</ol>
</body>
</html>
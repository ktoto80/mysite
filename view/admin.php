<?php ob_start(); ?>
	<h3>Administreerimine</h3>
	<form action=/mysite/index.php/add method=POST name='form1'>
<table>
	<tr>
		<td>Pealkiri:</td>
			<td><input type="text" name="add_title"></td>
		</tr>
	<tr>
		<td>Autor:</td>
			<td><input type="text" name="add_autor"></td>
		
	</tr>
	<tr>
		<td>Tekst:</td>
			<td><input type="text" name="add_content"></td>
		
	</tr>
	<tr>
		<td><input type="reset" id="reset" value="Tyhista">
			<td><input type="submit" id="submit" value="Lisa"></td>
		</td>
	</tr>
</table>
</form>
	<h3>Список всех записей в таблице</h3>
		<ol>
			<?php foreach($rows as $row): ?>
				<li>
					<?php echo $row['title'].'<br>'.$row['text']; ?>
				</li>
			<?php endforeach ?>
		</ol>
<?php $content=ob_get_clean(); ?>

<?php include 'view/layout.php'; ?>

<?php ob_start(); ?>
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

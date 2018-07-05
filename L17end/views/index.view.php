<?php require 'partials/head.php'; ?>


	<ul>
		<?php foreach ($tasks as $task){
				if ($task->completed){
					echo "<strike><li>$task->description</strike></li>";
				} else{
					echo "<li>$task->description</li>";
				}	
		}
		?>
	</ul>

<?php require 'partials/footer.php'; ?>

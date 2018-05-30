<!DOCTYPE html>
<html lang="pl">

<head>

	 <meta  charset="UTF-8">

	 <title>Nauka</title>

	 <style>
	 	header {

	 		background: #e3e3e3;
	 		padding: 2em;

	 		text-align: center;

	 	}


	 </style>




</head>


<body>
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
</body>

</html>

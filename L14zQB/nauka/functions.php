
<?php

    function dd($data)
    {
        die(var_dump($data));

    }

    function fetchAllTasks($pdo)
    {
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS,'Task');

    }
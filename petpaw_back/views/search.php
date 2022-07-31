<?php
	$name = isset($_GET['name']) ? trim($_GET['name']) : '';

    //The simple SQL query that we will be running.
    $sql = "SELECT * FROM `gestion_animaux` WHERE `name` LIKE :race";
    
    //Add % for wildcard search!
    $name = "%$name%";
    
    //Prepare our SELECT statement.
    $statement = $pdo->prepare($sql);
    
    //Bind the $name variable to our :name parameter.
    $statement->bindValue(':name', $name);
    
    //Execute the SQL statement.
    $statement->execute();
    
    //Fetch our result as an associative array.
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //Echo the $results array in a JSON format so that we can
    //easily handle the results with JavaScript / JQuery
    echo json_encode($results);
    
    ?>

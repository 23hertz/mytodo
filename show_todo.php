<?php
include_once("classes/users.php");

$obj = new Lists;
    
    if(isset($_GET['id'])) {

    $id = $_GET['id'];
    
    $views = $obj->todo_showdetails($id);

    if($views->rowCount() == 1){

        $row = $views->fetch(PDO::FETCH_ASSOC);
        if($row){
        	$id = $row['id'];
            $title = $row['todo_title'];
            $description = $row['todo_description'];
            $date = $row['todo_date'];

            echo "
            <h2>$id</h2>
            <h2>$title</h2>
            <h3>$description</h3>
            <small>$date</small>
            ";
        }
    }else{
        echo 'no todo';
}


    
    }

   




?>
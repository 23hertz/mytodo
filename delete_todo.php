<?php
include_once("classes/users.php");

$obj = new Lists;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete = $obj->todo_Delete($id);
    if($delete){
        echo 'Todo successfully deleted';
    }else{
    	echo "Todo did not delete";
    }
}

?>
<?php
include_once("classes/users.php");
    
    $obj = new Lists; 

    $disp = $obj->todo_showAll();


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">BOLT Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="index.php">Index</a></li>
          <li><a href="view_todo.php">View Todo</a></li>
          <!--<li><a href="login.php">Log In</a></li> -->
        </ul>
      </section>
    </nav>

   <!-- Main Body -->

   <table width="750" border="1" class="table-striped">
 <tr class="success">
 <th scope="col">ID</th>
 <th scope="col">TODO_TITLE</th>
 <th scope="col">TODO_DATE</th>
 <th scope="col">DELETE</th>
  <th scope="col">Edit</th>
 </tr>

 <?php
 foreach($disp as $value){
 echo '<tr>';
 echo '<tr class="success">';
 echo '<td>'.$value['id'].'</td>';
 echo '<td><a href="show_todo.php?id='.$value['id'].'">'.$value['todo_title'].'</a></td>';
 echo '<td>'.$value['todo_date'].'</td>';
 echo '<td><a href="delete_todo.php?id='.$value['id'].'">Delete</a></td>';
 echo '<td><a href="update_todo.php?id='.$value['id'].'">Edit</a></td>';

 '</tr>';
 }
 ?>
 <tr class="success">
 <th scope="col" colspan="5" align="right">
 <div class="btn-group">
 <a href="index.php">Insert New Data</a>
 </div>
 </th>

 </tr>
 </table>
  

    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

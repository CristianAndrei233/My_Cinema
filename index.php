<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>My Cinema</title>
  <!-- <link rel="stylesheet" href="stylesheet.css" type="text/css"> -->
</head>
<header>
    <style>
        <?php include 'stylesheet.css';?>
    </style>
    <nav>
        <a href="index.php" class="main">MyCinema dot SQL</a>
        <ul>
            <li><a href="members.php">Members</a><li>
            
        </ul>
        <div class="connection">
          <?php
           include 'connect.php';
          ?>
        </div>
    </nav>
</header>
<body>
    <h1>Welcome! Here you can search the movies we have!</h1>
<form method="post" class="box1">
        <input type="text" name="search" placeholder="Search">
        <select class="option" name="column">
            <option value="">Select Filter</option>
            <option value="name">Genre</option>
            <option value="title">Title</option>
            <option value="distribution">Distribution</option>
        </select>
        <input type="submit" name="submit" value="Find">
        <!-- <input id="date" type="date"> -->
    </form>
    <div class="box2">
        <div class="data-db">
            <?php
             include "rocket.php";
            ?>
        </div>
   
    </div>
 
</body>
</body>
</html>
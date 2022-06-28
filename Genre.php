<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>My Cinema</title>
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<header>
    <style>
        <?php include 'stylesheet.css';?>
    </style>
    <nav>
        <a href="index.php" class="main">MyCinema dot SQL</a>
        <ul>
            <li><a href="#">Movie Schedule</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Search by : </a>
                <ul>
                    <li><a href="Genre.php">Genre</a><li>
                    <li><a href="Distribution.php">Distribution</a><li>
                    <li><a href="Name.php">Name</a><li>
                    <li><a href="#">Date</a><li>
                </ul>
            <li>
            <li><a href="#">Subscriptions</a><li>
        </ul>
        <div class="connection">
          <?php
           include 'PHP-includes/connect-db.php';
          ?>
        </div>
    </nav>
</header>
<body>
    <div class="search-box">
        <h1>Search by Genre:</h1>
        <form method="post">
        <select name="genre" class="select">
            <option value="">Select the Genre</option>
            <option value="Action">Action</option>
            <option value="Adventure">Adventure</option>
            <option value="Animation">Animation</option>
            <option value="Biography">Biography</option>
            <option value="Comedy">Comedy</option>
            <option value="Crime">Crime</option>
            <option value="Drama">Drama</option>
            <option value="Family">Family</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Horror">Horror</option>
            <option value="Mystery">Mystery</option>
            <option value="Romance">Romance</option>
            <option value="Sci-Fi">Sci-Fi</option>
            <option value="Thriller">Thriller</option>
        </select>
            <input type="submit" name="submit" value="Search">
        </form>
    </div>
</div>
<div class="box">
    <div class="data-db">
        <?php
            include "PHP-includes/Genre-rocket.php";
        ?>
    </div>
</div>

</body>
</html>
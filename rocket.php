<?php
if (isset($_POST["submit"])){
    $str = $_POST["search"];
    $column = $_POST["column"];
    if($column === "name"){
        $sql = "SELECT name, title, duration FROM genre
        INNER JOIN movie_genre ON genre.id=movie_genre.id_genre
        JOIN movie ON movie.id=id_movie
        WHERE name LIKE '%$str%' LIMIT 15;";
        $result = $conn->query($sql);
    }
   

}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "Genre: " . $row["name"]. "<br>" . "   -- Title:   "  . $row["title"]. "<br>". "Duration: ". $row["duration"]. "<br><br>" ;
    }
  }


//////// TITLE ///////
  if(isset($_POST["submit"])){
    $str = $_POST["search"];
    $column = $_POST["column"];
    if($column ==="title"){
        $sql = "SELECT title, duration, release_date FROM movie WHERE title LIKE '%$str%' LIMIT 15;";
        $result = $conn->query($sql);
    }
   
  }
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "Title: " . $row["title"]. "<br>" . "   Duration:   "  . $row["duration"]. "<br>". "Release date: ". $row["release_date"]. "<br><br>" ;
    }
  }
  



//////  DISTRIBUTION /////
  if(isset($_POST["submit"])){
    $str = $_POST["search"];
    $column = $_POST["column"];
    if($column === "distribution"){
        $sql = "SELECT name, title, duration FROM distributor INNER JOIN movie ON distributor.id=movie.id_distributor WHERE name LIKE '%$str%' LIMIT 15;";
        $result = $conn->query($sql);
    }
  
  }
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "Distribution: " . $row["name"]. "<br>" . "   Title:   "  . $row["title"]. "<br>". "Duration: ". $row["duration"]. "<br><br>" ;
  
    }
  }
  
  



  ////members////
  if(isset($_POST["submit"])){
    $str = $_POST["search"];
    $column = $_POST["column"];
    if($column === "firstname"){
        $sql = "SELECT email, firstname, lastname FROM user WHERE firstname LIKE '%$str%' LIMIT 15;";
        $result = $conn->query($sql);
    }
    if($column === "lastname"){
      $sql = "SELECT email, firstname, lastname FROM user WHERE lastname LIKE '%$str%' LIMIT 15;";
      $result = $conn->query($sql);
  }
  
  }
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "Email: " . $row["email"]. "<br>" . "   First-name:   "  . $row["firstname"]. "<br>". "Last-name: ". $row["lastname"]. "<br><br>" ;
  
    }
  } else {
    echo "0 results";
  }
?>
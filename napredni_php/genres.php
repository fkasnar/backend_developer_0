<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$connection = mysqli_connect('localhost', 'root', 'fkasnar', 'videoteka');
if($connection === false){
    die("Connection failed: ". mysqli_connect_error());
}

$sql = "SELECT *
FROM zanrovi
ORDER BY id ASC;";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) === 0) {
    die("There are no memebers in our datbase!");
}

$genres = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($connection);

require 'genres.view.php';




include("include.php");

if (isset($_GET["k"]) && $_GET["k"]!= ""){
  //SAVE THE KEYWORDS FROM THE URL
  $k = trim($_GET["k"]);

  //CREATE A BASE QUERY AND WORDS STRING
  $query_string = "SELECT * FROM videoteka WHERE";

  //SEPARATE EACH OF THE KEYWORDS

  $keywords = explode(" ", $k);
  foreach($keywords as $word){
    $query_string  .= " keywords LIKE '%".$word."%' OR ";

  }
  $query_string = substr($query_string, 0, strlen($query_string) -3);
  echo $query_string;

  //connect to database

$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

$query = mysqli_connect($conn, $query_string);
$result_count = mysqli_num_rows($query);

//check to see if any ressults were  returned

if (result_count > 0){

  //display result
  echo '<div><b><u>'.$result_count.'</u></b> results found</div>';
  //display result

  }
  else
    echo 'Nema rezltata pretrage.';
}
else
  echo "";

?>
<!DOCTYPE html>
<html>

<head>
<title><?php echo $page_title; ?></title>
<meta NAME="keywords" CONTENT="<?php echo $page_keywords; ?>">
<meta NAME="description" CONTENT="<?php echo $page_desc; ?>">
<meta NAME="Content-Language" CONTENT="english">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="./main.css">
</head>
<body>
<?php
include("config.php");
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
  <div class="container" id="music-container">

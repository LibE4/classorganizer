<?php
  if(isset($_POST['add'])){
  	$id = $_POST['id'];
  	$firstname = $_POST['firstname'];
  	$lastname = $_POST['lastname'];
  	$birthday = $_POST['birthday'];
  	$active = $_POST['active'];
    $query = "insert into ";
    switch ($_POST['memberType']) {
      case 'students':
        $query .= "students";
        break;
      case 'instructors':
        $query .= "instructors";
        break;
     }
    $query .= " (id, firstname, lastname, birthday, active) values ('$id', '$firstname', '$lastname', '$birthday', '$active')";
    $result = mysqli_query($link, $query);
    if (!$result) {
        echo "Error: Unable to add data.";
        exit;
    }
  }
?>
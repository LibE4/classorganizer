<?php
    if (isset($_POST['display'])) {
      switch ($_POST['cohort']) {
        case 'one':
            $i = 1;
            break;
        case 'two':
            $i = 2;
            break;
        case 'three':
            $i = 3;
            break;
        case 'four':
            $i = 4;
            break;
        case 'zero':
            $i = '0 OR 1 = 1';
            break;
      }
      switch ($_POST['memberType']) {
        case 'students':
          $query = "SELECT students.st_id, st_firstname, st_lastname from (students INNER JOIN student_rooster on students.st_id = student_rooster.st_id) WHERE student_rooster.cohort_id = ".$i;
          break;
        case 'instructors':
          $query = "SELECT instructors.ins_id, ins_firstname, ins_lastname from (instructors INNER JOIN instructor_rooster on instructors.ins_id = instructor_rooster.ins_id) WHERE instructor_rooster.cohort_id = ".$i;
          break;
      }
      
      $result = mysqli_query($link, $query);
      if (!$result) {
          echo "Error: Unable to get data.";
          exit;
      }
      while ($row = mysqli_fetch_assoc($result))
      {
        // Looping through the resultset.
        switch ($_POST['memberType']) {
          case 'students':
            $id = $row[st_id];
            $firstname = $row[st_firstname];
            $lastname = $row[st_lastname];
            break;
          case 'instructors':
            $id = $row[ins_id];
            $firstname = $row[ins_firstname];
            $lastname = $row[ins_lastname];
            break;
        }
        
        echo '<section class= "songs">
                <h4>'.$id.'</h4>
                <ul class="content-item">
                  <li>'.$firstname.'</li>
                  <li>'.$lastname.'</li>
                </ul>
                <button class="btnDelete" data-fbid="${Song.id}">Delete</button>
              </section>';
      }
    }
?>
<?php
    if (isset($_POST['instructor'])) {
        $query = "SELECT ins_id, ins_firstname, ins_lastname from instructors";
        $result = mysqli_query($link, $query);
        if (!$result) {
            echo "Error: Unable to get data.";
            exit;
        }
        while ($row = mysqli_fetch_assoc($result))
        {
          // Looping through the resultset.
          $id = $row[ins_id];
          $firstname = $row[ins_firstname];
          $lastname = $row[ins_lastname];
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
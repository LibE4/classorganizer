<?php
    if (isset($_POST['student'])) {
        $query = "SELECT id, firstname, lastname from students";
        $result = mysqli_query($link, $query);
        if (!$result) {
            echo "Error: Unable to get data.";
            exit;
        }
        while ($row = mysqli_fetch_assoc($result))
        {
          // Looping through the resultset.
          $id = $row[id];
          $firstname = $row[firstname];
          $lastname = $row[lastname];
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
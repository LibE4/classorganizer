    <!-- top navigation bar -->
    <div class="row">
      <div class="col-md-12">
        <header>
              <ul class="nav-item" id="nav-item">
                <?php
                    // Define each name associated with an URL
                    $urls = array(
                        'Home' => '/index',
                        'Add Member' => '/NewMember',
                        'Reset All' => '/ResetAll',
                        // …
                    );

                    foreach ($urls as $name => $url) {
                        print '<li '.(($currentPage === $name) ? ' class="active" ': '').
                            '><a href="/myphp'.$url.'.php">'.$name.'</a></li>';
                    }
                ?>
              </ul>
        </header>
      </div>
    </div>


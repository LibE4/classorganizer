<?php
if (!isset($page_title)) $page_title="my practicing PHP code ";
if (!isset($page_keywords)) $page_keywords="PHP MySQL";
if (!isset($page_desc)) $page_desc="My PHP code and a MySQL database";
?>
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
    <!-- top navigation bar -->
    <div class="row">
      <div class="col-md-12">
        <header>
              <ul class="nav-item" id="nav-item">
                <li><a href="#">View Members</a></li>
                <li><a href="#">Add Instructor</a></li>
                <li><a href="#">Add Student</a></li>
                <li><a href="#">Profile</a></li>
                <li id="logout-container"></li>
              </ul>
        </header>
      </div>
    </div>

    <div class="row main-top">
      <!-- side control bar -->
      <div class="col-md-4">
        <div class="show wrapper" id="filter">
          <div>
            <h4 for="song-length">NSS personel:</h4>
          </div>
          <form ACTION="index.php" name="showAllStudents" METHOD="POST" align="center">
            <div><input id="studentBtn" type="submit" name="student" value="All Students"></div>
          </form>
          <form ACTION="index.php" name="showAllInstructors" METHOD="POST" align="center">
            <div><input id="instructorBtn" type="submit" name="instructor" value="All Instructors"></div>
          </form>
          <form ACTION="index.php" name="showType" METHOD="POST" align="center">
            <p><lable for="membertype">List:<select name="memberType">
              <option value="">---</option>
              <option value="students">Students</option>
              <option value="instructors">Instructors</option>
            </select>
            <p><lable for="loantype">In:<select name="cohort">
              <option value="">---</option>
              <option value="one">Cohort One</option>
              <option value="two">Cohort Two</option>
              <option value="three">Cohort Three</option>
              <option value="four">Cohort Four</option>
              <option value="zero">All Cohorts</option>
          </select>
          <div><input id="displayBtn" type="submit" name="display" value="Display"></div>
          </form>
        </div>
      </div>
      <!-- content -->
      <div class="col-md-8">
        <div class="show" id="content">

<?php include("allStudents.php"); ?>
<?php include("allInstructors.php"); ?>
<?php include("cohorts.php"); ?>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="add-instructor-view" class="addsong hidden">
          <label>Instructor ID: <input type="text" id="add-id" value=""></label>
          <label>Instructor Firstname: <input type="text" id="add-firstname" value=""></label>
          <label>Instructor Lastname: <input type="text" id="add-lastname" value=""></label>
          <label>Instructor Birthday: <input type="text" id="add-birthday" value=""></label>
          <label>Active: <input type="text" id="add-active" value=""></label>
          <button id="addinstructor">Add</button>
        </div>
      </div>      
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="add-student-view" class="addsong hidden">
          <label>Student ID: <input type="text" id="add-id" value=""></label>
          <label>Student Firstname: <input type="text" id="add-firstname" value=""></label>
          <label>Student Lastname: <input type="text" id="add-lastname" value=""></label>
          <label>Student Birthday: <input type="text" id="add-birthday" value=""></label>
          <label>Active: <input type="text" id="add-active" value=""></label>
          <button id="addstudent">Add</button>
        </div>
      </div>      
    </div>
  </div>

  <script src="https://www.gstatic.com/firebasejs/3.5.3/firebase.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
</body>
</html>

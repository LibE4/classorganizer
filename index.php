<?php $title = 'Home'; ?>
<?php $currentPage = 'index'; ?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

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
          <br>
          <form ACTION="index.php" name="showAllInstructors" METHOD="POST" align="center">
            <div><input id="instructorBtn" type="submit" name="instructor" value="All Instructors"></div>
          </form>
          <br>
          <form ACTION="index.php" name="showType" METHOD="POST" align="center">
            <p><label for="membertype">List:<select name="memberType">
              <option value="">---</option>
              <option value="students">Students</option>
              <option value="instructors">Instructors</option>
            </select>
            <p><label for="loantype">In:<select name="cohort">
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
<?php include('footer.php'); ?>
<?php $title = 'Add Member'; ?>
<?php $currentPage = 'AddMember'; ?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<br>
<br>

    <form ACTION="NewMember.php" name="member" METHOD="POST" align="center">
      <div class="row">
        <div class="col-md-12">
          <div id="add-instructor-view" class="addsong">
            <label>Member Type:<select name="memberType">
              <option value="">---</option>
              <option value="students">Students</option>
              <option value="instructors">Instructors</option>
            </select></label>
            <label>Member ID: <input name="id" type="text" id="add-id" value=""></label>
            <label>Member Firstname: <input name="firstname" type="text" id="add-firstname" value=""></label>
            <label>Member Lastname: <input name="lastname" type="text" id="add-lastname" value=""></label>
            <label>Member Birthday: <input name="birthday" type="text" id="add-birthday" value=""></label>
            <label>Active: <input name="active" type="text" id="add-active" value=""></label>
            <button id="addmember" name="add">Add</button>
          </div>
        </div>      
      </div>
    </form>
<?php include('addmember.php'); ?>

<?php include('footer.php'); ?>

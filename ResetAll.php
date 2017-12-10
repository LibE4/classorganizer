<?php $title = 'Reset Member'; ?>
<?php $currentPage = 'ResetMember'; ?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<br>
<br>
<?php 
if(isset($_POST['Reload'])){
  include('savedata.php');
  header("Location: /index.php"); /* Redirect browser */
  exit();
}
?>
    <form  method="post">
      <div class="row">
        <div class="col-md-12">
          <div id="add-student-view" class="addsong">
            <label>Reload default NSS student data set: <button id="addmember" name="Reload">Load Defalut Data</button></label>
          </div>
        </div>      
      </div>
    </form>

<?php include('footer.php'); ?>

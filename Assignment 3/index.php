<!-- Connecting header to index-->
<?php require ('./header.php'); ?>

<?php
      if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Registration Done
            </div>";
      }
      if (isset($_GET['msg2']) == "update") {
        echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Information Updated
            </div>";
      }
      if (isset($_GET['msg3']) == "delete") {
       echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Information Deleted
            </div>";
      }
    ?>
<!-- Creating a form for registration-->
<section class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="card-header bg-primary">
          <h4 class="text-white">Register Here</h4>
          </div>
          <div class="card-body bg-light">
            <form action="edit.php" method="POST">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="uname" value="<?php echo $customer['name']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="uemail" value="<?php echo $customer['email']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $customer['password']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $customer['password']; ?>" required="">
              </div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
                <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Register">
              </div>
            </form>
            <!-- adding database -->
            <?php
            require_once('database.php');
            if(isset($_POST) & !empty($_POST)){
              $uname=$database->sanitize($_POST['uname']);
              $email=$database->sanitize($_POST['uemail']);
              $password=$database->sanitize($_POST['password']);
              $res = $database->create($uname, $uemail, $password);

            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- connecting footer to index file-->

  <?php require ('./footer.php'); ?>

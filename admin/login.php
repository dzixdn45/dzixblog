<?php
require_once 'DBconfig.php';

if($user->is_loggedin()!="")
{
 $user->redirect('index.php');
}

if(isset($_POST['submit']))
{
 $uname = $_POST['txt_uname_email'];
 $umail = $_POST['txt_uname_email'];
 $upass = $_POST['password'];
  
 if($user->login($uname,$umail,$upass))
 {
  $user->redirect('index.php');
 }
 else
 {
  $error = "Wrong Details !";
 } 
}
?>
<?php include_once '../part/header.login.php'; ?>
<div class="clearfix"></div><br />
<br/>
<br/>
<br/>
<div class="container-fluid raksasa">
     <div class="form-container gofar">
        <form method="post">
            <h2>Sign in.</h2><hr />
            <?php
            if(isset($error))
            {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                  </div>
                  <?php
            }
            ?>
            <div class="form-group">
             <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or E mail ID" required />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Your Password" required />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" name="submit" class="btn btn-block btn-primary">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                </button>
            </div>
            <br />
            <label>Don't have account yet ! <a href="sign-up.php">Sign Up</a></label>
        </form>
       </div>
</div>
 
    <!-- Script js -->
    <script src="../style/js/jquery.min.js"></script>
    <script src="../style/js/bootstrap.min.js"></script>
    <!-- End Script -->
</body>
</html>

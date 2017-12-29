<?php include_once '../part/header.index.php'; ?>
<?php
include_once 'DBconfig.php';
if(isset($_POST['btn-save']))
{
 $ptitle = $_POST['posttitle'];
 $pdesc = $_POST['postdesc'];
 $pcont = $_POST['postcont'];
 $pdate = $_POST['postdate'];
 
 if($crud->create($ptitle,$pdesc,$pcont,$pdate))
 {
  header("Location: add-post.php?inserted");
 }
 else
 {
  header("Location: add-post.php?failure");
 }
}
if(isset($_GET['inserted']))
{
echo'<div class="clearfix"></div>
    <div class="container kocak">
 <div class="alert alert-info">
    <strong>WOW!</strong> Record was inserted successfully <a href="index.php">HOME</a>!
 </div>
 </div>';
}
else if(isset($_GET['failure']))
{
  echo'  <div class="container kocak">
 <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
 </div>
 </div>';
}
?>
<?php include_once '../part/header.index.php'; ?>


<div class="container kocak">

  
  <form method='post'>
 
    <table class='table table-bordered'>
 
        <tr>
            <td>judul</td>
            <td><input type='text' name='posttitle' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>deskripsi</td>
            <td><input type='textarea' name='postdesc' class='form-control' required></td>
        </tr>
 
        <tr>
            <td>konten</td>
            <td><textarea type="text" name='postcont' class='form-control' required></textarea></td>
        </tr>
 
        <tr>
            <td>Tanggal rilis</td>
            <td><input type="date" name="postdate" class="input-group datepicker form-control" date="" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" id="postdate"></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save">
      <span class="glyphicon glyphicon-plus"></span> Create New Record
   </button>  
            <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
            </td>
        </tr>
 
    </table>
</form>
     
     
</div>

</body>

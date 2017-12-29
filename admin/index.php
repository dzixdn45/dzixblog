<?php
include_once 'DBconfig.php';
?>
<?php include_once '../part/header.php'; ?>

<div class="clearfix"></div>

<div class="container kenapa">
<a href="add-post.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
</div>

<div class="clearfix"></div><br />

<div class="container kenapes">
     <table class='table table-bordered table-responsive'>
     <tr>
     <th>No</th>
     <th>dekripsi</th>
     <th>tanggal blog</th>
     <th colspan="2" align="center">delete</th>
     </tr>
     <?php
  $query = "SELECT * FROM blog_posts";       
  $records_per_page=3;
  $newquery = $crud->paging($query,$records_per_page);
  $crud->dataview($newquery);
  ?>
    <tr>
        <td colspan="7" align="center">
    <div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
         </div>
        </td>
    </tr>
 
</table>
   
       
</div>

<script src="../style/js/bootstrap.min.js"></script>
<script src="../style/js/jquery.min.js"></script>
</body>
<?php require('includes/config.php');
?>
<?php include_once 'part/header.index.php'; ?>
    <div class="row">
      <!-- membuat panah next dan previous -->
      <div class="container-fluid bagas">
      <section id="features">
      <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">DZIXBLOG</h2>
                    <hr class="primary" style="margin-top:30px; margin-bottom:10px;">
                    <p style="margin-bottom:40px;">my activity blog and anymore</p>
                </div>
      <?php
       try 
       {
           $stmt = $db->query('SELECT postid, posttitle, postdesc, postdate FROM blog_posts ORDER BY postid ');
           while ($row = $stmt->fetch()) {
               echo' <div class="col-lg-4 text-center harus">';
               echo'<h3><a href="viewpost.php?id='.$row['postid'].'">'.$row['posttitle'].'</a></h3>';
               echo'<p>Posted on '.date('jS M Y', strtotime($row['postdate'])).'</p>';
               echo'<p>'.$row['postdesc'].'</p>';
               echo'<h3><a href="viewpost.php?id='.$row['postid'].'">read more</a></h3>';
               echo'</div>';
           } 
       } catch(PDOException $e)
       {
        echo $e->getMessage();
       }
      ?>
      </section>
</div>
  </div>
    </body>
    </html>
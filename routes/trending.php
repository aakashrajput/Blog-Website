<div class="container">
    <div class="newstricker_inner">
        <div class="trending"><strong>Trending</strong> Now</div>
        <div id="newsTicker" class="owl-carousel owl-theme">
          <?php
      $p_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY views DESC LIMIT 5";
      $p_run = mysqli_query($link,$p_query);
      if(mysqli_num_rows($p_run) > 0){
        while($p_row = mysqli_fetch_array($p_run)){
          $p_title = $p_row['title'];
      ?>
            <div class="item">
                <a href="index.html#"><?php echo $p_title; ?></a>
            </div>
      <?php } ?>
        </div>
    </div>
</div>

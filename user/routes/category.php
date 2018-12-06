<div class="category_widget">
    <div class="title-holder">
        <h3 class="title">Category</h3>
        <span class="title-shape title-shape-dark"></span>
    </div>
    <?php
        $cat_query = "SELECT * FROM categories ORDER BY id DESC LIMIT 4";
        $cat_run = mysqli_query($link, $cat_query);
          while($row = mysqli_fetch_array($cat_run)) {
                    $id = $row['id'];
                    $category = $row['category'];
    ?>
    <!--  /.End of title -->
    <a class="category" href="index.html">
        <figure><img src="assets/img/category-1.jpg" class="img-responsive" alt=""></figure>
        <div class="category_name"><?php echo $category; ?></div>
    </a>
    <!-- /.End of category -->
  <?php } ?>
</div>
<!-- /.End of category widget -->

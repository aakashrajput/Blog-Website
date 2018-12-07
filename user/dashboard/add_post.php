<?php

include ("header.php");
include ("top-head.php");
?>
<div class="container-fluid mt--7">
  <div class="col-xl-8 order-xl-1">
  <div class="card bg-secondary shadow">
    <div class="card-header bg-white border-0">
      <div class="row align-items-center">
        <div class="col-8">
          <h3 class="mb-0">Write your new Article here.</h3>
        </div>
        <div class="col-4 text-right">
          <a href="profile.html#!" class="btn btn-sm btn-primary">Post Section</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form action="" method="POST" name="form1" enctype="multipart/form-data">
        <?php
        if(isset($_POST['submit'])){
          $author = $_SESSION['username'];
          $title = $_POST['title'];
          $tags = $_POST['tags'];
          $category = $_POST['category'];
          $post_data = $_POST['data'];
          $date = time();
                  if(empty($category)){
                    $error_msg = "Category Field is blank";
                  } else {
                    $query = "INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `categories`,`tags`, `post_data`, `views`, `status`) VALUES (NULL, '$date', '$title', '$author','test.png', '$category', '$tags', '$post_data', '0', 'unpublish')";
                    if(mysqli_query($link,$query)){
                      $msg = "post Added";
                      //$category = "";
                    } else {
                      $error_msg = "Failed to Add";
                      //print_r($errors);
                    }
                  }
                  }
            ?>
        <h6 class="heading-small text-muted mb-4">Post information</h6>
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Title</label>
                <input type="text" id="input-username" name="title" class="form-control form-control-alternative" placeholder="This is a demo title!">
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-username">category</label>
              <input type="text" id="input-username" name="category" class="form-control form-control-alternative" placeholder="This is a demo title!">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-control-label" for="input-username">Tags</label>
              <input type="text" id="input-username" name="tags" class="form-control form-control-alternative" placeholder="food, gadgets">
            </div>
          </div>
        </div>
        <hr class="my-4" />
        <!-- Description -->
        <h6 class="heading-small text-muted mb-4">Post Data</h6>
        <div class="pl-lg-4">
          <div class="form-group">
            <label>Article</label>
            <textarea rows="4" class="form-control form-control-alternative ckeditor" name="data">Write your article in here...</textarea>
          </div>
        </div>
      <div class="col-xs-8">
        <input type="submit" name="submit" class="btn btn-primary" value="submit">
        <?php if(isset($error_msg)){
                     echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                   }else if(isset($msg)) {
                      echo "<span style='color:green;' class='pull-right'>$msg</span>";
                   }
        ?>
      </div>
        </form>

    </div>
  </div>
</div>
</div>
<?php
include ("footer.php");
?>

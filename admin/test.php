<?php
include "include/db.php";
?>
<form action="" method="POST" enctype="multipart/form-data" name="form1">
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
    <div class="col-lg-8">
      <div class="form-group">
        <label class="form-control-label" for="input-username">Sub Title</label>
        <input type="text" id="input-username" name="sub_title" class="form-control form-control-alternative" placeholder="This is a demo title!">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label class="form-control-label" for="input-username">Tags</label>
        <input type="text" id="input-username" name="tags" class="form-control form-control-alternative" placeholder="food, gadgets">
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-first-name">Category</label>
          <input type="text" id="input-first-name" name="category" class="form-control form-control-alternative" placeholder="Lucky">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="form-control-label" for="input-last-name">Article photo1</label>
          <input type="file" class="form-control"  name="photo1"  placeholder="Contact No" value="">
        </div>
      </div>
    </div>
  <div class="row">
    <div class="col-lg-6">
      <div class="form-group">
        <label class="form-control-label" for="input-first-name">Article photo2</label>
        <input type="file" class="form-control" name="photo2" placeholder="Contact No" value="">
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group">
        <label class="form-control-label" for="input-last-name">Article photo3</label>
        <input type="file" class="form-control" name="photo3" placeholder="Contact No" value="">
      </div>
    </div>
  </div>
</div>
  <hr class="my-4" />
  <!-- Description -->
  <h6 class="heading-small text-muted mb-4">Post Data</h6>
  <div class="pl-lg-4">
    <div class="form-group">
      <label>Article</label>
      <textarea rows="4" class="form-control form-control-alternative" name="data1" placeholder="A few words about you ...">Write your article in here...</textarea>
    </div>
  </div>
  <div class="pl-lg-4">
    <div class="form-group">
      <label>Article Paragraph 2</label>
      <textarea rows="5" class="form-control form-control-alternative" name="data2" placeholder="A few words about you ...">Write your article in here...</textarea>
    </div>
  </div>
  <div class="pl-lg-4">
    <div class="form-group">
      <label>Article Paragraph 3</label>
      <textarea rows="6" class="form-control form-control-alternative" name="data3" placeholder="A few words about you ...">Write your article in here...</textarea>
    </div>
  </div>
<div class="col-xs-8">
  <input type="submit" name="submit" class="btn btn-primary" value="submit">
  <!--?php if(isset($error_msg)){
               echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
             }else if(isset($msg)) {
                echo "<span style='color:green;' class='pull-right'>$msg</span>";
             } ?-->
</div>
  </form>
                                <?php

                                if (isset($_POST['submit'])) {
                                  $title = $_POST['title'];
                                  $sub_title = $_POST['sub_title'];
                                  $tags = $_POST['tags'];
                                  $category = $_POST['category'];
                                  $post_data1 = $_POST['data1'];
                                  $post_data2 = $_POST['data2'];
                                  $post_data3 = $_POST['data3'];
                                  $cdate = time();
                                  $photo1 = $_FILES['photo1']['name'];
                                  $size = $_FILES['photo1']['size'];
                                  $type = $_FILES['photo1']['type'];
                                  $tmp_name = $_FILES['photo1']['tmp_name'];
                                  //$username = $_SESSION['username'];

                                $location = "include/article_uploads/";
                                //$maxsize= 10000000;
                                //$types = array('image/jpeg', 'image/png');
                                if(empty($category)){
                                  $error_msg = "Category Field is blank";
                                } else {
                                  move_uploaded_file($tmp_name, $location.$photo1);
                                  $query = "INSERT INTO `posts` (`id`, `date`, `title`, `sub_title`, `author`, `author_image`, `image`, `categories`,`tags`, `post_data1`, `post_data2`, `post_data3`, `views`, `status`,`photo1`) VALUES (NULL, '$cdate', '$title', '$sub_title', 'test user', 'favicon.png', 'img.png', '$category', '$tags', '$post_data1', '$post_data2', '$post_data3', '0', 'unpublish', '$photo1')";
                                  if(mysqli_query($link,$query)){
                                    $msg = "post Added";
                                    //$category = "";
                                  } else {
                                    $error_msg = "Failed to Add";
                                  }
                                }
                              }

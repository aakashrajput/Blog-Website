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
          <h3 class="mb-0">Add Category</h3>
        </div>
        <div class="col-4 text-right">
          <a href="profile.html#!" class="btn btn-sm btn-primary bg-green">Category Section</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <?php
        if(isset($_POST['submit'])){
                  $category = $_POST['category'];
                  if(empty($category)){
                    $error_msg = "Category Field is blank";
                  } else {
                    $query = "INSERT INTO `categories` (`id`, `category`) VALUES (NULL, '$category')";
                    if(mysqli_query($link,$query)){
                      $msg = "Category Added";
                      $category = "";
                    } else {
                      $error_msg = "Failed to Add";
                    }
                  }
                }
            ?>
        <h6 class="heading-small text-muted mb-4">Category information</h6>
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Category Name</label>
                <input type="text" id="input-username" class="form-control form-control-alternative" name="category" placeholder="Category!">
              </div>
            </div>
          </div>
        </div>
        <hr class="my-4" />
      <div class="col-xs-8">
        <input type="submit" name="submit" class="btn btn-primary" value="submit">
        <?php if(isset($error_msg)){
                     echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                   }else if(isset($msg)) {
                      echo "<span style='color:green;' class='pull-right'>$msg</span>";
                   } ?>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
<?php
include ("footer.php");
?>

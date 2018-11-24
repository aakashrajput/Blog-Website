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
      <form>
        <h6 class="heading-small text-muted mb-4">Category information</h6>
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Category Name</label>
                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="Hacking!">
              </div>
            </div>
          </div>
        </div>
        <hr class="my-4" />
      </form>
      <div class="col-xs-8">
        <a href="#" class="btn btn-primary">Add Category</a>
        <?php
          if(isset($error)){
            echo "<span style='color:red;' class='pull-right'>$error</span>";
          } else if(isset($msg)) {
            echo "<span style='color:green;' class='pull-right'>$msg</span>";
          }
         ?>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include ("footer.php");
?>

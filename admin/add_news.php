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
          <h3 class="mb-0">Add News</h3>
        </div>
        <div class="col-4 text-right">
          <a href="profile.html#!" class="btn btn-sm btn-primary bg-orange">News Section</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form>
        <h6 class="heading-small text-muted mb-4">News information</h6>
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-control-label" for="input-username">Title</label>
                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="This is a demo title!">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-first-name">Category</label>
                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Date</label>
                <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018" />
              </div>
            </div>
          </div>
        </div>
        <hr class="my-4" />
        <!-- Description -->
        <h6 class="heading-small text-muted mb-4">News Data</h6>
        <div class="pl-lg-4">
          <div class="form-group">
            <label>News</label>
            <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">Write your news in here...</textarea>
          </div>
        </div>
      </form>
      <div class="col-xs-8">
        <a href="#" class="btn btn-primary">Publish News</a>
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

<?php
include ("header.php");
  include ("top-head.php");
?>
<!-- Page content -->
<div class="container-fluid mt--7">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Posts List</h3>
        </div>
        <?php
        $query = "SELECT * FROM posts where status = 'publish' ORDER BY id DESC";
        $run = mysqli_query($link,$query);
        if(mysqli_num_rows($run) > 0){
         ?>
        <form class="" method="post">
        <div class="table-responsive">
          <table class="table align-items-center table-flush">

            <thead class="thead-light">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Date</th>
                <th scope="col">Author</th>
                <th scope="col">Post Title</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_array($run)){
                  $id = $row['id'];
                  $author = $row['author'];
                  $title = $row['title'];
                  $categories = $row['categories'];
                  $status = $row['status'];
                  $date = getdate ($row['date']);
                  $day = $date['mday'];
                  $month = substr($date['month'],0,3);
                  $year = $date['year'];
               ?>
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <?php echo $id; ?>
                  </div>
                </th>
                <td>
                  <?php echo "$day/$month/$year"; ?>
                </td>
                <td>
                <?php echo $author; ?>
                </td>
                <td>
                  <a href="test_post.php?post_id=<?php echo $id ?>"><?php echo $title; ?></a>
                </td>
                <!--td>
                  <span class="badge badge-dot mr-4">
                    <i class="bg-warning"></i><?php echo $post_data; ?>
                  </span>
                </td-->
                <td>
                  <?php echo $categories; ?>
                </td>
                <td>
                  <?php echo $status; ?>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer py-4">

          <div class="col-xs-8">
            <input type="submit" name="" value="Apply" class="btn btn-success">
            <?php
              if(isset($error)){
                echo "<span style='color:red;' class='pull-right'>$error</span>";
              } else if(isset($msg)) {
                echo "<span style='color:green;' class='pull-right'>$msg</span>";
              }
             ?>
          </div>
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="tables.html#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="tables.html#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="tables.html#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="tables.html#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="tables.html#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <?php
            }else {
              echo "<center><h2>No users Available</h2><br><hr></center>";
            }
         ?>
       </form>
      </div>
    </div>
  </div>




<?php
include ("footer.php");
?>

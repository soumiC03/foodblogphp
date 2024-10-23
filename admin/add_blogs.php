<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

require_once("../config/connect.php");

if (!isset($_SESSION['login_status'])) {
  header("location:login.php");
}

if (isset($_POST['save-cat'])) {

  $name = $_POST['c_name'];
  $description = $_POST['c_description'];
  $cat = $_POST['blog_cat'];
  $author = $_SESSION['name'];

  $date = date("Y-m-d H:i:s");

  if(!empty($_FILES['blog_image']['name'])) {
    $blogimg = "userupload_" . time() ."_" . str_replace("", "_", $_FILES['blog_image']['name'] );
  }
  move_uploaded_file($_FILES['blog_image']['tmp_name'], "uploads/" . $blogimg);


  $addCatSQL = "INSERT INTO blogs(blog_title,blog_description,blog_category,author,created_at,blog_image) 
  VALUES ('$name', '$description','$cat','$author','$date','$blogimg')";

  $res = mysqli_query($conn, $addCatSQL);

  if ($res) {
        echo "<script> alert('Blogs Added'); window.location.href = 'add_categories.php';</script>";
  }
  else{
    echo "<script> alert('Blogs Unable To Add'); window.location.href = 'add_categories.php';</script>";
  }
} 

$categoryresult = mysqli_query($conn, "SELECT * FROM category" );

require_once("./inc/header.php");

?>


<!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap" style="min-height: 90svh;">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Blogs</li>
      </ol>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card p-3">
            <h3 class="my-2 text-success">Add Blogs</h3>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="Category" class="form-label">Name</label>
                <input name="c_name" type="text" class="form-control" id="Category">

              </div>
              <div class="mb-3">
                <label for="Des" class="form-label">Description</label>
                <input name="c_description" class="form-control" id="Des">
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Image</label>
    <input name="blog_image" type="file" class="form-control" id="img">
    </div>


    <div class="mb-3">
    <label for="img" class="form-label">Category</label>
    <select name="blog_cat" id="" class="form-control">
      <option value="">Select one </option>
      <?php while($row = mysqli_fetch_assoc($categoryresult)) : ?>
      <option value="<?= $row['cat_name']?>"><?= $row['cat_name']?></option>
      <?php endwhile; ?>
    </select>
    </div>

  <button type="submit" name="save-cat" class="btn btn-primary">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>

 

</div>
<!-- //content -->
</div>
<!-- main content end-->
<?php
require_once("./inc/footer.php");
?>
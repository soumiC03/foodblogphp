<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
require_once("../config/connect.php");

if(!isset($_SESSION['login_status'])) {
  header("location:login.php");

}
if(isset($_POST["save-cat"]))  {
  $name= $_POST["c_name"];
  $description=$_POST["c_description"];
  $date= ("Y-m-d H:i:s");

  $addcategory= "INSERT INTO category(cat_name,cat_description,created_at) VALUES ('$name','$description','$date')";
  $result= mysqli_query($conn,$addcategory);

  if($result) {
 echo "<script>alert('Category successfully added');window.location.href='add_categories.php'</script>";
  } else {
    echo "<script>alert('Category unable to add');window.location.href='add_categories.php'</script>";
  }

}


require_once("./inc/header.php");

?>


<!-- main content start -->
<div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap" style="min-height: 90svh;">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Categories</li>
      </ol>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card p-3">
            <h3 class="my-2 text-success">Add Categories</h3>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="Category" class="form-label">Name</label>
                <input name="c_name" type="text" class="form-control" id="Category">

              </div>
              <div class="mb-3">
                <label for="Des" class="form-label">Description</label>
                <textarea name="c_description" class="form-control" id="Des"></textarea>
                   
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Image</label>
    <input name="c_image" type="file" class="form-control" id="img">
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
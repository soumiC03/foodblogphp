<?php
session_start();

$title = "Blogs | Categories" ;

if(!isset($_SESSION['login_status'])) {
  header("location:login.php");
}
require_once("./inc/header.php");

?>
  <!-- main content start -->
  <div class="main-content">

<!-- content -->
<div class="container-fluid content-top-gap" style="min-height: 80svh">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Categories</li>
    </ol>
  </nav>
  
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card p-3">
          <h3 class="my-2 text-success">Show All Categories List </h3>
          
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
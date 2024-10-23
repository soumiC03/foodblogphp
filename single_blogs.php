<?php
require_once("./config/connect.php");
require_once("./inc/header.php");

$singleBlogsContent = mysqli_query($conn, "SELECT * FROM blogs LEFT JOIN  category ON blogs.blog_category = category.cat_id LEFT JOIN users ON users.id = blogs.author
WHERE blogs.blog_id = '{$_GET['id']}'");

$row = mysqli_fetch_assoc($singleBlogsContent);
?>
    



<div class="container py-5 mt-5">
                  <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3"><?= $row['blog_category'] ?></span>
                            
                            <h3 class="title-big mb-4"> <?=$row['blog_title'] ?>
                            </h3>
                            <p class="message"><?=$row['blog_description'] ?></p>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="./admin/uploads/<?=$row['blog_image']?>" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                    </div>



  <?php
require_once ("./inc/footer.php");
  ?>
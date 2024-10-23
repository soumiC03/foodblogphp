<?php
require_once("./config/connect.php");



$allcatname = mysqli_query($conn, "SELECT * FROM blogs LEFT JOIN category ON category.cat_name = blogs.blog_category
WHERE category.cat_name = '{$_GET['id']}'");

$catsin = mysqli_fetch_assoc($allcatname);



require_once("./inc/header.php");




?>

<div class="w3l-searchblock w3l-homeblock1 py-5 mt-5">
    <div class="container py-lg-4 py-md-3">
        <!-- block -->
        <div class="most-recent">

            <div class="title-align mb-4">
                <h3 class="title-left"> <?=$catsin['cat_name']?></h3>
                <a href="#blog" class="more-posts"> View more blogs <span class="fas fa-arrow-right"></span></a>
            </div>
            <div class="row">
                <?php foreach($allcatname as $catname): ?>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="single_blogs.php?id=<?=$catname['blog_id']?>">
                                <img class="card-img-bottom d-block radius-image" src="./admin/uploads/<?=$catname['blog_image'] ?>"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe blue"><?=$catname['author'] ?></a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="single_blogs.php?id=<?=$catname['blog_id']?>" class="blog-desc"> <?=$catname['blog_title'] ?>
                            </a>
                            
                        </div>
                    </div>
                </div>
               <?php endforeach; ?>
            </div>
        </div>
        <!-- //block-->
    </div>
</div>
<?php
require_once ("./inc/footer.php");
  ?>
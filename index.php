<?php
require_once("./config/connect.php");
require_once("./inc/header.php");

$allBlogsContent = mysqli_query($conn, "SELECT * FROM blogs LEFT JOIN  category ON blogs.blog_category = category.cat_id LEFT JOIN users ON users.id = blogs.author");

$blogid = "SELECT * FROM `blogs` WHERE blog_id = '8'";
$blogresult = mysqli_query($conn,$blogid);

$blogselect = mysqli_fetch_assoc($blogresult);


$blogid2 = "SELECT * FROM `blogs` WHERE blog_id = '11'";
$blogresult2 = mysqli_query($conn,$blogid2);

$blogselect2 = mysqli_fetch_assoc($blogresult2);


$blogid3 = "SELECT * FROM blogs WHERE blog_id = '13'";
$blogresult3 = mysqli_query($conn,$blogid3);

$blogselect3 = mysqli_fetch_assoc($blogresult3);


$blogid4 = "SELECT* FROM blogs WHERE blog_id = '10' ";
$blogresult4 = mysqli_query($conn,$blogid4);

$blogselect4 = mysqli_fetch_assoc($blogresult4);

$quickcat = mysqli_query($conn,"SELECT * FROM `blogs` WHERE blog_category = 'Quick and Easy'" );

$latestdrinks = mysqli_query($conn,"SELECT * FROM `blogs` WHERE blog_category = 'Drinks' ORDER BY created_at DESC LIMIT 4");



?>
<div class="w3l-banner py-5">
    <div class="container py-lg-3 py-md-3">
        <div class="ban-content-inf row py-lg-3">
            <div class="maghny-gd-1 col-lg-8">
                <div class="maghny-grid">
                    <figure class="effect-lily border-radius">
                        <img class="img-fluid radius-image" src="assets/images/top-view-table-full-delicious-food-composition_1189562-17059.avif" alt="">
                        <figcaption class="w3set-hny">
                            <div class="info">
                                <a href="#reciepe" class="receipe">Reciepes</a>
                                <h4 class="top-text">Amazing Simple recipes made for you</h4>
                                <p class="mt-2 d-sm-block d-none"> Includes our most popular recipes in a beautiful, easy to read format. Lets dig in right over!</p>
                               
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-4 mt-lg-0 mt-4 mobile-grid">
                <div class="maghny-gd-1">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <img class="img-fluid radius-image" src="assets/images/bannerimg4-693267.webp" alt="" />
                            <figcaption>
                                <div>
                                    <h4 class="top-text1">Pinterest worthy recipes</h4>
                                    <aside class="p-meta-info">
                                        <span class="meta-info-el meta-info-custom">
                                            <span class="fa fa-clock-o mr-2"></span>10 Min Cooking
                                        </span>
                                    </aside>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="maghny-gd-1 mt-lg-4">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <img class="img-fluid radius-image" src="assets/images/bannerimg3-photo-699953.webp" alt="" />
                            <figcaption>
                                <div>
                                    <h4 class="top-text1">Latest Korean recipes</h4>
                                    <aside class="p-meta-info">
                                        <span class="meta-info-el meta-info-custom">
                                            <span class="fa fa-bell-o mr-2"></span>Quick
                                            <strong>Ramen and more</strong>
                                        </span>
                                    </aside>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- adv -->
<div class="ad-image text-center pb-lg-5">
    <div class="container">
        <h6 class="advert-decs">- Advertisement -</h6>
        <a class="widget-ad-link" target="_blank" href="#url"><img
                src="assets/images/adsimg(1)(1)(1)(1).png" alt="- Advertisement -" class="radius-image img-fluid"></a>
    </div>
</div>
<!-- //adv -->
<div class="w3l-searchblock w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3">
        <!-- block -->
        <div class="row">
            <div class="col-lg-8 most-recent pr-lg-4">
                <h3 class="title-left mb-3">Top Picks</h3>
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="single_blogs.php?id=<?php echo$blogselect['blog_id'] ?>">
                                    <img class="card-img-bottom d-block radius-image" src="./admin/uploads/<?=$blogselect['blog_image'] ?>"
                                        alt="Card image cap">
                                </a>
                                <div class="post-pos">
                                    <a href="single_blogs.php?id=<?php echo$blogselect['blog_id'] ?>" class="receipe green"><?= $blogselect['blog_category'] ?></a>
                                    <span class="meta-info meta-info-custom">
                                        <span class="fa fa-clock-o mr-2"></i></span><?= $blogselect['created_at'] ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body p-0 blog-details">
                                <a href="single_blogs.php?id=<?php echo$blogselect['blog_id'] ?>" class="blog-desc"> <?= $blogselect['blog_title'] ?>
                                </a>
                            
                                <p><?= $blogselect['blog_description'] ?></p>
                                <div class="p-footer mt-3">
                                    <div class="p-meta-info">
                                        <a href= "single_blogs.php?id=<?php echo$row['blog_id'] ?>" class="post-img-anchor">
                                            <img src="assets/images/a1.jpg" alt=""
                                                class="post-img radius-img img-fluid" />
                                        </a>
                                        <a href="#url"><?= $blogselect['author'] ?></a>
                                    </div>
                                    <a href="#read" class="read">Read more <span class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="single_blogs.php?id=<?php echo$blogselect2['blog_id'] ?>">
                                    <img class="card-img-bottom d-block radius-image" src="./admin/uploads/<?=$blogselect2['blog_image'] ?>"
                                        alt="Card image cap">
                                </a>
                                <div class="post-pos">
                                    <a href="single_blogs.php?id=<?php echo$blogselect2['blog_id'] ?>" class="receipe green"><?= $blogselect2['blog_category'] ?></a>
                                    <span class="meta-info meta-info-custom">
                                        <span class="fa fa-clock-o mr-2"></i></span><?= $blogselect['created_at'] ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body p-0 blog-details">
                                <a href="single_blogs.php?id=<?php echo$blogselect2['blog_id'] ?>" class="blog-desc"> <?= $blogselect2['blog_title'] ?>
                                </a>
                            
                                <p><?= $blogselect['blog_description'] ?></p>
                                <div class="p-footer mt-3">
                                    <div class="p-meta-info">
                                        <a href= "single_blogs.php?id=<?php echo$row['blog_id'] ?>" class="post-img-anchor">
                                            <img src="assets/images/a1.jpg" alt=""
                                                class="post-img radius-img img-fluid" />
                                        </a>
                                        <a href="#url"><?= $blogselect2['author'] ?></a>
                                    </div>
                                    <a href="#read" class="read">Read more <span class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 item py-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="single_blogs.php?id=<?= $blogselect3['blog_id'] ?>">
                                    <img class="card-img-bottom d-block radius-image" src="./admin/uploads/<?=$blogselect3['blog_image'] ?>"
                                        alt="Card image cap">
                                </a>
                                <div class="post-pos">
                                    <a href="single_blogs.php?id=<?php echo$blogselect3['blog_id'] ?>" class="receipe green"><?= $blogselect3['blog_category'] ?></a>
                                    <span class="meta-info meta-info-custom">
                                        <span class="fa fa-clock-o mr-2"></i></span><?= $blogselect['created_at'] ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body p-0 blog-details">
                                <a href="single_blogs.php?id=<?php echo$blogselect3['blog_id'] ?>" class="blog-desc"> <?= $blogselect3['blog_title'] ?>
                                </a>
                            
                                <p><?= $blogselect3['blog_description'] ?></p>
                                <div class="p-footer mt-3">
                                    <div class="p-meta-info">
                                        <a href= "single_blogs.php?id=<?php echo$row['blog_id'] ?>" class="post-img-anchor">
                                            <img src="assets/images/a1.jpg" alt=""
                                                class="post-img radius-img img-fluid" />
                                        </a>
                                        <a href="#url"><?= $blogselect3['author'] ?></a>
                                    </div>
                                    <a href="#read" class="read">Read more <span class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 item py-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="single_blogs.php?id=<?= $blogselect4['blog_id'] ?>">
                                    <img class="card-img-bottom d-block radius-image" src="./admin/uploads/<?=$blogselect4['blog_image'] ?>"
                                        alt="Card image cap">
                                </a>
                                <div class="post-pos">
                                    <a href="single_blogs.php?id=<?php echo$blogselect4['blog_id'] ?>" class="receipe green"><?= $blogselect4['blog_category'] ?></a>
                                    <span class="meta-info meta-info-custom">
                                        <span class="fa fa-clock-o mr-2"></i></span><?= $blogselect4['created_at'] ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body p-0 blog-details">
                                <a href="single_blogs.php?id=<?php echo$blogselect4['blog_id'] ?>" class="blog-desc"> <?= $blogselect4['blog_title'] ?>
                                </a>
                            
                                <p><?= $blogselect4['blog_description'] ?></p>
                                <div class="p-footer mt-3">
                                    <div class="p-meta-info">
                                        <a href= "single_blogs.php?id=<?php echo$row['blog_id'] ?>" class="post-img-anchor">
                                            <img src="assets/images/a1.jpg" alt=""
                                                class="post-img radius-img img-fluid" />
                                        </a>
                                        <a href="#url"><?= $blogselect4['author'] ?></a>
                                    </div>
                                    <a href="#read" class="read">Read more <span class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 trending mt-lg-0 mt-5 mb-lg-5 pl-lg-4">
                <div class="pos-sticky">
                    <div class="side-post-banner text-center">
                        <h3 class="title-left">Create Stunning RECIPES!</h3>
                        <p class="mt-3">Food: we love it, we need it..</p>
                        <a href="#read" class="btn-style btn btn-primary mt-4"> Get started </a>
                    </div>
                    <div class="tweets mt-5">
                        <h3 class="title-left mb-sm-3">Latest Tweets</h3>
                        <ul class="blog-cat twitter-feed">
                            <li>
                                <a href="#url">From crazy cooking tips to misunderstood menus, these funny food tweets will make you laugh out loud... Then go eat.
                                    <br><em class="twitter-date">August 4, 2024</em></a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- //block-->
    </div>
</div>
<!-- grids -->
<section class="grids-1 py-5" id="trip">
    <div class="grids py-lg-5 py-md-4">
        <div class="container">
            <div class="row grids-gap">
                <div class="col-lg-4 align-self">
                    <div class="text-left">
                        <h3 class="title-left mb-3">Categories</h3>
                        <p class="text-para">Curabitur id gravida risus. Fusce eget ex, nisi ac sed,
                            lacinia est. Quisque ut lectus, eros et, commodo risus. 
                            Nullam sit amet laoreet elit. non magna a velit. </p>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-md-5 mt-sm-4 mt-2">
                    <div class="row">
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 mt-sm-0 mt-4">
                            <div class="column">
                                <img src="assets/images/recipe.jpg" alt="" class="img-fluid" />
                                <div class="info">
                                    <h4>Healthy</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 mt-sm-0 mt-4">
                            <div class="column">
                                <img src="assets/images/video(1)(1).jpg" alt="" class="img-fluid" />
                                <div class="info">
                                    <h4>Quick Easy</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 mt-sm-0 mt-4">
                            <div class="column">
                               <img src="assets/images/drinks.jpg" alt="" class="img-fluid" />
                                <div class="info">
                                    <h4>Drinks</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 mt-sm-0 mt-4">
                            <div class="column">
                                <img src="assets/images/pexels-photo-18646646(1)(1).png" alt="" class="img-fluid" />
                                <div class="info">
                                    <h4>Desserts</h4>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //grids -->

<!-- home page newsletter -->
<section class="w3l-bottom pt-5" id="newsletter ">
    <div class="container">
        <div class="subscribe p-sm-5 p-4">
            <div class="row px-lg-0 py-lg-4 p-2">
                <div class="col-lg-5 header-section mx-auto">
                    <h3 class="title-left">Subscribe Newsletter </h3>
                    <p class=""> Get our latest news straight into your inbox</p>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-4">
                    <form action="#" method="post" class="subscribe-wthree">
                        <div class="d-md-flex flex-wrap subscribe-wthree-field">
                            <input class="form-control" type="email" placeholder="Enter your email..." name="email"
                                required="">
                            <button class="btn btn-style btn-primary" type="submit">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page newsletter -->
<!-- home page section -->
<section class="w3l-homeblock1">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="title-align mb-4">
                <h3 class="title-left">Quick & Easy Meals</h3>
                <a href="#blog" class="more-posts"> View more Recipes <span class="fas fa-arrow-right"></span></a>
            </div>
            <div id="owl-demo1" class="owl-carousel owl-theme mt-4 py-2 mb-md-4 mb-5">
                <?php foreach($quickcat as $quickcatres): ?>
                <div class="item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="single_blogs.php?id=<?=$quickcatres['blog_id']?>">
                                <img class="card-img-bottom d-block radius-image" src="./admin/uploads/<?=$quickcatres['blog_image']?>"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="single_blogs.php?id=<?=$quickcatres['blog_id']?>" class="receipe recipe"><?=$quickcatres['author']?></a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="single_blogs.php?id=<?=$quickcatres['blog_id']?>" class="blog-desc"><?=$quickcatres['blog_title']?>
                            </a>
                            <span class="post-date"><span class="fa fa-clock-o"></span> <?=$quickcatres['created_at']?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<div class="w3l-searchblock w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3">
        <!-- block -->
        <div class="most-recent">
            <div class="title-align mb-4">
                <h3 class="title-left">Latest Recipes On Drinks</h3>
                <a href="#blog" class="more-posts"> View more drinks <span class="fas fa-arrow-right"></span></a>
            </div>

            <div class="row">
                <?php foreach($latestdrinks as $drinksblogs): ?>
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="single_blogs.php?id=<?=$drinksblogs['blog_id']?>">
                                <img class="card-img-bottom d-block radius-image" src="./admin/uploads/<?=$drinksblogs['blog_image'] ?>"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe blue"><?=$drinksblogs['author'] ?></a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="single_blogs.php?id=<?=$drinksblogs['blog_id']?>" class="blog-desc"><?=$drinksblogs['blog_title'] ?>
                            </a>
                            <span class="post-date"><span class="fa fa-clock-o"></span> <?=$drinksblogs['created_at'] ?></span>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

            </div>
        </div>
        <!-- //block-->
    </div>
</div>



<!-- //home page section -->

  <!-- footer -->

  <?php
require_once ("./inc/footer.php");
  ?>
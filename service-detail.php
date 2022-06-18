<?php
require('./elements/header.php');
?>

<!-- Start Subheader -->
<div class="sub-header p-relative">
    <div class="overlay overlay-bg-black"></div>
    <div class="pattern"></div>
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sub-header-content p-relative">
                        <h1 class="text-custom-white lh-default fw-600">Service Detail</h1>
                        <ul class="custom">
                            <li> <a href="index.php" class="text-custom-white">Home</a>
                            </li>
                            <li class="text-custom-white active">Service Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Subheader -->
<!-- Start Service -->
<section class="section-padding bg-gray service-page">
    <div class="container">
        <div class="row"> 
            <aside class="col-lg-4">
                <div class="sidebar_wrap mb-md-80">
                    <div class="sidebar">
                        <div class="sidebar_widgets mb-xl-30">
                            <div class="widget_title bg-light-blue">
                                <h5 class="no-margin text-custom-white fw-600"> ADHES Services</h5>
                            </div>
                            <ul class="custom sidebar-services">
                                <li class=<?php if($_GET['service'] == "ventes") {echo("active");}else{echo("");}; ?>> <a href="service-detail.php?service=ventes" class="text-custom-black fs-14">Ventes ou Locations de matériels <span><i class="fas fa-chevron-right"></i></span></a>
                                </li>
                                <li class=<?php if($_GET['service'] == "editions") {echo("active");}else{echo("");}; ?>> <a href="service-detail.php?service=editions" class="text-custom-black fs-14">Editions & Publications<span><i class="fas fa-chevron-right"></i></span></a>
                                </li>
                                <li class=<?php if($_GET['service'] == "coaching") {echo("active");}else{echo("");}; ?>> <a href="service-detail.php?service=coaching" class="text-custom-black fs-14">Coaching et Conseils<span><i class="fas fa-chevron-right"></i></span></a>
                                </li>
                                <li class=<?php if($_GET['service'] == "femmes") {echo("active");}else{echo("");}; ?>> <a href="service-detail.php?service=femmes" class="text-custom-black fs-14">Formations Pratiques pour les femmes<span><i class="fas fa-chevron-right"></i></span></a>
                                </li>
                                <li class=<?php if($_GET['service'] == "jeunes") {echo("active");}else{echo("");}; ?>> <a href="service-detail.php?service=jeunes" class="text-custom-black fs-14">Métiers pour les jeunes <span><i class="fas fa-chevron-right"></i></span></a>
                                </li>
                                <li class=<?php if($_GET['service'] == "subventions") {echo("active");}else{echo("");}; ?>> <a href="service-detail.php?service=subventions" class="text-custom-black fs-14">Subventions pour les défavorisés<span><i class="fas fa-chevron-right"></i></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar_widgets mb-xl-30">
                            <div class="widget_title bg-light-blue">
                                <h5 class="no-margin text-custom-white fw-600">Opening Hours</h5>
                            </div>
                            <table class="table text-custom-black">
                                <tbody>
                                    <tr>
                                        <td>Lundi - Jeudi</td>
                                        <td>-</td>
                                        <td class="text-right">8H - 19H</td>
                                    </tr>
                                    <tr>
                                        <td>Vendredi</td>
                                        <td>-</td>
                                        <td class="text-right">9h - 18h</td>
                                    </tr>
                                    <tr class="last-tr">
                                        <td>Samedi</td>
                                        <td>-</td>
                                        <td class="text-right">10h - 18h</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="sidebar_widgets">
                            <div class="widget_title bg-light-blue">
                                <h5 class="no-margin text-custom-white fw-600">Recent News</h5>
                            </div>
                            <ul class="custom popular_post">
                                <li>
                                    <div class="post">
                                        <div class="post-wrapper">
                                            <div class="popular_post_img animate-img">
                                                <a href="blog-single.php">
                                                    <img src="https://via.placeholder.com/90" class="img-fluid image-fit" alt="#">
                                                </a>
                                            </div>
                                            <div class="popular_post_title">
                                                <div class="post-date">
                                                    <p class="text-white no-margin">March 20 2020</p>
                                                </div>
                                                <h6><a href="blog-single.php" class="text-custom-black fs-16 fw-600">FAST APPROVAL  May For You If You Are Innocent</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post">
                                        <div class="post-wrapper">
                                            <div class="popular_post_img animate-img">
                                                <a href="blog-single.php">
                                                    <img src="https://via.placeholder.com/90" class="img-fluid image-fit" alt="#">
                                                </a>
                                            </div>
                                            <div class="popular_post_title">
                                                <div class="post-date">
                                                    <p class="text-white no-margin">March 20 2020</p>
                                                </div>
                                                <h6><a href="blog-single.php" class="text-custom-black fs-16 fw-600">FAST APPROVAL  May For You If You Are Innocent</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post">
                                        <div class="post-wrapper">
                                            <div class="popular_post_img animate-img">
                                                <a href="blog-single.php">
                                                    <img src="https://via.placeholder.com/90" class="img-fluid image-fit" alt="#">
                                                </a>
                                            </div>
                                            <div class="popular_post_title">
                                                <div class="post-date">
                                                    <p class="text-white no-margin">March 20 2020</p>
                                                </div>
                                                <h6><a href="blog-single.php" class="text-custom-black fs-16 fw-600">FAST APPROVAL  May For You If You Are Innocent</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </aside>

            <?php 
                if(isset($_GET['service'])) {
                    $service = $_GET['service'];
                } else {
                    $service = "";
                };
                switch ($service) {
                    case 'ventes':
                    $link = "./details/ventes.php";
                    break;

                    case 'agrobusiness':
                    $link = "./details/agrobusiness.php";
                    break;

                    case 'coaching':
                    $link = "./details/coaching.php";
                    break;
                    
                    case 'editions':
                    $link = "./details/editions.php";
                    break;
                    
                    case 'femmes':
                    $link = "./details/femmes.php";
                    break;
                    
                    case 'jeunes':
                    $link = "./details/jeunes.php";
                    break;
                    
                    case 'subventions':
                    $link = "./details/subventions.php";
                    break;
                    
                    case '';
                    $link = './details/ventes.php';
                    break;
                        
                    default:
                    $link = './details/ventes.php';
                    break;
                }
                require_once("$link");
            ?>

            
        </div>
    </div>
</section>
<!-- End Service -->
<!-- Start Footer -->
<?php
require('./elements/footer.php');
?>

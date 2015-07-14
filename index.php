<?php 

$page_title = "Home";
$title = "";
$sub_title = "";
include('header.php');

?>

        <div class="banner">
            <img src="img/banner.jpg" />
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article class="full">
                    <section>
                        <h1>This a H1 tag and is set at 1.75em for size.</h1>
                        <h3 class="default-color">This is a H3 tag and is set at 1.25em and can be used for sub headers on pages. This is a H3 tag and is set at 1.25em and can be used for sub headers on pages.</h3>
                    </section>
                </article>

                <div class="clearfix"></div>
                <hr /><br/>
                <div class="clearfix"></div>

                <article class="third">
                    <section>
                        <img src="img/about-dcm.jpg" />
                        <h3>About DCM</h3>
                        <p>Learn more about the services <br/>DCM offer</p>
                        <div class="clearfix"></div>
                        <p><a href="#" class="button">Find out more</a></p>
                    </section>
                </article>

                <article class="third">
                    <section>
                        <img src="img/training.jpg" />
                        <h3>Compliance Training</h3>
                        <p>DCM offers a range of dental <br/>compliance training programmes</p>
                        <div class="clearfix"></div>
                        <p><a href="#" class="button">Find out more</a></p>
                    </section>
                </article>

                <article class="third">
                    <section>
                        <img src="img/our-services.jpg" />
                        <h3>Our Services</h3>
                        <p>Learn more about the <br/>services DCM offer</p>
                        <div class="clearfix"></div>
                        <p><a href="#" class="button">Find out more</a></p>
                    </section>
                </article>

            </div> <!-- #main -->

            <!-- #sign-up -->            
            <?php include('inc/sign-up-inc.php'); ?>
            <!-- #sign-up -->

            <div class="main wrapper clearfix">    
                <!-- #testimonial -->            
                <?php include('inc/testimonial-inc.php'); ?>
                <!-- #testimonial -->

                <!-- #latest-news -->            
                <?php include('inc/latest-news-inc.php'); ?>
                <!-- #latest-news -->
            </div>

        </div> <!-- #main-container -->

<?php include('footer.php'); ?>
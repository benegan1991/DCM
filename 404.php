<?php 

$page_title = "Page not found";
$title = "404";
$sub_title = "Page not found";
include('header.php');

?>
		<!-- #title-banner -->
		<?php include('inc/title-banner-inc.php'); ?>
		<!-- #title-banner -->

        <div class="main-container">
            
            <div class="main wrapper clearfix">
                <div class="full">
                    <h1>404 Error</h1>
                    <p>We are very sorry but the page you are looking for has not been found!</p>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- #sign-up -->            
            <?php include('inc/sign-up-inc.php'); ?>
            <!-- #sign-up -->

            <div class="clearfix"></div>

            <div class="main wrapper clearfix">
   
                <!-- #testimonial -->            
                <?php include('inc/testimonial-inc.php'); ?>
                <!-- #testimonial -->

                <!-- #latest-news -->            
                <?php include('inc/latest-news-inc.php'); ?>
                <!-- #latest-news -->

            </div>

		</div><!-- #Main Container -->

<?php include('footer.php'); ?>
<?php 

$page_title = "Contact Us";
$title = "Contact Us";
$sub_title = "Get in touch";
include('header.php');

?>
		<!-- #title-banner -->
		<?php include('inc/title-banner-inc.php'); ?>
		<!-- #title-banner -->

        <div class="main-container">
            <div class="main wrapper clearfix">
                
                <aside class="reverse">
                    <h3>Get in touch</h3>
                    <hr class="title-underline" />
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores etea.</p>
                        <form class="default">
                            <label for="name">Name (required)<br/>
                            <input type="text" name="name" />
                            </label>

                            <label for="email">Email (required)<br/>
                            <input type="text" name="email" id="email" />
                            </label>

                            <label for="subject">Subject<br/>
                            <input type="text" name="subject" />
                            </label>

                            <label for="message">Message<br/>
                            <textarea name="message" rows="6"></textarea>
                            </label>

                            <button type="submit" class="button">Send</button>
                        </form>
                    </div>
                </aside>

                <article class="reverse">
                    <h3>Our details</h3>
                    <hr class="title-underline" />
                    <div class="content">
                        <p>Dental Compliance Matters<br/>
                        69 Mulgrave Street<br/>
                        Swinton<br/>
                        Manchester<br/>
                        M27 9XH</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:degan@dentalcm.co.uk">degan@dentalcm.co.uk</a><br/>
                        <i class="fa fa-phone"></i> 07772 561 285</p>
                    </div>
                </article>

            </div>

            <!-- #sign-up -->            
            <?php include('inc/sign-up-inc.php'); ?>
            <!-- #sign-up -->

        </div>

<?php include('footer.php'); ?>
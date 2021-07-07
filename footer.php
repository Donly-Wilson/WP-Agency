<footer>
    <div id="contact-us" class="container">
        <div class="title">
            <h1>Contact</h1>
        </div>
        <div class="contact">
            <div class="contact-info">
                <div class="email">
                    <span>Email</span>
                    <span><?php echo get_theme_mod('landing_footer_email', 'newera@agencey.com') ?></span>
                </div>
                <div class="phone">
                    <span>Phone</span>
                    <span><?php echo get_theme_mod('landing_footer_number_1', '+1 758 230 9214') ?></span>
                    <span><?php echo get_theme_mod('landing_footer_number_2', '+44589002932') ?></span>
                </div>
                <div class="address">
                    <span>Address</span>
                    <span><?php echo get_theme_mod('landing_footer_address', 'Maigot bay, Kanel, 5th Avenue Broadway Classtown') ?></span>
                </div>
                <div class="social-container">
                    <a href="http://www.facebook.com/">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="http://www.dribbble.com/">
                        <i class="fab fa-dribbble"></i>
                    </a>
                    <a href="http://www.facebook.com/">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="http://www.facebook.com/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <!-- <form class="contact-form">
                <h3>Contact Us</h3>

                <label for="name" class="form-group">
                    <input type="text" class="form-control" required>
                    <span class="form-group_name">Name</span>
                    <span class="border"></span>
                </label>
                <label for="email" class="form-group">
                    <input type="email" class="form-control" required>
                    <span class="form-group_name">Email</span>
                    <span class="border"></span>
                </label>
                <label for="phone" class="form-group">
                    <input type="text" class="form-control" required>
                    <span class="form-group_name">Phone</span>
                    <span class="border"></span>
                </label>
                <label for="company" class="form-group">
                    <input type="text" class="form-control" required>
                    <span class="form-group_name">Company</span>
                    <span class="border"></span>
                </label>
                <label for="website" class="form-group">
                    <input type="text" class="form-control" required>
                    <span class="form-group_name">Website</span>
                    <span class="border"></span>
                </label>
                <label for="message" class="form-group">
                    <textarea name="" id="" cols="30" rows="10" class="form-control" required></textarea>
                    <span class="form-group_name">Message</span>
                </label>
                <input type="submit" name="" id="" value="Make My Enquiry">
            </form> -->
            <div class="wp-form">
                <h3>Contact Us</h3>
                <?php
                echo do_shortcode(
                    '[wpforms id="71" title="false" description="false"]'
                );
                ?>
            </div>
        </div>
    </div>
    <h5>Donly Wilson</h5>
    <h6>Copyright © 2021 All rights reserved</h6>
</footer>
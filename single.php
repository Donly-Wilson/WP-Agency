<?php
/*
Template Name: Single Project Template
*/

get_header();
?>

<section id="portfolio-projects">
    <div class="container blog">
        <!-- Loop through wordpress post -->
        <!-- start of post -->
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                <h1><?php echo the_title(); ?></h1>
                <div class="project-image">
                    <div class="img" style="background: url('<?php echo the_post_thumbnail_url('medium'); ?>'); background-size:cover !important; background-position:center center !important;"></div>
                </div>
                <div class="content-area">
                    <div class="inside">
                        <p><?php echo the_content(); ?></p>
                        <?php dynamic_sidebar('left-sidebar'); ?>
                    </div>
                    <div class="right-widgets">
                        <?php dynamic_sidebar('right-sidebar'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div>
                <h1>Blogs Comming Soon</h1>
            </div>
        <?php endif; ?>
        <!-- end of post -->
    </div>
</section>

<?php get_footer() ?>
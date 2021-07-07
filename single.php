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
                    <div class="img" style="background: url('<?php echo the_post_thumbnail_url('large'); ?>'); background-size:cover !important; background-position:center center !important;"></div>
                </div>
                <div class="content-area">
                    <div class="inside">
                        <p><?php echo the_content(); ?></p>
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif; ?>
                        <?php dynamic_sidebar('left-sidebar'); ?>
                    </div>
                    <?php if ( is_active_sidebar('right-sidebar')) :?>
                        <div class="right-widgets">
                            <?php dynamic_sidebar('right-sidebar'); ?>
                        </div>
                    <?php endif; ?>
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
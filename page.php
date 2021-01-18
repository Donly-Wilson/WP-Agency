<!-- Return header -->
<?php get_header(); ?>

<section id="page-template">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- Return main content from link -->
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
    </div>
</section>

<!-- Return Footer -->
<?php get_footer(); ?>
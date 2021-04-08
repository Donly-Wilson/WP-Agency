<?php
/*
Template Name: About-Page
*/
get_header();
?>

<div id="about">
    <div class="about-description">
        <div class="container">
            <h3>Who Are We?</h3>
            <p>We are Impression, a multi-award winning, strategic-thinking team of digital marketing experts with a creative edge. We thrive on creating intelligent, integrated creative marketing campaigns and seamless customer journeys. We’re passionate about doing the best work we can and pushing new technology to its limits. And we achieve results to be proud of.</p>

            <p>Your business can benefit from our range of digital marketing services which we already supply to clients across the UK and overseas. As an ambitious agency, we set ourselves big goals and will only work with companies when we believe we can make a tangible different to their bottom line.</p>

            <p>We believe in long-term results and stay away from ‘quick wins’ that don’t last. That’s why we’ve built a team of digital experts with a creative edge, able to utilise existing digital marketing techniques to best effect and combine that with forward-thinking approaches which make the most of new technologies and creative processes.</p>

            <p>That means we’re dedicated to being the best at what we do, and to helping you do the same. If you’re looking to work with an agency that delivers results now, with a clear eye on the future, get in touch. We’d love to hear from you.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="team">
            <div class="team-header">
                <h3>Our Amazing Team</h3>
                <p>Choose Impression and your business will benefit from the work of our team of digital marketing experts. Although our agency is relatively young, our account managers have a minimum of 5 years’ experience in the industry.</p>
            </div>
            <?php 
            // select pod sevices and add it in variable
            $myTeamPod = pods('my team');
            // select pod and put them in ascending order
            $myTeamPod->find('name ASC')    
            ?>
            <div class="team-gallery">
            <?php while ($myTeamPod->fetch()) : ?>
            <!-- //while loop runs aslong as there are are Team pods -->
            <?php
            $name = $myTeamPod->field('member_name');
            $role = $myTeamPod->field('member_role');

            // returns image to use directly in background
            $row = $myTeamPod->row();
            $post_id = $row['ID'];
            if (!function_exists('get_post_featured_image')) {
            function get_post_featured_image($post_id, $size)
            {
                $return_array = [];
                $image_id = get_post_thumbnail_id($post_id);
                $image = wp_get_attachment_image_src($image_id, $size);
                $image_url = $image[0];
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                $image_post = get_post($image_id);
                $image_caption = $image_post->post_excerpt;
                $image_description = $image_post->post_content;
                $return_array['id'] = $image_id;
                $return_array['url'] = $image_url;
                $return_array['alt'] = $image_alt;
                $return_array['caption'] = $image_caption;
                $return_array['description'] = $image_description;
                return $return_array;
            }
            }
            $image_properties = get_post_featured_image($post_id, 'full');
            ?>
                <div class="team-gallery_photo">
                    <div class="photo" style="background: url(<?php echo $image_properties['url'] ?>); background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="photo-info">
                        <span class="name"><?php echo $name?></span>
                        <span class="profession"><?php echo $role?></span>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<!-- Wordpress syntax to add footer using php  -->
<?php get_footer(); ?>
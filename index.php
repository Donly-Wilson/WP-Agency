<!-- Wordpress syntax to add or include header using php  -->
<?php get_header(); ?>
<section id="top">
  <div class="container">
    <div class="info">
      <div class="blue-square"></div>
      <h1><?php echo get_bloginfo('name') ?></h1>
      <p>Web Developer</p>
      <a href="#portfolio-section">Latest Works</a>
    </div>
    <div class="img">
      <div class="background-img">

      </div>
    </div>
  </div>
  <!-- <div class="testsec">
    <svg xmlns="http://www.w3.org/2000/svg" width="597" height="788" viewBox="0 0 697 788">
      <defs>
        <mask id="i8tpb" width="2" height="2" x="-1" y="-1">
          <path fill="#fff" d="M18 4h570v662H18z" />
          <path d="M34.596 209.763S99.786-3.8 273.824 4.23c0 0 78.346 1.605 93.298 86.71 14.952 85.104-15.55 142.911 136.36 263.34 0 0 183.607 156.293 9.569 268.695 0 0-197.363 123.107-371.999-47.102C-33.583 405.664 26.223 237.596 34.596 209.763z" />
        </mask>
        <filter id="i8tpa" width="794.2" height="899.1" x="-71" y="-85" filterUnits="userSpaceOnUse">
          <feOffset dx="46.2" dy="59.1" in="SourceGraphic" result="FeOffset1023Out" />
          <feGaussianBlur in="FeOffset1023Out" result="FeGaussianBlur1024Out" stdDeviation="31.6 31.6" />
        </filter>
        <pattern id="img1" patternUnits="userSpaceOnUse" width="697" height="788">
          <image href="https://insidetema.com/wp-content/uploads/2018/05/170717100550_1_900x600.jpg" x="0" y="0" width="697" height="788" />
        </pattern>
      </defs>
      <g>
        <g>
          <g filter="url(#i8tpa)">
            <path fill="none" d="M34.596 209.763S99.786-3.8 273.824 4.23c0 0 78.346 1.605 93.298 86.71 14.952 85.104-15.55 142.911 136.36 263.34 0 0 183.607 156.293 9.569 268.695 0 0-197.363 123.107-371.999-47.102C-33.583 405.664 26.223 237.596 34.596 209.763z" mask="url(&quot;#i8tpb&quot;)" />
            <path fill="#432763" fill-opacity=".26" d="M34.596 209.763S99.786-3.8 273.824 4.23c0 0 78.346 1.605 93.298 86.71 14.952 85.104-15.55 142.911 136.36 263.34 0 0 183.607 156.293 9.569 268.695 0 0-197.363 123.107-371.999-47.102C-33.583 405.664 26.223 237.596 34.596 209.763z" />
          </g>
          <path fill="#11347c" d="M34.596 209.763S99.786-3.8 273.824 4.23c0 0 78.346 1.605 93.298 86.71 14.952 85.104-15.55 142.911 136.36 263.34 0 0 183.607 156.293 9.569 268.695 0 0-197.363 123.107-371.999-47.102C-33.583 405.664 26.223 237.596 34.596 209.763z" />
          <path fill="url(#img1)" d="M34.596 209.763S99.786-3.8 273.824 4.23c0 0 78.346 1.605 93.298 86.71 14.952 85.104-15.55 142.911 136.36 263.34 0 0 183.607 156.293 9.569 268.695 0 0-197.363 123.107-371.999-47.102C-33.583 405.664 26.223 237.596 34.596 209.763z" />
        </g>
      </g>
    </svg>
  </div> -->
</section>
<section id="services-section">
  <div class="container">
    <div class="title">
      <div class="circle"></div>
      <h1>services</h1>
    </div>
    <div class="services-container">
      <?php
      // select pod sevices and add it in variable
      $myServicePod = pods('service');
      // select pod and put them in ascending order
      $myServicePod->find('name ASC')
      ?>

      <?php while ($myServicePod->fetch()) : ?>
        <!-- //while loop run aslong as there are are service pods -->
        <?php
        $name = $myServicePod->field('name');
        $icon_class = $myServicePod->field('icon_class');
        $content = $myServicePod->field('content');
        $border_color = $myServicePod->field('border_color');
        $permalink = $myServicePod->field('permalink');
        ?>

        <div class="box <?php echo $border_color ?>">
          <i class="<?php echo $icon_class ?>"></i>
          <h5><?php echo $name ?></h5>
          <p><?php echo $content ?></p>
        </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>
<section id="portfolio-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>portfolio</h1>
    </div>
    <div class="portfolio-container">
      <?php
      // select pod sevices and add it in variable
      $myProjectPod = pods('project');
      // select pod and put them in ascending order
      $myProjectPod->find('name ASC');
      $loopIndex = 0;
      ?>

      <?php while ($myProjectPod->fetch()) : ?>
        <!-- //while loop run aslong as there are are project pods -->
        <?php
        $name = $myProjectPod->field('name');
        $type_of_project = $myProjectPod->field('type_of_project');
        $permalink = $myProjectPod->field('permalink');
        $loopIndex += 1;

        // returns image to use directly in background
        $row = $myProjectPod->row();
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

        <a href="<?php echo $permalink; ?>" class="box image<?php echo $loopIndex ?>">
          <div class="image" style='
            background: url("<?php echo $image_properties['url']; ?>");
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
          '>
            <div class="hover-bg">
              <div class="title">
                <div class="text"><?php echo $type_of_project ?></div>
              </div>
            </div>
          </div>
        </a>
      <?php endwhile; ?>

    </div>
  </div>
</section>
<section id="experience-section">
  <div class="container">
    <div class="large-title">
      Experience
    </div>
    <div class="experience-container">
      <div class="large-icons">
        <div class="square">
          <div class="blue-box">
            Experience
          </div>
        </div>
        <div class="circle">
          <div class="white-box">
            AWARDS
          </div>
        </div>
        <div class="triangle">
          <div class="triangle-box">
            <div class="text">Work</div>
          </div>
        </div>
      </div>
      <div class="info">
        <?php
        // select pod sevices and add it in variable
        $myExperiencePod = pods('experience');
        // select pod and put them in ascending order
        $myExperiencePod->find('name ASC')
        ?>

        <?php while ($myExperiencePod->fetch()) : ?>
          <!-- //while loop run aslong as there are are experience pods -->
          <?php
          $name = $myExperiencePod->field('name');
          $location = $myExperiencePod->field('location');
          $start_end_date = $myExperiencePod->field('start_end_date');
          $content = $myExperiencePod->field('content');
          $permalink = $myExperiencePod->field('permalink');
          ?>

          <div class="info-box">
            <h4><?php echo $name ?> - <?php echo $location ?></h4>
            <span class="date">
              <?php echo $start_end_date ?>
            </span>
            <p><?php echo $content ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
<section id="blog-section">
  <div class="container">
    <div class="title">
      <h1>Blog</h1>
    </div>
    <div class="blog-container">
      <!-- Loop through wordpress post -->
      <?php if (have_posts()) : while (have_posts()) : the_post() ?>
          <!-- start of post -->
          <a href="<?php the_permalink(); ?>" class="post post-<?php the_ID(); ?>">
            <div class="post-img" style="background: url('<?php echo the_post_thumbnail_url('medium'); ?>');"></div>
            <div class="details">
              <h4><?php echo the_title(); ?></h4>
              <p><?php echo the_excerpt(); ?></p>
            </div>
            <div class="more">
              <div class="button">
                Read More
              </div>
            </div>
          </a>
          <!-- end of post -->
        <?php endwhile; ?>
      <?php else : ?>
        <div>
          <h1>Blogs Comming Soon</h1>
        </div>
      <?php endif; ?>


    </div>
  </div>
</section>
<section id="testimonials-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>Testimonials</h1>
    </div>
    <div id="testimonials-app">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
      <h3>Loading</h3>
    </div>
  </div>
</section>
<!-- Wordpress syntax to add footer using php  -->
<?php get_footer(); ?>
<script type="module" src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>

<!-- input wordpress admin header -->
<?php wp_footer(); ?>
</body>

</html>
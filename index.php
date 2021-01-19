<!-- Wordpress syntax to add or include header using php  -->
<?php get_header(); ?>
<section id="top">
  <div class="container">
    <div class="info">
      <div class="blue-square"></div>
      <h1>Joe Santos Garcia</h1>
      <p>Web Developer</p>
      <a href="#">Latest Works</a>
    </div>
    <div class="img">
      <div class="background-img">

      </div>
    </div>
  </div>
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
      <a href="portfoli/#" class="box image1">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Ecommerce</div>
            </div>
          </div>
        </div>
      </a>
      <a href="portfoli/#" class="box image2">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Ecommerce</div>
            </div>
          </div>
        </div>
      </a>
      <a href="portfoli/#" class="box image3">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Ecommerce</div>
            </div>
          </div>
        </div>
      </a>
      <a href="portfoli/#" class="box image4">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Ecommerce</div>
            </div>
          </div>
        </div>
      </a>
      <a href="portfoli/#" class="box image5">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Ecommerce</div>
            </div>
          </div>
        </div>
      </a>
      <a href="portfoli/#" class="box image6">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Ecommerce</div>
            </div>
          </div>
        </div>
      </a>
      <a href="portfoli/#" class="box image7">
        <div class="image">
          <div class="hover-bg">
            <div class="title">
              <div class="text">Ecommerce</div>
            </div>
          </div>
        </div>
      </a>
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
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
      <!-- start of post -->
      <a href="blog/#" class="post">
        <div class="post-img" style="background: url('https://jelvix.com/images/blog/5a186830155ab.jpg');"></div>
        <div class="details">
          <h4>Top 10 Javascript Frameworks</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="more">
          <div class="button">
            Read More
          </div>
        </div>
      </a>
      <!-- end of post -->
    </div>
  </div>
</section>
<section id="testimonials-section">
  <div class="container">
    <div class="title">
      <div class="square"></div>
      <h1>Testimonials</h1>
    </div>
    <div class="testimonials-container">
      <div class="test-sides test-left">
        <div class="person-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/male-30.jpg');">
          <div class="hover-bg">
            <div class="name">James</div>
          </div>
        </div>
      </div>
      <div class="test-center">
        <div class="header">
          <div class="user-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/8912fe22-7970-4e15-a3a1-abef9f2fb4b5')">

          </div>
          <div class="info">
            <h4>Jenny Benzino</h4>
            <span>CEO, Nike</span>
          </div>
        </div>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="test-sides test-right">
        <div class="person-img" style="background: url('https://d3iw72m71ie81c.cloudfront.net/88b95197-fd1e-4e11-8793-2903a5cfd06e-10584053_10153749310922416_3125632463004974493_n.jpg')">
          <div class="hover-bg">
            <div class="name">Bryant</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Wordpress syntax to add footer using php  -->
<?php get_footer(); ?>
<script src="<?php echo get_bloginfo('template_directory'); ?> /js/app.js"></script>

<!-- input wordpress admin header -->
<?php wp_footer(); ?>
</body>

</html>
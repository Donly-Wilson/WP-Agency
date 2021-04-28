<?php
if( ! function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment_area_block">
        <div class="comment_area_block_thumbnail">
            <?php echo get_avatar($comment,$size='60',$default='https://pngpress.com/wp-content/uploads/2020/03/WordPress-Logo-PNG-HD.png' ); ?>
        </div>
        <div class="comment_area_block_info">
            <span class="comment_area_block_info-by">
                <strong><?php echo get_comment_author() ?></strong>
                <span class="comment_area_block_info-date"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?></span>
            </span>
            <p> <?php comment_text() ?></p>
            <span class="comment_area_block_info-reply">
                <span> <a href="#"><i class="fa fa-reply"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
            </span>
        </div>
    </div>
<?php
        }
endif;

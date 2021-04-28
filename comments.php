<?php
//Get only the approved comments
$args = array(
    'status' => 'approve'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 ?>
<?php if ( $comments ): // Comment Loop?>
    <ul class="comment_area">
        <h3 class="comment_area_title"> Recent comments </h3>
        <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 35,
                        'callback' => 'better_comments'
                ) )
            ?>
    </ul>
<?php else : ?>
    <h3> No Recent comments </h3>
<?php endif; ?>
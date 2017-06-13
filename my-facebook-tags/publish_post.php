
add_action( 'publish_post', 'post_published_notification', 10, 2 );

function post_published_notification( $ID, $post ) {
    $email = get_the_author_meta( 'user_email', $post->post_author );
    $subject = 'Published ' . $post->post_title;
    $message = 'We just published your post: ' . $post->post_title . ' take a look: ' . get_permalink( $ID ); 
    wp_mail( $email, $subject, $message );
}


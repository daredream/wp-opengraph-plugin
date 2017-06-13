add_filter('login_errors','login_error_message');

function login_error_message( $error ){
    $error = "Incorrect login information, stay out!";
    return $error;
}

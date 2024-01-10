<?php
$cookie_name = "last_visit";

if(!isset($_COOKIE[$cookie_name])) {
    echo "Jesteś na stronie pierwszy raz.";

    $current_time = date('m/d/Y h:i:s a', time());
    setcookie($cookie_name, $current_time, time() + (86400 * 30), "/"); // 86400 = 1 day
} else {
    $last_visit = $_COOKIE[$cookie_name];
    $current_time = date('m/d/Y h:i:s a', time());
    setcookie($cookie_name, $current_time, time() + (86400 * 30), "/"); // 86400 = 1 day

    echo "Ostatnie wejście na stronę było: $last_visit";
}
?>
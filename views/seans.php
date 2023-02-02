<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$id_film = (isset($film['id'])) ? $film['id'] : (isset($_GET['id']) ? $_GET['id'] : null);

$selectedDate = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$now = strtotime(date('Y-m-d H:i:s'));

if (is_array($seanses)) {
    $emply = true;
    foreach ($seanses as $one_seans) {
        if ($one_seans['movie_id'] == $id_film && $one_seans['date_movie'] == $selectedDate && strtotime($one_seans['time_movie']) >= $now) {
            $emply = false;
            echo '<div class="block-time">';
            echo '<h2>' . date("G:i", strtotime($one_seans['time_movie'])) . '<span class="price-seans">' . $one_seans['price'] . ' ₽</span></h2>';
            echo '</div>';
        }
    }
    if ($emply) {
        echo 'Нет проката';
    }
}
?>

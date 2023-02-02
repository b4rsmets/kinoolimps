<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($film['id'])){
    $id_film=$film['id'];
}
elseif (isset($_GET['id'])){
    $id_film=$_GET['id'];
}

$selectedDate = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');

if(is_array($seanses)){
    $emply=true;
    foreach ($seanses as $one_seans){
        if($one_seans['movie_id']==$id_film && $one_seans['date_movie'] == $selectedDate && strtotime($one_seans['time_movie']) >= strtotime(date('Y-m-d H:i:s'))) {
            $emply=false;
            ?>
            <div class="block-time">
                <h2><?= date("G:i", strtotime($one_seans['time_movie']));?>
                <span class="price-seans"><?=$one_seans['price']?> ₽</span>
            </div>
            <?php
        }
    }
    if ($emply) {
        echo 'Нет проката';
    }
}
?>
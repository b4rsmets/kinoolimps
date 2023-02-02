<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($film['id'])){
    $id_film=$film['id'];
}
elseif (isset($_GET['id'])){
    $id_film=$_GET['id'];
}
if(is_array($seanses)){
    $emply=true;
    foreach ($seanses as $one_seans){
        if($one_seans['movie_id']==$id_film && date("Y-m-d") == date("Y-m-d", strtotime($one_seans['date_movie'])) && date("G:i") < date("G:i", strtotime($one_seans['time_movie']))){
            $emply=false
            ?>
                    
                <div class="block-time">
                    <h2><?=date("G:i", strtotime($one_seans['time_movie']));?>
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

<?php
if(isset($film['id'])){
    $id_film=$film['id'];
}
elseif (isset($_GET['id'])){
    $id_film=$_GET['id'];
}
if(is_array($seanses)){
$emply=true;//если не одного времени не было, остается true
foreach ($seanses as $one_seans){
    if($one_seans['movie_id']==$id_film)://если ид фильма в массиве сеансов сопадает с ид фильма, время выводим
        $emply=false
        ?>

        <div class="block-time">
            <h2><?= date("G:i", strtotime($one_seans['time_movie']));?>
        </div>
    <?php
    endif;
}
if ($emply) {
    echo 'Нет проката';
}
}

?>

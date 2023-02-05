<?php
use DBConnect as DBConnect;
$connect= DBConnect::getInstance()->getConnect();
$sql="SELECT * FROM movies WHERE id=".$_GET['id'];
$query=$connect->query($sql);
if($query->num_rows) {
$film = $query->fetch_assoc();
}
require_once './functions/seans.php';
?>
<div class="date-container">
    <div class="choose-date">
        <a href="film?id=<?=$film['id']?>&date=<?=date('Y-m-d')?>">Сегодня</a>
        <a href="film?id=<?=$film['id']?>&date=<?= date ('Y-m-d',strtotime('+1 day'))?>">Завтра</a>
        <a href="film?id=<?=$film['id']?>&date=<?=date('Y-m-d',strtotime('+2 day'))?>">Выбрать дату</a>
    </div>

</div>
<div class="container-film">
        <div class="information-film">
            <div class="poster-film">
                <img src="./resource/uploads/afisha/<?=$film['movie_image']?>" alt="">
            </div>
            <div class="restriction-film">
                <span><?=$film['movie_restriction']?>+</span>
            </div>
            <div class="title-film">
                <h2><?=$film['movie_title']?></h2>
            </div>
            
            <div class="genre-film">
            <span class="podtext">Жанр</span>
                <h3><?=$film['movie_genre']?></h3>
            </div>
            <div class="country-film">
            <span class="podtext">Страна</span>
                <h3><?=$film['movie_country']?></h3>
            </div>
            <div class="duration-film">
            <span class="podtext">Продолжительность</span>
                <p><?= date("g \ч. i \мин.", strtotime($film['movie_duration']));?></p>
            </div>
        </div>
        <div class="content-film-container">
            <div class="tickets-film">
               
                <div class="seans-container-film">
                     <h1>Сеансы 2D</h1>
                    <div class="container-card">
                    <?php
                    require_once ('./views/seans.php')
                    ?>
                </div>
            </div>
           
            </div>
            <div class="description-film">
                <span><?=$film['movie_description']?></span>
            </div>
            <div class="trailer">
            <iframe width="700" height="400" src="<?=$film['movie_trailer']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
</div>  
<?php 
?>
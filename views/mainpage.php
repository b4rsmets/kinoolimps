<?php

use DBConnect as DBConnect;
$connect= DBConnect::getInstance()->getConnect();
$query=$connect->query('SELECT * FROM movies');
if($query->num_rows) {
    while ($row = $query->fetch_assoc()) {
        $films[] = $row;
    }
}
//выбираем все сеансы в массив seans
require_once './functions/seans.php';
require_once './functions/slider.php';
?>
<div id="slider">
<?php
if(is_array($sliders))
foreach ($sliders as $slide)
{
?>
<img src="/resource/uploads/posters/<?=$slide['slider_image']?>" alt="Slide">


<?php
}
?>
<div id="slide-indicators">
</div>
</div>
<div class="date-container">
    <div class="choose-date">
        <a href="afisha?date=<?=date('Y-m-d')?>"><?=date('F j')?></a>
        <a href="afisha?date=<?= date ('Y-m-d',strtotime('+1 day'))?>"><?= date ('F j',strtotime('+1 day'))?></a>
        <a href="afisha?date=<?=date('Y-m-d',strtotime('+2 day'))?>"><?= date ('F j',strtotime('+2 day'))?></a>
    </div>

</div>
<div class="container-catalog">
<?php
if(is_array($films))
foreach ($films as $film)
{
?>

    <div data-aos="zoom-in" class="card">
            <div class="image-card">
                <img src="./resource/uploads/afisha/<?=$film['movie_image']?>" alt="">
             </div>
             <div class="information">
             <a href="film?id=<?=$film['id']?>"><div class="title-card">
                
            <h2><?=$film['movie_title'];?></h2>
        </div>
        </a>
        <div class="info-card">
            <span><?= $film['movie_genre']; ?></span> - <br><span><?= date("g \ч. i \мин.", strtotime($film['movie_duration']));?></span>
        </div>
        <div class="raspes-card">
            <h3>Сеансы 2D</h3>
            <div class="container-times">

                <?php
                require ('./views/seans.php')
                ?>
                
            </div>
        </div>
    </div>

    </div> 
       <?php
}
if (empty($films)) {
    echo 'Пока что нет фильмов в прокате';
}
?>
</div>
<div class="container-news">
    <h1>Акции и новости</h1>
    <div class="news-card">
        <div class="poster-news">
            <img src="./resource/uploads/news/45275.jpg" alt="">
        </div>
        <div class="information-news">
             <div class="title-news">
                <h1>Открытие кинотеатра в Горно-Алтайске</h1>
            </div>
            <div class="date-news">
                <span>28.01.23</span>
            </div>
            <div class="description-news">
                <span>Приглашаем всех на открытие кинотеатра, будет много акций и розыгрышей</span>
            </div>
        </div>
       
    </div>
    <div class="news-card">
        <div class="poster-news">
            <img src="./resource/uploads/news/45275.jpg" alt="">
        </div>
        <div class="information-news">
             <div class="title-news">
                <h1>Открытие кинотеатра в Горно-Алтайске</h1>
            </div>
            <div class="date-news">
                <span>28.01.23</span>
            </div>
            <div class="description-news">
                <span>Приглашаем всех на открытие кинотеатра, будет много акций и розыгрышей</span>
            </div>
        </div>
       
    </div>
</div>

<?php
use DBConnect as DBConnect;
$connect= DBConnect::getInstance()->getConnect();
$sql="SELECT * FROM movies WHERE id=".$_GET['id'];
$query=$connect->query($sql);
if($query->num_rows) {
  while ($row = $query->fetch_assoc()) {
    $film[] = $row;
  }
}
require_once './functions/seans.php';
?>
<div class="container-film">
        <div class="information-film">
            <div class="poster-film">
                <img src="./resource/uploads/afisha/<?=$film[0]['movie_image']?>" alt="">
            </div>
            <div class="restriction-film">
                <span><?=$film[0]['movie_restriction']?>+</span>
            </div>
            <div class="title-film">
                <h2><?=$film[0]['movie_title']?></h2>
            </div>
            
            <div class="genre-film">
            <span class="podtext">Жанр</span>
                <h3><?=$film[0]['movie_genre']?></h3>
            </div>
            <div class="country-film">
            <span class="podtext">Страна</span>
                <h3><?=$film[0]['movie_country']?></h3>
            </div>
            <div class="duration-film">
            <span class="podtext">Продолжительность</span>
                <p><?= date("g \ч. i \мин.", strtotime($film[0]['movie_duration']));?></p>
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
                <span><?=$film[0]['movie_description']?></span>
            </div>
            <div class="trailer">
            <iframe width="1000" height="500" src="<?=$film[0]['movie_trailer']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
</div>  
<?php 
?>
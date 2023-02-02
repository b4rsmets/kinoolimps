<?php
namespace functions;

class mainController
{
    public function getRoute()
    {
        switch ($_GET['route']) {
            case 'afisha':
                require_once "./views/mainpage.php";
                $_SESSION['seans']['movie_id'] = $_GET['id'];
                break;
            case 'film':
                require_once "./views/film.php";
                break;
            case 'soon':
                require_once "./views/soon-cinema.php";
                break;
            case 'booking':
                require_once "./views/booking.php";
                break;
        }
    }
}

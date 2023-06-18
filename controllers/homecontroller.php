<?php


class HomeController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Homepage';
        $pageRequest = 'welkomst-bericht';
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }




}

new HomeController;
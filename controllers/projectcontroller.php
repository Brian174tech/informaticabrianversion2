<?php


class ProjectController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Projectpage';
        $pageRequest = 'projecten maak een keuze';
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }

}

new ProjectController;
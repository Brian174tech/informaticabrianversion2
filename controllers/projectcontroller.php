<?php


class ProjectController{

    function __construct()
    {

        include_once 'views/render.php';
        $render = new Render();
        $pageType = 'Project';
        $pageRequest = $_GET['request'];
        $render->setPage($pageType, $pageRequest);
        $render->buildPage();

    }

}

new ProjectController;